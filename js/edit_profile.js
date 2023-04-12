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

            location.reload();
            return;

        } else {
            error_msg.style.display = 'flex'; btn_save_profile.innerHTML = 'Saglabāt';
        }
        
    }

}

function fileUploaded(file, element) {
    
    element.style.background = "#c7ffc7";

    var file = file.files[0];

    element.querySelector('.uploaded-image-name').innerText  = file.name;

    element.querySelector('.upload-img').style.display = 'none';

}

document.querySelector('#btn-save-profile').onclick = edit_profile;

