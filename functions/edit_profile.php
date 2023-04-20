<?php sleep(1); session_start();

// -------------------------- //

if (!isset($_SESSION['login'])) {
    exit();
}

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    echo 'not_allowed_method'; exit();
}

// -------------------------- //

if (!isset($_POST['name'])) { echo 'reload'; exit(); }

if (!isset($_POST['phone'])) { echo 'reload'; exit(); }

// -------------------------- //

$name = trim(preg_replace('/\s+/', ' ', $_POST['name']));
$phone = trim(preg_replace('/\s+/', ' ', $_POST['phone']));

// -------------------------- //

if ($name == '') {
    echo 'no_name'; exit();
}

if ($phone == '') {
    echo 'no_phone'; exit();
}

// -------------------------- //

if (strlen($name) > 50) {
    echo 'max_len_name'; exit();
}

if (strlen($phone) != 8) {
    echo 'wrong_phone'; exit();
}

// -------------------------- //

include ("sql_connection.php");

$email = $_SESSION['login']['email'];

if (isset($_FILES['image'])) {
    $profile_img = base64_encode(file_get_contents($_FILES['image']['tmp_name']));
    $mysql -> query("UPDATE `users` SET `name` = '$name', `phone` = '$phone', `profile_img` = '$profile_img' WHERE `email` = '$email'");
    $_SESSION['login']['profile_img'] = $profile_img;
} else {
    $mysql -> query("UPDATE `users` SET `name` = '$name', `phone` = '$phone' WHERE `email` = '$email'");
}

$_SESSION['login']['name'] = $name;
$_SESSION['login']['phone'] = $phone;

echo 'okay'; exit();

?>