const form_register = document.querySelector('#form-register');

function registration() {

    var error_msg = form_register.querySelector('.error-msg');
    var error_span = error_msg.querySelector('#err-msg');

    var btn_register = document.querySelector('#btn-register');
    btn_register.innerHTML = '<img src="ico/loading.gif" class="loading">';
    error_msg.style.display = 'none'; 

    var name = form_register.querySelector('input[name=name]').value;
    var email = form_register.querySelector('input[name=email]').value;
    var phone = form_register.querySelector('input[name=phone]').value;
    var password = form_register.querySelector('input[name=password]').value;
    var password_again = form_register.querySelector('input[name=password_again]').value;
    var whatsapp_status = form_register.querySelector('input[name=whatsapp_status]').checked;

    let request = new XMLHttpRequest();
    let formData = new FormData()

    request.open("POST", "functions/registration.php");

    formData.append("name", name);
    formData.append("email", email);
    formData.append("phone", phone);
    formData.append("password", password);
    formData.append("password_again", password_again);
    formData.append("whatsapp_status", whatsapp_status);

    request.send(formData);

    request.onload = () => {

        if (request.status >= 400) { error_msg.style.display = 'flex'; error_span.innerText = 'Nav savienojuma!'; }

        console.log(request.response == 'okay');
        
        if (request.response == 'okay') {

            location.reload();
            return;

        } else {
            error_msg.style.display = 'flex'; btn_register.innerHTML = 'Reģistrācija';
        }
        
        if (request.response == 'reload') {
            error_span.innerText = 'Kļūda, atkārtoti ielādējiet lapu!'; return;
        }

        if (request.response == 'no_name') {
            error_span.innerText = 'Jūs neievadījāt savu vārdu!'; return;
        }

        if (request.response == 'no_email') {
            error_span.innerText = 'Jūs neievadījāt savu pastu!'; return;
        }

        if (request.response == 'no_phone') {
            error_span.innerText = 'Jūs neievadījāt savu tālruņa numuru!'; return;
        }

        if (request.response == 'no_password') {
            error_span.innerText = 'Jūs neievadījāt savu paroli!'; return;
        }

        if (request.response == 'no_password_again') {
            error_span.innerText = 'Jūs neievadījāt savu atkārtoti paroli!'; return;
        }
        
        if (request.response == 'max_len_name') {
            error_span.innerText = 'Vards pārsniedz atļauto rakstzīmju ierobežojumu!'; return;
        }

        if (request.response == 'max_len_email') {
            error_span.innerText = 'Pasts pārsniedz atļauto rakstzīmju ierobežojumu!'; return;
        }

        if (request.response == 'wrong_phone') {
            error_span.innerText = 'Mobilā tālruņa formātam ir jābūt latviešu formātā: "29123456"!'; return;
        }

        if (request.response == 'invalid_email') {
            error_span.innerText = 'Nepareizs pasta formāts!'; return;
        }

        if (request.response == 'not_match_password') {
            error_span.innerText = 'Paroles ir atšķirīgas!'; return;
        }

        if (request.response == 'email_already_taken') {
            error_span.innerText = 'Šis pasts jau ir aizņemts!'; return;
        }
        
    }

}

document.querySelector('#btn-register').onclick = registration;