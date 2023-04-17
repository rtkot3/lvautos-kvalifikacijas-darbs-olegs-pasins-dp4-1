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

?>

<div class="container stretch">

    <section class="section">

        <section class="box">
            <div class="box-header">
                <span>Transportlīdzekļa Informācija</span>
            </div>

            <div class="input-log">
                <span>Transportlīdzekļa numurs</span>

                <div class="input-select">
                    <input type="text" placeholder="AB1234">
                </div>

            </div>

            <div class="input-log log-more2">

                <div style="width: 100%;">
                    <span>VIN</span>

                    <div class="input-select">
                        <input type="text" placeholder="4Y1SL65848Z411439">
                    </div>
                </div>

                <div class="box-more2" >
                    <span>Tehniskā apskate</span>

                    <div class="input-select">
                        <select>
                            <option value="" disabled selected>- Tehniskā apskate -</option>
                            <option value="bmw">Bmw</option>
                            <option value="audi">Audi</option>
                            <option value="mercedes">Mercedes</option>
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
                        <select>
                            <option value="" disabled selected>- Marka -</option>
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
                    <span>Modelis</span>

                    <div class="input-select">
                        <select disabled>
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
                        <select>
                            <option value="" disabled selected>- Gads -</option>
                            <option value="bmw">Bmw</option>
                            <option value="audi">Audi</option>
                            <option value="mercedes">Mercedes</option>
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
                        <select>
                            <option value="" disabled selected>- Dzinējs -</option>
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
                    <span>Litri</span>

                    <div class="input-select">
                        <select>
                            <option value="" disabled selected>- Litri -</option>
                            <option value="bmw">Bmw</option>
                            <option value="audi">Audi</option>
                            <option value="mercedes">Mercedes</option>
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
                        <select>
                            <option value="" disabled selected>- Ātrumkārba -</option>
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
                    <span>Nobraukums</span>

                    <div class="input-select">
                        <input type="text" placeholder="Nobraukums">
                    </div>

                </div>

            </div>

            <div class="input-log log-more2">

                <div style="width: 100%;">
                    <span>Automašīnas virsbūve</span>

                    <div class="input-select">
                        <select>
                            <option value="" disabled selected>- Automašīnas virsbūve -</option>
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
                    <span>Krāsa</span>

                    <div class="input-select">
                        <select>
                            <option value="" disabled selected>- Krāsa -</option>
                            <option value="bmw">Bmw</option>
                            <option value="audi">Audi</option>
                            <option value="mercedes">Mercedes</option>
                        </select>
                        <div class="input-section-icon">
                            <img src="ico/arrow-down.svg" class="icon_20x20">
                        </div>
                    </div>

                </div>

            </div>

            <div class="input-log">
                <span>Atrašanās vieta</span>

                <div class="input-select">
                    <select>
                        <option value="" disabled selected>- Rajons -</option>
                        <option value="bmw">Bmw</option>
                        <option value="audi">Audi</option>
                        <option value="mercedes">Mercedes</option>
                    </select>
                    <div class="input-section-icon">
                        <img src="ico/location-black.svg" class="icon_20x20">
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
                    <textarea type="text" placeholder="Atstājiet savu komentāru par automašīnu..."></textarea> 
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
                    <img class="upload-img" src="ico/upload.svg">
                    <input type="file">
                </div>

            </div>

            <div class="input-log">

                <span>Papildus fotogrāfijas</span>

                <div class="add-photo-box">
                    <div class="file-upload-add">
                        <img src="ico/upload.svg" class="icon_24x24 upload-img">
                        <input type="file">
                    </div>

                    <div class="file-upload-add" style="margin-left: 15px;">
                        <img src="ico/upload.svg" class="icon_24x24 upload-img">
                        <input type="file">
                    </div>

                    <div class="file-upload-add" style="margin-left: 15px;">
                        <img src="ico/upload.svg" class="icon_24x24 upload-img">
                        <input type="file">
                    </div>

                    <div class="file-upload-add" style="margin-left: 15px;">
                        <img src="ico/upload.svg" class="icon_24x24 upload-img">
                        <input type="file">
                    </div>

                    <div class="file-upload-add" style="margin-left: 15px;">
                        <img src="ico/upload.svg" class="icon_24x24 upload-img">
                        <input type="file">
                    </div>
                </div>

                <div class="add-photo-box">
                    <div class="file-upload-add">
                        <img src="ico/upload.svg" class="icon_24x24 upload-img">
                        <input type="file">
                    </div>

                    <div class="file-upload-add" style="margin-left: 15px;">
                        <img src="ico/upload.svg" class="icon_24x24 upload-img">
                        <input type="file">
                    </div>

                    <div class="file-upload-add" style="margin-left: 15px;">
                        <img src="ico/upload.svg" class="icon_24x24 upload-img">
                        <input type="file">
                    </div>

                    <div class="file-upload-add" style="margin-left: 15px;">
                        <img src="ico/upload.svg" class="icon_24x24 upload-img">
                        <input type="file">
                    </div>

                    <div class="file-upload-add" style="margin-left: 15px;">
                        <img src="ico/upload.svg" class="icon_24x24 upload-img">
                        <input type="file">
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
                    <select>
                        <option value="" disabled selected>- Izvēlieties Laiku -</option>
                        <option value="bmw">Bmw</option>
                        <option value="audi">Audi</option>
                        <option value="mercedes">Mercedes</option>
                    </select>
                    <div class="input-section-icon">
                        <img src="ico/calendar.svg" class="icon_20x20">
                    </div>
                </div>

            </div>

        </section>

        <section class="box box-upload">

            <div class="chekbox-last-box">
                <input type="checkbox" style="margin-right: 15px;">
                <span style="margin-right: 15px;">Apliecinu, ka esmu šī transportlīdzekļa īpašnieks</span>
            </div>

            <button class="btn-upload">Pievienot sludinājumu</button>
        </section>

    </section>
</div>

<?php 

require 'layouts/footer.php'; 

?>