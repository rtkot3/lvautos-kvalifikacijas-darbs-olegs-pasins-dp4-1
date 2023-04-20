const form_upload = document.querySelector('#form-upload');

function upload() {

    var error_msg = form_upload.querySelector('.error-msg');
    var error_span = error_msg.querySelector('#err-msg-upload');

    var btn_upload = form_upload.querySelector('.btn-upload');
    btn_upload.innerHTML = '<img src="ico/loading.gif" class="loading">';
    error_msg.style.display = 'none'; 

    var technical_inspection = form_upload.querySelector('select[name=technical_inspection]').value;
    var brand = form_upload.querySelector('select[name=brand]').value;
    var model = form_upload.querySelector('select[name=model]').value;
    var year = form_upload.querySelector('select[name=year]').value;
    var motor_type = form_upload.querySelector('select[name=motor_type]').value;
    var motor_power = form_upload.querySelector('select[name=motor_power]').value;
    var transmission = form_upload.querySelector('select[name=transmission]').value;
    var body = form_upload.querySelector('select[name=body]').value;
    var color = form_upload.querySelector('select[name=color]').value;
    var location = form_upload.querySelector('select[name=location]').value;
    var upload_time = form_upload.querySelector('select[name=upload_time]').value;

    var image_main = form_upload.querySelector('input[name=image_main]').files;
    var image_add1 = form_upload.querySelector('input[name=image_add1]').files;
    var image_add2 = form_upload.querySelector('input[name=image_add2]').files;
    var image_add3 = form_upload.querySelector('input[name=image_add3]').files;
    var image_add4 = form_upload.querySelector('input[name=image_add4]').files;
    var image_add5 = form_upload.querySelector('input[name=image_add5]').files;
    var image_add6 = form_upload.querySelector('input[name=image_add6]').files;
    var image_add7 = form_upload.querySelector('input[name=image_add7]').files;
    var image_add8 = form_upload.querySelector('input[name=image_add8]').files;
    var image_add9 = form_upload.querySelector('input[name=image_add9]').files;
    var image_add10 = form_upload.querySelector('input[name=image_add10]').files;

    var registration_number = form_upload.querySelector('input[name=registration_number]').value;
    var vin_number = form_upload.querySelector('input[name=vin_number]').value;
    var mileage = form_upload.querySelector('input[name=mileage]').value;
    var price = form_upload.querySelector('input[name=price]').value;
    var description = form_upload.querySelector('textarea[name=description]').value;
    var checkbox = form_upload.querySelector('input[name=checkbox]').checked;

    let request = new XMLHttpRequest();
    let formData = new FormData()

    request.open("POST", "functions/upload.php");

    formData.append("technical_inspection", technical_inspection);
    formData.append("brand", brand);
    formData.append("model", model);
    formData.append("year", year);
    formData.append("motor_type", motor_type);
    formData.append("motor_power", motor_power);
    formData.append("transmission", transmission);
    formData.append("body", body);
    formData.append("color", color);
    formData.append("location", location);
    formData.append("upload_time", upload_time);
    formData.append("image_main", image_main[0]);
    formData.append("image_add1", image_add1[0]);
    formData.append("image_add2", image_add2[0]);
    formData.append("image_add3", image_add3[0]);
    formData.append("image_add4", image_add4[0]);
    formData.append("image_add5", image_add5[0]);
    formData.append("image_add6", image_add6[0]);
    formData.append("image_add7", image_add7[0]);
    formData.append("image_add8", image_add8[0]);
    formData.append("image_add9", image_add9[0]);
    formData.append("image_add10", image_add10[0]);
    formData.append("registration_number", registration_number);
    formData.append("vin_number", vin_number);
    formData.append("mileage", mileage);
    formData.append("price", price);
    formData.append("description", description);
    formData.append("checkbox", checkbox);

    request.send(formData);

    request.onload = () => {

        if (request.status >= 400) { 
            error_msg.style.display = 'flex'; 
            scroll(0, 100);
            error_span.innerText = 'Nav savienojuma!'; 
        }
        
        if (request.response == 'okay') {

            location.reload();
            return;

        } else {
            error_msg.style.display = 'flex'; 
            scroll(0, 100);
            btn_upload.innerHTML = 'Pievienot sludinājumu';
        }

        if (request.response == 'not_allowed_method') {
            error_span.innerText = 'Šī metode nav pieejama, tikai "POST"!'; return;
        }
        
        if (request.response == 'reload') {
            error_span.innerText = 'Kļūda, atkārtoti ielādējiet lapu!'; return;
        }
        
    }

}

document.querySelector('.btn-upload').onclick = upload;