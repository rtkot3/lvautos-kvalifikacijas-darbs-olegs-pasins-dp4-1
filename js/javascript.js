window.onscroll = function (e) {  

    document.querySelector('nav').style.display = 'none';

    if (window.scrollY > 60) {
        document.querySelector('.header-section').style = 'position: fixed; top: 0';
        document.querySelector('.header-logo').style = 'margin-bottom: 60px';
    } else {
        document.querySelector('.header-section').style = 'position: relative;';
        document.querySelector('.header-logo').style = '';
    }
}

const profile = document.querySelector('#profile');

function UI(value, value2 = false) {
    if (value) {
        document.querySelector('#ui').style.display = '';

        if (value2 == false) {
            return;
        }

        switchto(value2);

    } else {
        document.querySelector('#ui').style.display = 'none';
    }
}

function switchto(switchtovalue) {

    document.querySelectorAll('.ui-section').forEach(element => {
        if (element.id == switchtovalue) {
            element.style.display = 'block';
        } else {
            element.style.display = 'none';
        }
    });

}

function menu() {
    if (document.querySelector('nav').style.display == 'none') {
        document.querySelector('nav').style.display = 'flex';
    } else {
        document.querySelector('nav').style.display = 'none';
    }
}

function updateModels(value) {

    let request = new XMLHttpRequest();

    request.open("GET", "functions/get_data?model=" + value.selectedOptions[0].value);

    request.send();

    request.onload = () => {

        let model = document.querySelector('#models');
        
        model.disabled = false;
        model.innerHTML = '<option value="" disabled selected>- Modelis -</option>' + request.response;
        
    }

}

function fileUploaded(file, element) {
    element.style.background = "#c7ffc7";
    var file = file.files[0];
    element.querySelector('.uploaded-image-name').innerText  = file.name;
    element.querySelector('.upload-img').style.display = 'none';
}

var image = new Image(); 
image.src = 'ico/loading.gif';

function findCar() {
    var brands = document.querySelector('#brands').value;
    var models = document.querySelector('#models').value;
    var transmissions = document.querySelector('#transmissions').value;
    var motor_types = document.querySelector('#motor_types').value;
    var locations = document.querySelector('#locations').value;

    var url = window.location.origin + 
    '/ads?brands=' + brands + 
    '&models=' + models +
    '&transmissions=' + transmissions +
    '&motor_types=' + motor_types +
    '&locations=' + locations;

    window.location.href = url;
    return;
}