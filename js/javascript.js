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