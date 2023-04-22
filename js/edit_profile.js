const form_profile = document.querySelector('#form-profile');

function edit_profile() {

    var error_msg = form_profile.querySelector('.error-msg');
    var error_span = error_msg.querySelector('#err-msg');

    var btn_save_profile = document.querySelector('#btn-save-profile');
    btn_save_profile.innerHTML = '<img src="ico/loading.gif" class="loading">';
    error_msg.style.display = 'none'; 

    var image = form_profile.querySelector('input[name=image]').files;
    var name = form_profile.querySelector('input[name=name]').value;
    var phone = form_profile.querySelector('input[name=phone]').value;

    let request = new XMLHttpRequest();
    let formData = new FormData()

    request.open("POST", "functions/edit_profile.php");

    formData.append("image", image[0]);
    formData.append("name", name);
    formData.append("phone", phone);

    request.send(formData);

    request.onload = () => {

        if (request.status >= 400) { error_msg.style.display = 'flex'; error_span.innerText = 'Nav savienojuma!'; }

        if (request.response == 'okay') {

            window.location.reload(true);
            return;

        } else {
            error_msg.style.display = 'flex'; btn_save_profile.innerHTML = 'Saglabāt';
        }

        if (request.response == 'not_allowed_method') {
            error_span.innerText = 'Šī metode nav pieejama, tikai "POST"!'; return;
        }

        if (request.response == 'reload') {
            error_span.innerText = 'Kļūda, atkārtoti ielādējiet lapu!'; return;
        }

        if (request.response == 'no_name') {
            error_span.innerText = 'Jūs neievadījāt savu vārdu!'; return;
        }

        if (request.response == 'no_phone') {
            error_span.innerText = 'Jūs neievadījāt savu tālruņa numuru!'; return;
        }

        if (request.response == 'max_len_name') {
            error_span.innerText = 'Vards pārsniedz atļauto rakstzīmju ierobežojumu!'; return;
        }

        if (request.response == 'wrong_phone') {
            error_span.innerText = 'Mobilā tālruņa formātam ir jābūt latviešu formātā: "29123456"!'; return;
        }
        
    }

}

document.querySelector('#btn-save-profile').onclick = edit_profile;

