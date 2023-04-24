document.querySelector('.description span').innerHTML = document.querySelector('.description span').innerHTML.replaceAll('\n', '<br>');

function showImg(value) {
    value = value.value;
    document.querySelector('.car-photo-logo img').src = value;
}