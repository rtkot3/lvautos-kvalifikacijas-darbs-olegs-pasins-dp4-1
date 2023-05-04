<?php

include ("sql_connection.php");

$date = date('Y-m-d');

// -------------------------- //

if (!isset($_GET['list'])) {
    $list_no = 0;
    $list_to = $list_no + 10;
} else {
    $list_no = $_GET['list'];
    $list_to = $list_no + 10;
}

if (!isset($_GET['order'])) {
    $order = ' ORDER BY `id` DESC';
} else {
    if ($_GET['order'] == '1') {
        $order = ' ORDER BY `car_price` ASC';
    } else if ($_GET['order'] == '2') {
        $order = ' ORDER BY `car_price` DESC';
    } else if ($_GET['order'] == '3') {
        $order = ' ORDER BY `car_mileage` ASC';
    } else {
        $order = ' ORDER BY `car_mileage` DESC';
    }
}

if (!isset($_GET['models'])) {
    $models = null;
} else {
    $models = $_GET['models'];
}

if (!isset($_GET['brands'])) {
    $brands = null;
} else {
    $brands = $_GET['brands'];

    $brands_list = $mysql -> query(
        "SELECT * FROM `cars_models` WHERE `brand` = '$brands'"
    );

}

if (!isset($_GET['motor_types'])) {
    $motor_types = null;
} else {
    $motor_types = $_GET['motor_types'];
}

if (!isset($_GET['motor_power_min'])) {
    $motor_power_min = null;
} else {
    $motor_power_min = $_GET['motor_power_min'];
}

if (!isset($_GET['motor_power_max'])) {
    $motor_power_max = null;
} else {
    $motor_power_max = $_GET['motor_power_max'];
}

if (!isset($_GET['year_min'])) {
    $year_min = null;
} else {
    $year_min = $_GET['year_min'];
}

if (!isset($_GET['year_max'])) {
    $year_max = null;
} else {
    $year_max = $_GET['year_max'];
}

if (!isset($_GET['transmissions'])) {
    $transmissions = null;
} else {
    $transmissions = $_GET['transmissions'];
}

if (!isset($_GET['bodys'])) {
    $bodys = null;
} else {
    $bodys = $_GET['bodys'];
}

if (!isset($_GET['colors'])) {
    $colors = null;
} else {
    $colors = $_GET['colors'];
}

if (!isset($_GET['technical_inspections'])) {
    $technical_inspections = null;
} else {
    $technical_inspections = $_GET['technical_inspections'];
}

if (!isset($_GET['locations'])) {
    $locations = null;
} else {
    $locations = $_GET['locations'];
}

// -------------------------- //

$sql_request = "SELECT * FROM `ads` WHERE `ad_is_showing` = 1 AND ad_time_end > '$date'";

// -------------------------- //

if ($models != '') {
    $sql_request = $sql_request . " AND `car_id` = '$models'";
}

if ($motor_types != '') {
    $sql_request = $sql_request . " AND `car_motor_type_id` = '$motor_types'";
}

if ($motor_power_min != '') {
    $motor_power_min -= 0.1;
    $sql_request = $sql_request . " AND `car_motor_power` > '$motor_power_min'";
}

if ($motor_power_max != '') {
    $sql_request = $sql_request . " AND `car_motor_power` < '$motor_power_max'";
}

if ($year_min != '') {
    $year_min -= 1;
    $sql_request = $sql_request . " AND `car_year` > '$year_min'";
}

if ($year_max != '') {
    $year_max += 1;
    $sql_request = $sql_request . " AND `car_year` < '$year_max'";
}

if ($transmissions != '') {
    $sql_request = $sql_request . " AND `car_transmission_id` = '$transmissions'";
}

if ($bodys != '') {
    $sql_request = $sql_request . " AND `car_body_id` = '$bodys'";
}

if ($colors != '') {
    $sql_request = $sql_request . " AND `car_color_id` = '$colors'";
}

if ($technical_inspections != '') {
    if ($technical_inspections == 0) {
        $sql_request = $sql_request . " AND `car_technical_inspection` = '0'";
    } else {
        $sql_request = $sql_request . " AND `car_technical_inspection` != '0'";
    }
}

if ($locations != '') {
    $sql_request = $sql_request . " AND `car_location_id` = '$locations'";
}

if ($brands != '') {

    $temp = null;
    $temp2 = false;

    while ($row = $brands_list -> fetch_assoc()) {

        if ($temp2) {
            $temp = $temp . ',';
        }

        $temp2 = true;

        $temp = $temp . $row['id'];
        
    }

    $sql_request = $sql_request . " AND `car_id` IN ($temp)";
}

$sql_request = $sql_request . $order . " LIMIT $list_to OFFSET $list_no";

// -------------------------- //

$ad = $mysql -> query($sql_request);

while ($row = $ad -> fetch_assoc()) {

    // -------------------------- //

    $temp = $row['car_location_id'];

    $location = $mysql -> query(
        "SELECT * FROM `cars_locations` WHERE `id` = '$temp'"
    );

    $location = $location -> fetch_assoc();

    // -------------------------- //

    $temp = $row['car_transmission_id'];

    $transmission = $mysql -> query(
        "SELECT * FROM `cars_transmissions` WHERE `id` = '$temp'"
    );

    $transmission = $transmission -> fetch_assoc();

    // -------------------------- //

    $temp = $row['car_motor_type_id'];

    $car_motor = $mysql -> query(
        "SELECT * FROM `cars_motor_types` WHERE `id` = '$temp'"
    );

    $car_motor = $car_motor -> fetch_assoc();

    // -------------------------- //

    $temp = $row['car_id'];

    $model = $mysql -> query(
        "SELECT * FROM `cars_models` WHERE `id` = '$temp'"
    );

    $model = $model -> fetch_assoc();

    // -------------------------- //

    $temp = $model['brand'];

    $brand = $mysql -> query(
        "SELECT * FROM `cars_brands` WHERE `id` = '$temp'"
    );

    $brand = $brand -> fetch_assoc();

    // -------------------------- //

    if ($row['car_technical_inspection'] == '0') {
        $row['car_technical_inspection'] = "Nav";
    } else {
        $row['car_technical_inspection'] = "Līdz " . $row['car_technical_inspection'];
    }
    
    echo '
    
    <div class="result-box">
        <div class="car-image" style="background-image: url(data:image/jpeg;base64,' . $row['car_image_main'] . ');"></div>

        <div class="car-information">
            
            <div class="breadcrumbs">
                <a href="http://' . $_SERVER['HTTP_HOST'] . '/ads?brands=' . $brand['id'] . '">' . $brand['brand'] . '</a>
                <img src="ico/arrow-right.svg" class="icon_16x16" style="margin: 0 5px;">
                <a href="http://' . $_SERVER['HTTP_HOST'] . '/ads?models=' . $model['id'] . '">' . $model['model'] . '</a>
            </div>

            <div class="car-model">
                <h3>' . $brand['brand'] . ' ' . $model['model'] . '</h3>
            </div>

            <div class="car-mini-info">
                <img src="ico/car.svg" class="icon_20x20">
                <span style="margin: 0 15px;">' . $row['car_year'] . '</span>
                <img src="ico/power.svg" class="icon_20x20">
                <span style="margin-left: 15px;">' . $row['car_motor_power'] . ' ' . $car_motor['motor_type'] . '</span>
            </div>

            <div class="car-mini-add-info">

                <div style="display: flex; align-items: center">
                    <img src="ico/odometr.svg" class="icon_20x20">
                    <span style="margin: 0 15px;">' . $row['car_mileage'] . ' km</span>
                </div>

                <div style="display: flex; align-items: center">
                    <img src="ico/transmision.svg" class="icon_20x20">
                    <span style="margin: 0 15px;">' . $transmission['transmission'] . '</span>
                </div>

                <div style="display: flex; align-items: center">
                    <img src="ico/tech-doc.svg" class="icon_20x20">
                    <span style="margin-left: 15px;">' . $row['car_technical_inspection'] . '</span>                        
                </div>

            </div>

            <div class="car-location">
                <img src="ico/location.svg" class="icon_20x20">
                <span style="color: #B1B1B1; margin-left: 15px;">' . $location['location'] . '</span>
            </div>

            <div class="car-price-and-view">
                <img src="ico/euro.svg" class="icon_20x20">
                <span style="margin-left: 15px;">' . $row['car_price'] . '</span>
                <a style="margin-left: auto;" href="http://' . $_SERVER['HTTP_HOST'] . '/view?id=' . $row['id'] . '">SKATIES</a>
            </div>

        </div>

    </div>'
    
    ;

}

exit();

?>