const form_login = document.querySelector('#form-login');

function login() {

    var error_msg = form_login.querySelector('.error-msg');
    var error_span = error_msg.querySelector('#err-msg');

    var btn_login = document.querySelector('#btn-login');
    btn_login.innerHTML = '<img src="ico/loading.gif" class="loading">';
    error_msg.style.display = 'none'; 

    var email = form_login.querySelector('input[name=email]').value;
    var password = form_login.querySelector('input[name=password]').value;

    let request = new XMLHttpRequest();
    let formData = new FormData()

    request.open("POST", "functions/auth.php");

    formData.append("email", email);
    formData.append("password", password);

    request.send(formData);

    request.onload = () => {

        if (request.status >= 400) { error_msg.style.display = 'flex'; error_span.innerText = 'Nav savienojuma!'; }

        console.log(request.response == 'okay');
        
        if (request.response == 'okay') {

            location.reload();
            return;

        } else {
            error_msg.style.display = 'flex'; btn_login.innerHTML = 'Pieslēgties';
        }
        
        if (request.response == 'reload') {
            error_span.innerText = 'Kļūda, atkārtoti ielādējiet lapu!'; return;
        }

        if (request.response == 'no_email') {
            error_span.innerText = 'Jūs neievadījāt savu pastu!'; return;
        }

        if (request.response == 'no_password') {
            error_span.innerText = 'Jūs neievadījāt savu paroli!'; return;
        }

        if (request.response == 'invalid_email') {
            error_span.innerText = 'Nepareizs pasta formāts!'; return;
        }

        if (request.response == 'incorret_email_or_password') {
            error_span.innerText = 'Nepareizs e-pasts vai parole!'; return;
        }
        
    }

}

document.querySelector('#btn-login').onclick = login;