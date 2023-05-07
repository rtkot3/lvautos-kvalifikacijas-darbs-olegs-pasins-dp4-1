function adminViewCar(id = null) {

    var car_view = document.querySelector('.car-view');

    let request = new XMLHttpRequest();
    request.open("GET", "view?id=" + id);
    request.send();
    request.onload = () => {
        car_view.innerHTML = request.response;
        car_view.querySelector('header').outerHTML = null;
        car_view.querySelector('footer').innerHTML = null;
        car_view.querySelector('.profile-block').outerHTML = null;
        car_view.querySelector('.car-block').style.width = '100%';
        car_view.querySelector('.view-box').style.paddingTop = '15px';
    }

}

function adminUploadCar(id = null, html = null) {

    let request = new XMLHttpRequest();
    let formData = new FormData()

    request.open("POST", "functions/admin_car_edit.php");

    formData.append("id", id);
    formData.append("move", 'upload');

    request.send(formData);

    request.onload = () => {
        html.outerHTML = null;
        $.notify(id + " car has uploaded", "success");
    }
}

function adminDeleteCar(id = null) {

    let request = new XMLHttpRequest();
    let formData = new FormData()

    request.open("POST", "functions/admin_car_edit.php");

    formData.append("id", id);
    formData.append("move", 'delete');

    request.send(formData);

    request.onload = () => {
        $.notify(id + " car has deleted!", "error");
    }
}