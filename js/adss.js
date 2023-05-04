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

    history.pushState(null, null, url); adss()

}

adss()