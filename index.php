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

?>

<section class="_1st-block">

    <div class="container">

        <div class="blue-box">
            <span class="active-ads">Šobrīd Aktīvi 100 Sludinājumi</span>
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

        <div class="last-ad">

            <a href="#"><div class="last-ad-img" style="background-image: url('ico/example-photo.png');"></div></a>

            <div class="car-info">

                <div class="car-info-box">
                    <a href="#" style="margin-right: 5px;">Bmw</a>
                    <img src="ico/arrow-right.svg" class="icon_20x20" style="margin-right: 5px;">
                    <a href="#">3-series</a>
                </div>

                <div class="car-info-box">
                    <img src="ico/car.svg" class="icon_20x20" style="margin-right: 15px;">
                    <span style="margin-right: 15px;">2005</span>
                    <img src="ico/power.svg" class="icon_20x20" style="margin-right: 15px;">
                    <span>2.5 Dīzels</span>
                </div>

                <div class="car-info-box">
                    <img src="ico/location.svg" class="icon_20x20" style="margin-right: 15px;">
                    <span style="color: #B1B1B1;">Rīga</span>
                </div>

                <div class="car-price">
                    <img src="ico/euro.svg" class="icon_20x20" style="margin-right: 15px;">
                    <span>3500</span>
                </div>
            </div>

        </div>

        <div class="last-ad" style="margin-left: 30px;">

            <a href="#"><div class="last-ad-img" style="background-image: url('ico/example-photo.png');"></div></a>

            <div class="car-info">

                <div class="car-info-box">
                    <a href="#" style="margin-right: 5px;">Bmw</a>
                    <img src="ico/arrow-right.svg" class="icon_20x20" style="margin-right: 5px;">
                    <a href="#">3-series</a>
                </div>

                <div class="car-info-box">
                    <img src="ico/car.svg" class="icon_20x20" style="margin-right: 15px;">
                    <span style="margin-right: 15px;">2005</span>
                    <img src="ico/power.svg" class="icon_20x20" style="margin-right: 15px;">
                    <span>2.5 Dīzels</span>
                </div>

                <div class="car-info-box">
                    <img src="ico/location.svg" class="icon_20x20" style="margin-right: 15px;">
                    <span style="color: #B1B1B1;">Rīga</span>
                </div>

                <div class="car-price">
                    <img src="ico/euro.svg" class="icon_20x20" style="margin-right: 15px;">
                    <span>3500</span>
                </div>
            </div>

        </div>

        <div class="last-ad" style="margin-left: 30px;">

            <a href="#"><div class="last-ad-img" style="background-image: url('ico/example-photo.png');"></div></a>

            <div class="car-info">

                <div class="car-info-box">
                    <a href="#" style="margin-right: 5px;">Bmw</a>
                    <img src="ico/arrow-right.svg" class="icon_20x20" style="margin-right: 5px;">
                    <a href="#">3-series</a>
                </div>

                <div class="car-info-box">
                    <img src="ico/car.svg" class="icon_20x20" style="margin-right: 15px;">
                    <span style="margin-right: 15px;">2005</span>
                    <img src="ico/power.svg" class="icon_20x20" style="margin-right: 15px;">
                    <span>2.5 Dīzels</span>
                </div>

                <div class="car-info-box">
                    <img src="ico/location.svg" class="icon_20x20" style="margin-right: 15px;">
                    <span style="color: #B1B1B1;">Rīga</span>
                </div>

                <div class="car-price">
                    <img src="ico/euro.svg" class="icon_20x20" style="margin-right: 15px;">
                    <span>3500</span>
                </div>
            </div>

        </div>

        <div class="last-ad mega-last-ad" style="margin-left: 30px;">

            <a href="#"><div class="last-ad-img" style="background-image: url('ico/example-photo.png');"></div></a>

            <div class="car-info">

                <div class="car-info-box">
                    <a href="#" style="margin-right: 5px;">Bmw</a>
                    <img src="ico/arrow-right.svg" class="icon_20x20" style="margin-right: 5px;">
                    <a href="#">3-series</a>
                </div>

                <div class="car-info-box">
                    <img src="ico/car.svg" class="icon_20x20" style="margin-right: 15px;">
                    <span style="margin-right: 15px;">2005</span>
                    <img src="ico/power.svg" class="icon_20x20" style="margin-right: 15px;">
                    <span>2.5 Dīzels</span>
                </div>

                <div class="car-info-box">
                    <img src="ico/location.svg" class="icon_20x20" style="margin-right: 15px;">
                    <span style="color: #B1B1B1;">Rīga</span>
                </div>

                <div class="car-price">
                    <img src="ico/euro.svg" class="icon_20x20" style="margin-right: 15px;">
                    <span>3500</span>
                </div>
            </div>

        </div>

    </div>

</div>

<script src="/js/index.js"></script>

<?php 

require 'layouts/footer.php'; 

?>