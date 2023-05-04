<?php 

$title = 'Auto Pārdošanas Sludinājumi';
$css = 'adss';

$home_active;
$ads_active;
$cont_active;
$admin_active;

$show_upload = true;

require 'layouts/header.php'; 
require "functions/get_data.php";
include ("functions/sql_connection.php");

?>

<div class="container stretch">

    <div class="search-container">

    <div class="search-container1234">

        <div class="search-box">

            <div class="search-header bb">
                <span>Transportlīdzeklis</span>
            </div>

            <div class="input-select" style="margin: 15px;">
                <select id="brands" onchange="updateModels(this); changeURL()">
                    <option value="" selected>- Brand -</option>
                    <?php get_data(); ?>
                </select>
                <div class="input-section-icon">
                    <img src="ico/arrow-down.svg" class="icon_20x20">
                </div>
            </div>

            <div class="input-select" style="margin: 15px;">
                <select id="models" disabled onchange="changeURL()">
                    <option value="" selected>- Modelis -</option>
                </select>
                <div class="input-section-icon">
                    <img src="ico/arrow-down.svg" class="icon_20x20">
                </div>
            </div>

            <div class="search-header btb">
                <span>Dzinēja tips</span>
            </div>

            <div class="input-select" style="margin: 15px; margin-bottom: 0;">
                <select onchange="changeURL()">
                    <option value="" selected >- Dzinēja tips -</option>
                    <?php get_data("motor_type"); ?>
                </select>
                <div class="input-section-icon">
                    <img src="ico/arrow-down.svg" class="icon_20x20">
                </div>
            </div>

            <div style="display: flex;">

                <div class="input-select" style="margin: 15px;">
                    <select onchange="changeURL()">
                        <option value="" selected>No</option>

                    <?php

                    for ($i = 1.1; $i <= 6.5; $i = $i + 0.1) {
                        echo "<option value=\"" . $i . "\">" . $i . "</option>";
                    }    
                                            
                    ?>

                    </select>
                    <div class="input-section-icon">
                        <img src="ico/arrow-down.svg" class="icon_20x20">
                    </div>
                </div>

                <div class="input-select" style="margin: 15px; margin-left: 0;">
                    <select onchange="changeURL()">
                        <option value="" selected>Līdz</option>

                    <?php

                    for ($i = 6.5; $i >= 1.1; $i = $i - 0.1) {
                        echo "<option value=\"" . $i . "\">" . $i . "</option>";
                    }    
                                            
                    ?>

                    </select>
                    <div class="input-section-icon">
                        <img src="ico/arrow-down.svg" class="icon_20x20">
                    </div>
                </div>
            
            </div>

            <div class="search-header btb">
                <span>Gads</span>
            </div>

            <div style="display: flex;">

                <div class="input-select" style="margin: 15px;">
                    <select onchange="changeURL()">
                        <option value="" selected>No</option>
                        <option value="0">Ļoti vecs</option>

                        <?php

                            for ($i = 1980; $i <= date("Y"); $i++) {
                                echo "<option value=\"" . $i . "\">" . $i . "</option>";
                            }    
                                                    
                        ?>

                    </select>
                    <div class="input-section-icon">
                        <img src="ico/arrow-down.svg" class="icon_20x20">
                    </div>
                </div>

                <div class="input-select" style="margin: 15px; margin-left: 0;">
                    <select onchange="changeURL()">
                        <option value="" selected>Līdz</option>
                        
                        <?php

                            for ($i = date("Y"); $i >= 1980; $i--) {
                                echo "<option value=\"" . $i . "\">" . $i . "</option>";
                            }    
                                                    
                        ?>

                    </select>
                    <div class="input-section-icon">
                        <img src="ico/arrow-down.svg" class="icon_20x20">
                    </div>
                </div>
            
            </div>

            <div class="search-header btb">
                <span>Papildu filtrēšana</span>
            </div>

            <div class="input-select" style="margin: 15px;">
                <select onchange="changeURL()">
                    <option value="" selected>- Ātrumkārba -</option>
                    <?php get_data("transmission"); ?>
                </select>
                <div class="input-section-icon">
                    <img src="ico/arrow-down.svg" class="icon_20x20">
                </div>
            </div>

            <div class="input-select" style="margin: 15px;">
                <select onchange="changeURL()">
                    <option value="" selected>- Automašīnas virsbūve -</option>
                    <?php get_data("body"); ?>
                </select>
                <div class="input-section-icon">
                    <img src="ico/arrow-down.svg" class="icon_20x20">
                </div>
            </div>

            <div class="input-select" style="margin: 15px;">
                <select onchange="changeURL()">
                    <option value="" selected>- Krāsa -</option>
                    <?php get_data("color"); ?>
                </select>
                <div class="input-section-icon">
                    <img src="ico/arrow-down.svg" class="icon_20x20">
                </div>
            </div>

            <div class="input-select" style="margin: 15px;">
                <select onchange="changeURL()">
                    <option value="" selected>- Tehniskā apskate -</option>
                    <option value="0">Nav</option>
                    <option value="1">Ir</option>
                </select>
                <div class="input-section-icon">
                    <img src="ico/arrow-down.svg" class="icon_20x20">
                </div>
            </div>

            <div class="search-header btb">
                <span>Atrašanās vieta</span>
            </div>

            <div class="input-select" style="margin: 15px;">
                <select onchange="changeURL()">
                    <option value="" selected>- Rajons -</option>
                    <?php get_data("location"); ?>
                </select>
                <div class="input-section-icon">
                    <img src="ico/location-black.svg" class="icon_20x20">
                </div>
            </div>

        </div>

    </div>

        <div class="search-result">

            <div class="result-filter">
                <div>
                    <span>Rezultāti atrasti:</span>
                </div>

                <div class="input-select" style="max-width: 205px; height: auto;">
                    <select style="padding: 10px;" onchange="changeURL()">
                        <option value="" selected>Filtrēšana pēc</option>
                        <option value="1">Cena <</option>
                        <option value="2">Cena ></option>
                        <option value="3">Nobraukums <</option>
                        <option value="4">Nobraukums ></option>
                    </select>
                    <div class="input-section-icon" style="background: white; border-left: 1px solid #E1E1E1;;">
                        <img src="ico/arrow-down.svg" class="icon_20x20">
                    </div>
                </div>

            </div>

            <div class="result">

            </div>

        </div>

    </div>

</div>

<?php 

echo '<script src="/js/adss.js"></script>';
require 'layouts/footer.php'; 

?>