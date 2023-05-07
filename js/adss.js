function adss() {
    var data = location.search;

    let request = new XMLHttpRequest();

    request.open("GET", "functions/get_data_cars.php" + data);

    request.send();

    request.onload = () => {

        var more_html = '<div class="load-more"><span>VAIRĀK</span></div>';

        var result = document.querySelector('.result');
        result.querySelectorAll('.result-box').forEach(element => { element.outerHTML = null });

        result.innerHTML += request.response;
    }

}

let url = '/ads?';

function changeURL(list = 0) {
    url = '/ads?';
    var data = [];
    var select = document.querySelectorAll('select');

    select.forEach(element => {
        data.push(element.value);
    }); 
    
    data.push(list);

    if (data[0] != '') {
        url += '&brands=' + data[0];
    }

    if (data[1] != '') {
        url += '&models=' + data[1];
    }

    if (data[2] != '') {
        url += '&motor_types=' + data[2];
    }

    if (data[3] != '') {
        url += '&motor_power_min=' + data[3];
    }

    if (data[4] != '') {
        url += '&motor_power_max=' + data[4];
    }

    if (data[5] != '') {
        url += '&year_min=' + data[5];
    }

    if (data[6] != '') {
        url += '&year_max=' + data[6];
    }

    if (data[7] != '') {
        url += '&transmissions=' + data[7];
    }

    if (data[8] != '') {
        url += '&bodys=' + data[8];
    }

    if (data[9] != '') {
        url += '&colors=' + data[9];
    }

    if (data[10] != '') {
        url += '&technical_inspections=' + data[10];
    }

    if (data[11] != '') {
        url += '&locations=' + data[11];
    }

    if (data[12] != '') {
        url += '&order=' + data[12];
    }

    if (data[13] != '') {
        url += '&list=' + data[13];
    }

    history.pushState(null, null, url); adss();

}

selectOptions ('brands', document.querySelector('input[name=brands]'));
selectOptions ('models', document.querySelector('input[name=models]'));
selectOptions ('motor_types', document.querySelector('input[name=motor_types]'));
selectOptions ('motor_power_min', document.querySelector('input[name=motor_power_min]'));
selectOptions ('motor_power_max', document.querySelector('input[name=motor_power_max]'));
selectOptions ('year_min', document.querySelector('input[name=year_min]'));
selectOptions ('year_max', document.querySelector('input[name=year_max]'));
selectOptions ('transmissions', document.querySelector('input[name=transmissions]'));
selectOptions ('bodys', document.querySelector('input[name=bodys]'));
selectOptions ('colors', document.querySelector('input[name=colors]'));
selectOptions ('technical_inspections', document.querySelector('input[name=technical_inspections]'));
selectOptions ('locations', document.querySelector('input[name=locations]'));
selectOptions ('order', document.querySelector('input[name=order]'));

function selectOptions(name = null, html = null) {

    if (html == null) {
        return;
    }

    var select = document.querySelector('#' + name).querySelectorAll('option');

    select.forEach(value => {

        if (value.value == html.value) {

            document.querySelector('#' + name).options.selectedIndex = value.index;
        }
    });

}

adss();