<?php sleep(1); session_start();

// -------------------------- //

if (!isset($_SESSION['login'])) {
    exit();
}

if ($_SESSION['login']['is_admin'] != 1) {
    echo 'only_admins'; exit();
}

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    echo 'not_allowed_method'; exit();
}

// -------------------------- //

if (!isset($_POST['id'])) { echo 'reload'; exit(); }

if (!isset($_POST['move'])) { echo 'reload'; exit(); }

// -------------------------- //

include ("sql_connection.php");

$car_id = $_POST['id'];

if ($_POST['move'] == 'upload') {

    $start_date = date('Y-m-d');

    $ad_car_information = $mysql -> query(
        "SELECT * FROM `ads` WHERE `id` = '$car_id'"
    );

    $ad_car_information = $ad_car_information -> fetch_assoc();

    $upload_days = $ad_car_information['ad_upload_time'] * 7;

    $end_date = date("Y-m-d", strtotime($start_date.'+ ' . $upload_days . ' days'));

    $mysql -> query("UPDATE `ads` SET `ad_is_showing` = 1, `ad_time_publication` = '$start_date', `ad_time_end` = '$end_date'  WHERE `id` = '$car_id'");

} else if ($_POST['move'] == 'delete') {

    $mysql -> query("DELETE FROM `ads` WHERE `id` = '$car_id'");

} else {
    echo 'move_not_correct'; exit();
}

echo 'okay'; exit();

?>