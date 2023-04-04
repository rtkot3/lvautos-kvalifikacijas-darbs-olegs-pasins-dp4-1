<?php sleep(1); session_start();

// -------------------------- //

if (!isset($_POST['email'])) { echo 'reload'; exit(); }

if (!isset($_POST['password'])) { echo 'reload'; exit(); }

// -------------------------- //

$email = trim(preg_replace('/\s+/', ' ', $_POST['email']));
$password = trim(preg_replace('/\s+/', ' ', $_POST['password']));

// -------------------------- //

if ($email == '') {
    echo 'no_email'; exit();
}

if ($password == '') {
    echo 'no_password'; exit();
}

// -------------------------- //

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'invalid_email'; exit();
}

// -------------------------- //

$email = strtolower($email);
$password = md5($password);

// -------------------------- //

include ("sql_connection.php");

$user = $mysql -> query(
    "SELECT * FROM `users` 
    WHERE `email` = '$email' AND `password` = '$password'"
);

$user = $user -> fetch_assoc();

if ($user == null) {
    echo 'incorret_email_or_password'; exit();
}

// -------------------------- //

$_SESSION['login'] = array(
    'name' => $user['name'],
    'email' => $user['email'],
    'phone' => $user['phone'],
    'profile_img' => $user['profile_img'],
    'is_admin' => $user['is_admin']
);

echo 'okay'; exit();

?>

