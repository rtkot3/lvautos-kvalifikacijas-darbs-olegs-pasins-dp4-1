<?php session_start(); error_reporting(0);

if (!isset($_GET['id'])) {
    header('Location: /ads');
}

if (empty($_GET['id'])) {
    header('Location: /ads');
}

// -------------------------- //

include ("functions/sql_connection.php");

$id = $_GET['id'];

$ad = $mysql -> query(
    "SELECT * FROM `ads` WHERE `id` = '$id'"
);

$ad = $ad -> fetch_assoc();

$user_id = $ad['user_id'];

$user_own = $mysql -> query(
    "SELECT * FROM `users` WHERE `id` = '$user_id'"
);

$user_own = $user_own -> fetch_assoc();

if ($ad['ad_is_showing'] == '0') {

    if ($_SESSION['login']['is_admin'] != 1) {

        if ($user_own['email'] != $_SESSION['login']['email']) {
            header('Location: /ads');
        }
    }

}

if ($ad['id'] == null) {
    header('Location: /ads');
}

// -------------------------- //

$temp = $ad['car_transmission_id'];

$transmission = $mysql -> query(
    "SELECT * FROM `cars_transmissions` WHERE `id` = '$temp'"
);

$transmission = $transmission -> fetch_assoc();

// -------------------------- //

$temp = $ad['car_motor_type_id'];

$motor_type = $mysql -> query(
    "SELECT * FROM `cars_motor_types` WHERE `id` = '$temp'"
);

$motor_type = $motor_type -> fetch_assoc();

// -------------------------- //

$temp = $ad['car_body_id'];

$body = $mysql -> query(
    "SELECT * FROM `cars_bodys` WHERE `id` = '$temp'"
);

$body = $body -> fetch_assoc();

// -------------------------- //

$temp = $ad['car_color_id'];

$color = $mysql -> query(
    "SELECT * FROM `cars_colors` WHERE `id` = '$temp'"
);

$color = $color -> fetch_assoc();

// -------------------------- //

$temp = $ad['car_location_id'];

$location = $mysql -> query(
    "SELECT * FROM `cars_locations` WHERE `id` = '$temp'"
);

$location = $location -> fetch_assoc();

// -------------------------- //

$temp = $ad['user_id'];

$user_seller = $mysql -> query(
    "SELECT * FROM `users` WHERE `id` = '$temp'"
);

$user_seller = $user_seller -> fetch_assoc();

// -------------------------- //

$temp = $ad['car_id'];

$model123 = $mysql -> query(
    "SELECT * FROM `cars_models` WHERE `id` = '$temp'"
);

$model123 = $model123 -> fetch_assoc();

// -------------------------- //

$temp = $model123['brand'];

$brand123 = $mysql -> query(
    "SELECT * FROM `cars_brands` WHERE `id` = '$temp'"
);

$brand123 = $brand123 -> fetch_assoc();

// -------------------------- //

if ($ad['car_technical_inspection'] == '0') {
    $ad['car_technical_inspection'] = "Nav";
} else {
    $ad['car_technical_inspection'] = "Līdz " . $ad['car_technical_inspection'];
}

if ($ad['car_year'] == '0') {
    $ad['car_year'] = "Ļoti vecs";
}

if ($ad['ad_time_publication'] == '') {
    $ad_time_publication = 'Sludinājumu šobrīd izskata administrators ...';
} else {
    $ad_time_publication = date('d.m.Y', strtotime($ad['ad_time_publication']));
}

$user_registration_date = date('d.m.Y', strtotime($user_seller['registration_date']));

if ($user_seller['whatsapp_status'] == '1') {
    $whatsapp = '<div class="profile-contact"> <a target=”_blank” href="https://wa.me/' . $user_seller['phone'] . '"> <div class="contact-icon" style="background: #1DB18A;"> <img src="ico/whatsapp.svg" class="icon_24x24"> </div> <div class="contact-number" style="background: #199473;"> <span>+371' . substr($user_seller['phone'],0,4) . 'xxxx</span> </div> </a> </div>';
} else {
    $whatsapp = null;
}

if ($user_seller['profile_img'] == '') {
    $user_profile_img = 'ico/default_profile_image.jpg';
} else {
    $user_profile_img = 'data:image/jpeg;base64,' . $user_seller['profile_img'];
}

// -------------------------- //

$title = 'Auto Pārdošanas Sludinājumi';
$css = 'view';

$home_active;
$ads_active = true;
$cont_active;
$admin_active;

$show_upload = true;

require 'layouts/header.php';

?>



<div class="container stretch">

    <div class="view-box">

        <div class="car-block">

            <section class="_1st-block">

                <h1 class="car-logo"><?php echo $brand123['brand'] . ' ' . $model123['model'] ; ?></h1>
            
                <div class="time-view-odometr">

                    <div class="time-view-odometr-box">
                        <img src="ico/time.svg" class="icon_20x20">
                        <span style="margin: 0 15px;" class="ad_time_publication"><?php echo $ad_time_publication; ?></span>
                    </div>

                    <div class="time-view-odometr-box">
                        <img src="ico/views.svg" class="icon_20x20">
                        <span style="margin: 0 15px;">Skatījumu skaits: <?php echo $ad['ad_views']; ?></span>
                    </div>

                    <div class="time-view-odometr-box">
                        <img src="ico/odometr.svg" class="icon_20x20">
                        <span style="margin-left: 15px;"><?php echo $ad['car_mileage']; ?> km</span>
                    </div>

                </div>

                <div class="car-photos">

                    <div class="car-photo-logo">
                        <img src="data:image/jpeg;base64,<?php echo $ad['car_image_main'] ?>">
                    </div>

                    <div class="car-add-photos">

                        <div style="width: auto; display: flex; margin-left: 15px;">

                            <div onclick="showImg(this.querySelector('input'))" class="car-add-img" style="background-image: url('data:image/jpeg;base64,<?php echo $ad['car_image_main'] ?>');">
                                <input value="data:image/jpeg;base64,<?php echo $ad['car_image_main'] ?>">
                            </div>

                            <?php

                            for ($i = 1; $i <= 10; $i++) {
                                $name = "car_image_" . $i;

                                if ($ad[$name] == null) {
                                    continue;
                                }

                                echo '<div onclick="showImg(this.querySelector(\'input\'))" 
                                class="car-add-img" style="background-image: url(\'data:image/jpeg;base64,' . $ad[$name] . '\');"> 
                                <input value="data:image/jpeg;base64,' . $ad[$name] . '"> </div>';

                            }
                            
                            
                            ?>

                        </div>

                    </div>

                </div>

            </section>

            <section class="_2nd-block">
                
                <div class="price-block">

                        <div class="euro-icon">
                            <img src="ico/euro-2.svg" class="icon_24x24">
                        </div>
    
                        <div class="car-price">
                            <span><?php echo $ad['car_price']; ?></span>
                        </div>

                </div>

                <div class="car-info-block">
                    <div class="car-info">

                        <div class="car-info-section">
                            <span class="car-info-bold">Marka:</span>
                            <span class="car-info-light"><?php echo $brand123['brand']; ?></span>
                        </div>

                        <div class="car-info-section">
                            <span class="car-info-bold">Modelis:</span>
                            <span class="car-info-light"><?php echo $model123['model']; ?></span>
                        </div>

                        <div class="car-info-section">
                            <span class="car-info-bold">Gads:</span>
                            <span class="car-info-light"><?php echo $ad['car_year']; ?></span>
                        </div>

                        <div class="car-info-section">
                            <span class="car-info-bold">Dzinējs:</span>
                            <span class="car-info-light"><?php echo $ad['car_motor_power'] . ' ' . $motor_type['motor_type']; ?></span>
                        </div>

                        <div class="car-info-section">
                            <span class="car-info-bold">Ātrumkārba:</span>
                            <span class="car-info-light"><?php echo $transmission['transmission']; ?></span>
                        </div>

                        <div class="car-info-section">
                            <span class="car-info-bold">Automašīnas virsbūve:</span>
                            <span class="car-info-light"><?php echo $body['body']; ?></span>
                        </div>

                    </div>

                    <div class="car-info" style="margin-left: 15px;">

                        <div class="car-info-section">
                            <span class="car-info-bold">Krāsa:</span>
                            <span class="car-info-light"><?php echo $color['color']; ?></span>
                        </div>

                        <div class="car-info-section">
                            <span class="car-info-bold">Atrašanās vieta:</span>
                            <span class="car-info-light"><?php echo $location['location']; ?></span>
                        </div>

                        <div class="car-info-section">
                            <span class="car-info-bold">Tehniskā apskate:</span>
                            <span class="car-info-light"><?php echo $ad['car_technical_inspection']; ?></span>
                        </div>

                        <div class="car-info-section">
                            <span class="car-info-bold">VIN:</span>
                            <span class="car-info-light"><?php echo $ad['car_vin_number']; ?></span>
                        </div>

                        <div class="car-info-section">
                            <span class="car-info-bold">Reģistrācijas numurs:</span>
                            <span class="car-info-light"><?php echo $ad['car_registration_number']; ?></span>
                        </div>

                    </div>

                </div>

                <span class="comment">Komentārs:</span>

                <div class="description">
                    <span><?php echo $ad['car_description']; ?></span>
                </div>

            </section>

        </div>

        <div class="profile-block">

            <div class="profile-section">
                <div style="display: flex; justify-content: center;">
                    <div class="profile-img" style="background-image: url(<?php echo $user_profile_img; ?>)"></div>
                </div>

                <div class="profile-info">
                    <h3><?php echo $user_seller['name']; ?></h3>
                    <span>Tiešsaistē kopš <?php echo $user_registration_date; ?></span>
                </div>

                <div class="profile-contact">

                    <a href="tel:<?php echo $user_seller['phone']; ?>">

                        <div class="contact-icon">
                            <img src="ico/phone-2.svg" class="icon_24x24">
                        </div>
    
                        <div class="contact-number">
                            <span>+371<?php echo substr($user_seller['phone'],0,4); ?>xxxx</span>
                        </div>

                    </a>

                </div>

                <?php echo $whatsapp; ?>

            </div>

        </div>
    
    
    </div>

</div>

<script src="/js/view.js"></script>

<?php 

require 'layouts/footer.php'; 

?>