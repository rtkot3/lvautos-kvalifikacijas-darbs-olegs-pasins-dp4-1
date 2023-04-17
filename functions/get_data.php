<?php session_start();

include ("sql_connection.php");

$json = [];
$result = null;
$value = null;

if (isset($_GET['cars_bodys'])) {

    $value = "body";

    $result = $mysql -> query(
        "SELECT * FROM `cars_bodys`"
    );

} else if (isset($_GET['cars_brands'])) {

    $value = "brand";

    $result = $mysql -> query(
        "SELECT * FROM `cars_brands`"
    );

} else if (isset($_GET['cars_colors'])) {

    $value = "color";

    $result = $mysql -> query(
        "SELECT * FROM `cars_colors`"
    );

} else if (isset($_GET['cars_locations'])) {

    $value = "location";

    $result = $mysql -> query(
        "SELECT * FROM `cars_locations`"
    );

} else if (isset($_GET['cars_models'])) {

    exit;

} else if (isset($_GET['cars_motor_types'])) {

    $value = "motor_type";

    $result = $mysql -> query(
        "SELECT * FROM `cars_motor_types`"
    );
    
} else if (isset($_GET['cars_transmissions'])) {

    $value = "transmission";

    $result = $mysql -> query(
        "SELECT * FROM `cars_transmissions`"
    );
    
} else {

    echo 'null';
    exit;

}

while ($row = $result -> fetch_assoc()) {
    array_push($json, $row[$value]);
    echo '<p>'. $row[$value] .'</p>';
}

echo json_encode($json);

exit;

?>