<?php

if (isset($_SESSION['login'])) {

    include ("sql_connection.php");

    $email = $_SESSION['login']['email'];

    $user = $mysql -> query(
        "SELECT * FROM `users` 
        WHERE `email` = '$email'"
    );

    $user = $user -> fetch_assoc();

    if ($user == null) {
        
        session_destroy();
        header('Location: /');

    } else {

        $_SESSION['login'] = array(
            'name' => $user['name'],
            'email' => $user['email'],
            'phone' => $user['phone'],
            'profile_img' => $user['profile_img'],
            'is_admin' => $user['is_admin']
        );

    }

}

?>