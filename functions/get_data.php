<?php

function get_data($value_get_data = "brand") {

    include ("sql_connection.php");

    if ($value_get_data == "body") {

        $result = $mysql -> query(
            "SELECT * FROM `cars_bodys`"
        );

    } else if ($value_get_data == "brand") {

        $result = $mysql -> query(
            "SELECT * FROM `cars_brands`"
        );

    } else if ($value_get_data == "color") {

        $result = $mysql -> query(
            "SELECT * FROM `cars_colors`"
        );

    } else if ($value_get_data == "location") {

        $result = $mysql -> query(
            "SELECT * FROM `cars_locations`"
        );

    } else if ($value_get_data == "motor_type") {

        $result = $mysql -> query(
            "SELECT * FROM `cars_motor_types`"
        );
        
    } else if ($value_get_data == "transmission") {

        $result = $mysql -> query(
            "SELECT * FROM `cars_transmissions`"
        );
        
    }

    while ($row = $result -> fetch_assoc()) {
        echo '<option value="' . $row['id'] . '">'. $row[$value_get_data] .'</option>';
    }

}

if (isset($_GET['model'])) {

    if (empty($_GET['model'])) {
        exit();
    }

    include ("sql_connection.php");

    $value2 = $_GET['model'];

    $result = $mysql -> query(
        "SELECT * FROM `cars_models`
        WHERE `brand` = '$value2'"
    );

    while ($row = $result -> fetch_assoc()) {
        echo '<option value="' . $row['id'] . '">'. $row['model'] .'</option>';
    }

    exit(); 
}


?>