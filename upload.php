<?php session_start();

ini_set('display_errors', 0);

if (!isset($_SESSION['login'])) {
    
    header('Location: /');

}

$title = 'Auto Pārdošanas Sludinājumi';
$css = 'upload';

$home_active;
$ads_active = true;
$cont_active;
$admin_active;

$show_upload = false;

require 'layouts/header.php'; 
require "functions/get_data.php";

$date = date("Y-m-d");

?>

<div class="container stretch">

    <section class="section" id="form-upload">

        <div class="error-msg" style="display: none">
            <div class="error-line"></div>
            <div class="error-span">
                <span id="err-msg-upload"></span>
            </div>
            <img src="ico/close_error_msg.svg" class="close-msg" onclick="this.parentElement.style.display = 'none';">
        </div>

        <section class="box">
            <div class="box-header">
                <span>Transportlīdzekļa Informācija</span>
            </div>

            <div class="input-log">
                <span>Transportlīdzekļa numurs</span>

                <div class="input-select">
                    <input name="registration_number" type="text" placeholder="AB1234">
                </div>

            </div>

            <div class="input-log log-more2">

                <div style="width: 100%;">
                    <span>VIN</span>

                    <div class="input-select">
                        <input name="vin_number" type="text" placeholder="4Y1SL65848Z411439">
                    </div>
                </div>

                <div class="box-more2" >
                    <span>Tehniskā apskate</span>

                    <div class="input-select">
                        <select name="technical_inspection">
                            <option value="" disabled selected>- Tehniskā apskate -</option>
                            <option value="0">Nav</option>

                            <?php

                                for ($i = 0; $i < 12; $i++) {
                                    $a = date('m.Y', strtotime($date. ' + ' . $i . ' month'));
                                    echo "<option value=\"" . $a . "\">" . $a . "</option>";
                                }    

                            ?>

                        </select>
                        <div class="input-section-icon">
                            <img src="ico/arrow-down.svg" class="icon_20x20">
                        </div>
                    </div>

                </div>

            </div>

            <div class="input-log log-more2">

                <div style="width: 100%;">
                    <span>Marka</span>

                    <div class="input-select">
                        <select name="brand" onchange="updateModels(this);">
                            <option value="" disabled selected>- Marka -</option>
                            <?php get_data("brand"); ?>
                        </select>
                        <div class="input-section-icon">
                            <img src="ico/arrow-down.svg" class="icon_20x20">
                        </div>
                    </div>
                </div>

                <div class="box-more2">
                    <span>Modelis</span>

                    <div class="input-select">
                        <select id="models" name="model" disabled>
                            <option value="" disabled selected>- Modelis -</option>
                            <option value="bmw">Bmw</option>
                            <option value="audi">Audi</option>
                            <option value="mercedes">Mercedes</option>
                        </select>
                        <div class="input-section-icon">
                            <img src="ico/arrow-down.svg" class="icon_20x20">
                        </div>
                    </div>

                </div>

                <div class="box-more2">
                    <span>Gads</span>

                    <div class="input-select">
                        <select name="year">
                            <option value="" disabled selected>- Gads -</option>

                            <?php

                                for ($i = date("Y"); $i >= 1980; $i--) {
                                    echo "<option value=\"" . $i . "\">" . $i . "</option>";
                                }    
                                                        
                            ?>

                            <option value="0">Ļoti vecs</option>
                        </select>
                        <div class="input-section-icon">
                            <img src="ico/arrow-down.svg" class="icon_20x20">
                        </div>
                    </div>

                </div>

            </div>

            <div class="input-log log-more2">

                <div style="width: 100%;">
                    <span>Dzinējs</span>

                    <div class="input-select">
                        <select name="motor_type">
                            <option value="" disabled selected>- Dzinējs -</option>
                            <?php get_data("motor_type"); ?>
                        </select>
                        <div class="input-section-icon">
                            <img src="ico/arrow-down.svg" class="icon_20x20">
                        </div>
                    </div>
                </div>

                <div class="box-more2">
                    <span>Litri</span>

                    <div class="input-select">
                        <select name="motor_power">
                            <option value="" disabled selected>- Litri -</option>

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

                </div>

            </div>

            <div class="input-log log-more2">

                <div style="width: 100%;">
                    <span>Ātrumkārba</span>

                    <div class="input-select">
                        <select name="transmission">
                            <option value="" disabled selected>- Ātrumkārba -</option>
                            <?php get_data("transmission"); ?>
                        </select>
                        <div class="input-section-icon">
                            <img src="ico/arrow-down.svg" class="icon_20x20">
                        </div>
                    </div>
                </div>

                <div class="box-more2">
                    <span>Nobraukums</span>

                    <div class="input-select">
                        <input type="number" name="mileage" placeholder="Nobraukums">
                    </div>

                </div>

            </div>

            <div class="input-log log-more2">

                <div style="width: 100%;">
                    <span>Automašīnas virsbūve</span>

                    <div class="input-select">
                        <select name="body">
                            <option value="" disabled selected>- Automašīnas virsbūve -</option>
                            <?php get_data("body"); ?>
                        </select>
                        <div class="input-section-icon">
                            <img src="ico/arrow-down.svg" class="icon_20x20">
                        </div>
                    </div>
                </div>

                <div class="box-more2">
                    <span>Krāsa</span>

                    <div class="input-select">
                        <select name="color">
                            <option value="" disabled selected>- Krāsa -</option>
                            <?php get_data("color"); ?>
                        </select>
                        <div class="input-section-icon">
                            <img src="ico/arrow-down.svg" class="icon_20x20">
                        </div>
                    </div>

                </div>

            </div>

            <div class="input-log log-more2" style="margin-bottom: 15px">

                <div style="width: 100%;">
                    <span>Atrašanās vieta</span>

                    <div class="input-select">
                        <select name="location">
                            <option value="" disabled selected>- Rajons -</option>
                            <?php get_data("location"); ?>
                        </select>
                        <div class="input-section-icon">
                            <img src="ico/location-black.svg" class="icon_20x20">
                        </div>
                    </div>
                </div>

                <div class="box-more2">
                    <span>Cena</span>

                    <div class="input-select">
                        <input type="number" name="price" placeholder="Cena">
                    </div>
                </div>

            </div>

        </section>

        <section class="box" style="margin-top: 30px;">
            <div class="box-header">
                <span>Komentārs</span>
            </div>

            <div class="input-log">
                <div class="input-select" style="height: 300px">
                    <textarea type="text" name="description" placeholder="Atstājiet savu komentāru par automašīnu..."></textarea> 
                </div>
            </div>

        </section>

        <section class="box" style="margin-top: 30px;">
            <div class="box-header">
                <span>Transportlīdzekļa Fotogrāfijas</span>
            </div>

            <div class="input-log">

                <span>Vāka fotogrāfija</span>

                <div class="file-upload-main">
                    <label class="uploaded-image-name"></label>
                    <img src="ico/upload.svg" class="upload-img">
                    <input type="file" name="image_main" accept="image/png, image/jpeg" onchange="fileUploaded(this, this.parentElement);">
                </div>

            </div>

            <div class="input-log">

                <span>Papildus fotogrāfijas</span>

                <div class="add-photo-box">
                    
                    <div class="file-upload-add">
                        <label class="uploaded-image-name"></label>
                        <img src="ico/upload.svg" class="icon_30x30 upload-img">
                        <input type="file" name="image_add1" accept="image/png, image/jpeg" onchange="fileUploaded(this, this.parentElement);">
                    </div>

                    <div class="file-upload-add" style="margin-left: 15px;">
                        <label class="uploaded-image-name"></label>
                        <img src="ico/upload.svg" class="icon_30x30 upload-img">
                        <input type="file" name="image_add2" accept="image/png, image/jpeg" onchange="fileUploaded(this, this.parentElement);">
                    </div>

                    <div class="file-upload-add" style="margin-left: 15px;">
                        <label class="uploaded-image-name"></label>
                        <img src="ico/upload.svg" class="icon_30x30 upload-img">
                        <input type="file" name="image_add3" accept="image/png, image/jpeg" onchange="fileUploaded(this, this.parentElement);">
                    </div>

                    <div class="file-upload-add" style="margin-left: 15px;">
                        <label class="uploaded-image-name"></label>
                        <img src="ico/upload.svg" class="icon_30x30 upload-img">
                        <input type="file" name="image_add4" accept="image/png, image/jpeg" onchange="fileUploaded(this, this.parentElement);">
                    </div>

                    <div class="file-upload-add" style="margin-left: 15px;">
                        <label class="uploaded-image-name"></label>
                        <img src="ico/upload.svg" class="icon_30x30 upload-img">
                        <input type="file" name="image_add5" accept="image/png, image/jpeg" onchange="fileUploaded(this, this.parentElement);">
                    </div>
                    
                </div>

                <div class="add-photo-box">
                    
                    <div class="file-upload-add">
                        <label class="uploaded-image-name"></label>
                        <img src="ico/upload.svg" class="icon_30x30 upload-img">
                        <input type="file" name="image_add6" accept="image/png, image/jpeg" onchange="fileUploaded(this, this.parentElement);">
                    </div>

                    <div class="file-upload-add" style="margin-left: 15px;">
                        <label class="uploaded-image-name"></label>
                        <img src="ico/upload.svg" class="icon_30x30 upload-img">
                        <input type="file" name="image_add7" accept="image/png, image/jpeg" onchange="fileUploaded(this, this.parentElement);">
                    </div>

                    <div class="file-upload-add" style="margin-left: 15px;">
                        <label class="uploaded-image-name"></label>
                        <img src="ico/upload.svg" class="icon_30x30 upload-img">
                        <input type="file" name="image_add8" accept="image/png, image/jpeg" onchange="fileUploaded(this, this.parentElement);">
                    </div>

                    <div class="file-upload-add" style="margin-left: 15px;">
                        <label class="uploaded-image-name"></label>
                        <img src="ico/upload.svg" class="icon_30x30 upload-img">
                        <input type="file" name="image_add9" accept="image/png, image/jpeg" onchange="fileUploaded(this, this.parentElement);">
                    </div>

                    <div class="file-upload-add" style="margin-left: 15px;">
                        <label class="uploaded-image-name"></label>
                        <img src="ico/upload.svg" class="icon_30x30 upload-img">
                        <input type="file" name="image_add10" accept="image/png, image/jpeg" onchange="fileUploaded(this, this.parentElement);">
                    </div>
                    
                </div>

            </div>

        </section>

        <section class="box" style="margin-top: 30px;">
            <div class="box-header">
                <span>Sludinājuma Laiks</span>
            </div>

            <div class="input-log">

                <div class="input-select">
                    <select name="upload_time">
                        <option value="" disabled selected>- Izvēlieties Laiku -</option>
                        <option value="1">1 Nedēļa</option>
                        <option value="2">2 Nedēļas</option>
                        <option value="3">3 Nedēļas</option>
                        <option value="4">4 Nedēļas</option>
                    </select>
                    <div class="input-section-icon">
                        <img src="ico/calendar.svg" class="icon_20x20">
                    </div>
                </div>

            </div>

        </section>

        <section class="box box-upload">

            <div class="chekbox-last-box">
                <input type="checkbox" name="checkbox" style="margin-right: 15px;">
                <span style="margin-right: 15px;">Apliecinu, ka esmu šī transportlīdzekļa īpašnieks</span>
            </div>

            <button class="btn-upload">Pievienot sludinājumu</button>
        </section>

    </section>
</div>

<script src="/js/upload.js"></script>

<?php 

require 'layouts/footer.php'; 

?>