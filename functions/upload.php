<?php sleep(1); session_start();

// -------------------------- //

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    echo 'not_allowed_method'; exit();
}

// -------------------------- //

if (!isset($_POST['technical_inspection'])) { echo 'reload'; exit(); }
if (!isset($_POST['model'])) { echo 'reload'; exit(); }
if (!isset($_POST['year'])) { echo 'reload'; exit(); }
if (!isset($_POST['motor_type'])) { echo 'reload'; exit(); }
if (!isset($_POST['motor_power'])) { echo 'reload'; exit(); }
if (!isset($_POST['transmission'])) { echo 'reload'; exit(); }
if (!isset($_POST['body'])) { echo 'reload'; exit(); }
if (!isset($_POST['color'])) { echo 'reload'; exit(); }
if (!isset($_POST['location'])) { echo 'reload'; exit(); }
if (!isset($_POST['upload_time'])) { echo 'reload'; exit(); }
if (!isset($_POST['registration_number'])) { echo 'reload'; exit(); }
if (!isset($_POST['vin_number'])) { echo 'reload'; exit(); }
if (!isset($_POST['mileage'])) { echo 'reload'; exit(); }
if (!isset($_POST['price'])) { echo 'reload'; exit(); }
if (!isset($_POST['description'])) { echo 'reload'; exit(); }
if (!isset($_POST['checkbox'])) { echo 'reload'; exit(); }

// -------------------------- //

if (!isset($_FILES['image_main'])) { 
    if (!isset($_POST['image_main'])) { echo 'reload'; exit(); } 
}

for ($i = 1; $i <= 10; $i++) {

    $file = "image_add" . $i;

    if (!isset($_FILES[$file])) { 
        if (!isset($_POST[$file])) { echo 'reload'; exit(); } 
    }
}

// -------------------------- //

$checkbox = $_POST['checkbox'];

if ($checkbox == "false") {
    echo 'checkbox_false'; exit();
}

// -------------------------- //

$registration_number = trim(preg_replace('/\s+/', ' ', $_POST['registration_number']));
$vin_number = $_POST['vin_number'];
$mileage = $_POST['mileage'];
$price = $_POST['price'];
$description = $_POST['description'];

$technical_inspection = $_POST['technical_inspection'];
$model = $_POST['model'];
$motor_power = $_POST['motor_power'];
$year = $_POST['year'];
$motor_type = $_POST['motor_type'];
$transmission = $_POST['transmission'];
$body = $_POST['body'];
$color = $_POST['color'];
$location = $_POST['location'];
$upload_time = $_POST['upload_time'];

// -------------------------- //

if ($registration_number == '') {
    echo 'no_registration_number'; exit();
}

if ($vin_number == '') {
    echo 'no_vin_number'; exit();
}

if (strlen($vin_number) != 17) {
    echo 'incorrect_vin_number'; exit();
}

if ($price == '') {
    echo 'no_price'; exit();
}

if ($mileage == '') {
    echo 'no_mileage'; exit();
}

if ($description == '') {
    echo 'no_description'; exit();
}

if ($technical_inspection == '') {
    echo 'no_technical_inspection'; exit();
}

if ($model == '') {
    echo 'no_model'; exit();
}

if ($year == '') {
    echo 'no_year'; exit();
}

if ($motor_type == '') {
    echo 'no_motor_type'; exit();
}

if ($transmission == '') {
    echo 'no_transmission'; exit();
}

if ($body == '') {
    echo 'no_body'; exit();
}

if ($color == '') {
    echo 'no_color'; exit();
}

if ($motor_power == '') {
    echo 'no_motor_power'; exit();
}

if ($location == '') {
    echo 'no_location'; exit();
}

if ($upload_time == '') {
    echo 'no_upload_time'; exit();
}

// -------------------------- //

$images = [];

if (!isset($_FILES['image_main'])) { 
    echo 'no_image_main'; exit();
} else {
    array_push($images, base64_encode(file_get_contents($_FILES['image_main']['tmp_name'])));
}

for ($i = 1; $i <= 10; $i++) {

    $file = "image_add" . $i;

    if (!isset($_FILES[$file])) { 
        array_push($images, null);
    } else {
        array_push($images, base64_encode(file_get_contents($_FILES[$file]['tmp_name'])));
    }
}

// -------------------------- //

$user_email = $_SESSION['login']['email'];
$user_id;

include ("sql_connection.php");

$result = $mysql -> query(
    "SELECT * FROM `users`
    WHERE `email` = '$user_email'"
);

$result = $result -> fetch_assoc();

if ($result == null) {
    echo 'no_user_in_session'; exit();
} else {
    $user_id = $result['id'];
}

$car_image_main = $images[0];

$image_add1 = $images[1];
$image_add2 = $images[2];
$image_add3 = $images[3];
$image_add4 = $images[4];
$image_add5 = $images[5];
$image_add6 = $images[6];
$image_add7 = $images[7];
$image_add8 = $images[8];
$image_add9 = $images[9];
$image_add10 = $images[10];

$mysql -> query(
    "INSERT INTO `ads` (`user_id`,`car_id`,`car_motor_type_id`,`car_transmission_id`,`car_body_id`,`car_color_id`,
    `car_location_id`,`car_motor_power`,`car_year`,`car_technical_inspection`,`car_vin_number`,`car_mileage`,`car_description`,`car_registration_number`,
    `car_image_main`,`car_image_1`,`car_image_2`,`car_image_3`,`car_image_4`,`car_image_5`,`car_image_6`,`car_image_7`,`car_image_8`,`car_image_9`,`car_image_10`,
    `car_price`,`ad_time_publication`,`ad_time_end`,`ad_upload_time`,`ad_views`,`ad_is_showing`) 
    VALUES('$user_id','$model','$motor_type','$transmission','$body','$color',
    '$location','$motor_power','$year','$technical_inspection','$vin_number','$mileage','$description','$registration_number',
    '$car_image_main','$image_add1','$image_add2','$image_add3','$image_add4','$image_add5','$image_add6','$image_add7','$image_add8','$image_add9','$image_add10',
    '$price',null,null,'$upload_time','0','0')"
);

echo 'okay'; exit();


?>