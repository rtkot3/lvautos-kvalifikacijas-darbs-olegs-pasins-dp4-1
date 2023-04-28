<?php 

$title = 'Auto Pārdošanas Sludinājumi';
$css = 'index';

$home_active = true;
$ads_active;
$cont_active;
$admin_active;

$show_upload = true;

require 'layouts/header.php'; 
require "functions/get_data.php";
include ("functions/sql_connection.php");

$date = date('Y-m-d');

$active_ads = $mysql -> query(
    "SELECT COUNT(*) as `active_ads` 
    FROM `ads` WHERE `ad_is_showing` = 1 AND ad_time_end > '$date';"
);

$active_ads = $active_ads -> fetch_assoc();

if ($active_ads['active_ads'] == 1) {
    $active_ads = "Šobrīd Aktīvs 1 Sludinājums";
} else {
    $active_ads = "Šobrīd Aktīvi " . $active_ads['active_ads'] . " Sludinājumi";
}

?>

<section class="_1st-block">

    <div class="container">

        <div class="blue-box">
            <span class="active-ads"><?php echo $active_ads; ?></span>
            <h1 class="site-header">Auto Pārdošanas Sludinājumi</h1>
            <span class="additional-info">Atrodi Savu Nākotnes Auto.</span>
        </div>

        <div class="find-auto-block">

            <div class="fast-find">

                <div class="fast-find-box" style="display: flex;">

                    <div class="input-select" style="margin-right: 15px; width: 100%;">
                        <select id="brands" onchange="updateModels(this);">
                            <option value="" disabled selected>- Brands -</option>
                            <?php get_data(); ?>
                        </select>
                        <div class="input-section-icon">
                            <img src="ico/arrow-down.svg" class="icon_20x20">
                        </div>
                    </div>

                    <div class="input-select" style="margin-right: 15px; width: 100%;">
                        <select id="models" disabled>
                            <option value="" disabled selected>- Modelis -</option>
                        </select>
                        <div class="input-section-icon">
                            <img src="ico/arrow-down.svg" class="icon_20x20">
                        </div>
                    </div>

                    <div class="input-select" style="width: 100%;">
                        <select id="transmissions">
                            <option value="" disabled selected>- Ātrumkarba -</option>
                            <?php get_data("transmission"); ?>
                        </select>
                        <div class="input-section-icon">
                            <img src="ico/arrow-down.svg" class="icon_20x20">
                        </div>
                    </div>

                </div>

                <div class="fast-find-box fast-find-box-second">

                    <div class="input-select" style="margin-right: 15px; width: 100%;">
                        <select id="motor_types">
                            <option value="" disabled selected>- Dzinēja Tips -</option>
                            <?php get_data("motor_type"); ?>
                        </select>
                        <div class="input-section-icon">
                            <img src="ico/arrow-down.svg" class="icon_20x20">
                        </div>
                    </div>

                    <div class="input-select" style="margin-right: 15px; width: 100%;">
                        <select id="locations">
                            <option value="" disabled selected>- Rajons -</option>
                            <?php get_data("location"); ?>
                        </select>
                        <div class="input-section-icon">
                            <img src="ico/location-black.svg" class="icon_20x20">
                        </div>
                    </div>

                    <button class="find-auto">ATRAST</button>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="_2nd-block">

    <div class="container fast-car-box" style="display: flex; justify-content: center;">

        <div class="section-box-fast-cars" id="section-box-fast-cars-first" style="display: flex">
            <div class="fast-box-find">
                <a href="#">
                    <img src="ico/Bmw.png">
                    <span>Bmw</span>
                </a>
            </div>

            <div class="fast-box-find" style="margin-left: 30px;">
                <a href="#">
                    <img src="ico/Audi.png">
                    <span>Audi</span>
                </a>
            </div>

            <div class="fast-box-find" style="margin-left: 30px;">
                <a href="#">
                    <img src="ico/Mercedes.png">
                    <span>Mercedes</span>
                </a>
            </div>
        </div>

        <div class="section-box-fast-cars" style="display: flex">
            <div class="fast-box-find" style="margin-left: 30px;">
                <a href="#">
                    <img src="ico/Volkswagen.png">
                    <span>Volkswagen</span>
                </a>
            </div>

            <div class="fast-box-find" style="margin-left: 30px;">
                <a href="#">
                    <img src="ico/Toyota.png">
                    <span>Toyota</span>
                </a>
            </div>

            <div class="fast-box-find" style="margin-left: 30px;">
                <a href="#">
                    <img src="ico/Mazda.png">
                    <span>Mazda</span>
                </a>
            </div>
        </div>

        <div class="fast-box-find hyundai" style="margin-left: 30px;">
            <a href="#">
                <img src="ico/Hyundai.png">
                <span>Hyundai</span>
            </a>
        </div>

    </div>

</section>

<div class="container">

    <div class="lasts-header">

        <h2>Pēdējie Sludinājumi</h2>
        <span>Jaunākie Publicētie Sludinājumi Vietnē</span>

    </div>

    <div class="lasts-ads">

        <?php

        $ad = $mysql -> query(
            "SELECT * FROM `ads` WHERE `ad_is_showing` = 1 AND ad_time_end > '$date' LIMIT 4"
        );

        $temp_value = false;
        $temp_value2 = 0;
        $last_ad = '';

        while ($row = $ad -> fetch_assoc()) {

            $temp_value2++;

            $style = '';

            if ($temp_value) {
                $style = 'style="margin-left: 30px;"';
            } 
            
            $temp_value = true;

            if ($temp_value2 == 4) {
                $last_ad = 'mega-last-ad';
            }

            // -------------------------- //

            $location_id = $row['car_location_id'];

            $location = $mysql -> query(
                "SELECT * FROM `cars_locations` WHERE `id` = '$location_id'"
            );

            $location = $location -> fetch_assoc();

            // -------------------------- //

            $model_id = $row['car_id'];

            $model = $mysql -> query(
                "SELECT * FROM `cars_models` WHERE `id` = '$model_id'"
            );

            $model = $model -> fetch_assoc();

            // -------------------------- //

            $brand_id = $model['brand'];

            $brand = $mysql -> query(
                "SELECT * FROM `cars_brands` WHERE `id` = '$brand_id'"
            );

            $brand = $brand -> fetch_assoc();

            // -------------------------- //

            $car_motor_id = $row['car_motor_type_id'];

            $car_motor = $mysql -> query(
                "SELECT * FROM `cars_motor_types` WHERE `id` = '$car_motor_id'"
            );

            $car_motor = $car_motor -> fetch_assoc();

            // -------------------------- //

            echo '

            <div class="last-ad ' . $last_ad . '" ' . $style . '">

                <a href="view?id=' . $row['id'] . '"><div class="last-ad-img" style="background-image: url(\'data:image/jpeg;base64,' . $row['car_image_main'] . '\');"></div></a>

                <div class="car-info">

                    <div class="car-info-box">
                        <a href="#" style="margin-right: 5px;">' . $brand['brand'] . '</a>
                        <img src="ico/arrow-right.svg" class="icon_20x20" style="margin-right: 5px;">
                        <a href="#">' . $model['model'] . '</a>
                    </div>

                    <div class="car-info-box">
                        <img src="ico/car.svg" class="icon_20x20" style="margin-right: 15px;">
                        <span style="margin-right: 15px;">' . $row['car_year'] . '</span>
                        <img src="ico/power.svg" class="icon_20x20" style="margin-right: 15px;">
                        <span>' . $row['car_motor_power'] . ' ' . $car_motor['motor_type'] . '</span>
                    </div>

                    <div class="car-info-box">
                        <img src="ico/location.svg" class="icon_20x20" style="margin-right: 15px;">
                        <span style="color: #B1B1B1;">' . $location['location'] . '</span>
                    </div>

                    <div class="car-price">
                        <img src="ico/euro.svg" class="icon_20x20" style="margin-right: 15px;">
                        <span>' . $row['car_price'] . '</span>
                    </div>
                </div>

            </div>';

        }


        ?>

    </div>

</div>

<?php 

require 'layouts/footer.php'; 

?>