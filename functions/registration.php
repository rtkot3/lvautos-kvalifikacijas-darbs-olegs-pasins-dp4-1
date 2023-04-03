<?php sleep(1); session_start();

// -------------------------- //

if (!isset($_POST['name'])) { echo 'reload'; exit(); }

if (!isset($_POST['email'])) { echo 'reload'; exit(); }

if (!isset($_POST['phone'])) { echo 'reload'; exit(); }

if (!isset($_POST['password'])) { echo 'reload'; exit(); }

if (!isset($_POST['password_again'])) { echo 'reload'; exit(); }

if (!isset($_POST['whatsapp_status'])) { echo 'reload'; exit(); }

// -------------------------- //

$name = trim(preg_replace('/\s+/', ' ', $_POST['name']));
$email = trim(preg_replace('/\s+/', ' ', $_POST['email']));
$phone = trim(preg_replace('/\s+/', ' ', $_POST['phone']));
$password = trim(preg_replace('/\s+/', ' ', $_POST['password']));
$password_again = trim(preg_replace('/\s+/', ' ', $_POST['password_again']));
$whatsapp_status = $_POST['whatsapp_status'];

// -------------------------- //

if ($name == '') {
    echo 'no_name'; exit();
}

if ($email == '') {
    echo 'no_email'; exit();
}

if ($phone == '') {
    echo 'no_phone'; exit();
}

if ($password == '') {
    echo 'no_password'; exit();
}

if ($password_again == '') {
    echo 'no_password_again'; exit();
}

// -------------------------- //

if (strlen($name) > 50) {
    echo 'max_len_name'; exit();
}

if (strlen($email) > 70) {
    echo 'max_len_email'; exit();
}

if (strlen($phone) != 8) {
    echo 'wrong_phone'; exit();
}


// -------------------------- //

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'invalid_email'; exit();
}

if ($password_again != $password) {
    echo 'not_match_password'; exit();
}

// -------------------------- //

include ("sql_connection.php");

$result = $mysql -> query(
    "SELECT * FROM `users` WHERE `email` = '$email'"
);

$result = $result -> fetch_assoc();

if ($result != null) {
    echo 'email_already_taken'; exit();
}

// -------------------------- //

$password = md5($password);

if ($whatsapp_status) { 
    $whatsapp_status = '1'; 
} else { 
    $whatsapp_status = '0'; 
}

// -------------------------- //

$mysql -> query(
    "INSERT INTO `users` (`name`,`email`,`phone`,`password`,`whatsapp_status`,`is_admin`) VALUES('$name','$email','$phone','$password','$whatsapp_status','0')"
);

// -------------------------- //

echo 'okay'; exit();

?>

