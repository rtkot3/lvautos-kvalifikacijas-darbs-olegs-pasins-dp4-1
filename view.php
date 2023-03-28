<?php 

$title = 'Auto Pārdošanas Sludinājumi';
$css = 'view';

$home_active;
$ads_active = true;
$cont_active;

$show_upload = true;

require 'layouts/header.php'; 

?>

<div class="container stretch">

    <div class="view-box">

        <div class="car-block">

            <section class="_1st-block">

                <h1 class="car-logo">Bmw 3-series</h1>
            
                <div class="time-view-odometr">

                    <div class="time-view-odometr-box">
                        <img src="ico/time.svg" class="icon_20x20">
                        <span style="margin: 0 15px;">15.03.2023</span>
                    </div>

                    <div class="time-view-odometr-box">
                        <img src="ico/views.svg" class="icon_20x20">
                        <span style="margin: 0 15px;">Skatījumu skaits: 2055</span>
                    </div>

                    <div class="time-view-odometr-box">
                        <img src="ico/odometr.svg" class="icon_20x20">
                        <span style="margin-left: 15px;">20000 km</span>
                    </div>

                </div>

                <div class="car-photos">

                    <div class="car-photo-logo">
                        <img src="ico/example-photo-2.png">
                    </div>

                    <div class="car-add-photos">

                        <div style="width: auto; display: flex; margin-left: 15px;">
                            <div class="car-add-img" style="background-image: url('ico/example-photo-2.png');"></div>
                            <div class="car-add-img" style="background-image: url('ico/example-photo-2.png');"></div>
                            <div class="car-add-img" style="background-image: url('ico/example-photo-2.png');"></div>
                            <div class="car-add-img" style="background-image: url('ico/example-photo-2.png');"></div>
                            <div class="car-add-img" style="background-image: url('ico/example-photo-2.png');"></div>
                            <div class="car-add-img" style="background-image: url('ico/example-photo-2.png');"></div>
                            <div class="car-add-img" style="background-image: url('ico/example-photo-2.png');"></div>
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
                            <span>500</span>
                        </div>

                </div>

                <div class="car-info-block">
                    <div class="car-info">

                        <div class="car-info-section">
                            <span class="car-info-bold">Marka:</span>
                            <span class="car-info-light">Bmw</span>
                        </div>

                        <div class="car-info-section">
                            <span class="car-info-bold">Modelis:</span>
                            <span class="car-info-light">3-series</span>
                        </div>

                        <div class="car-info-section">
                            <span class="car-info-bold">Gads:</span>
                            <span class="car-info-light">2005</span>
                        </div>

                        <div class="car-info-section">
                            <span class="car-info-bold">Dzinējs:</span>
                            <span class="car-info-light">2.0 Dīzelis</span>
                        </div>

                        <div class="car-info-section">
                            <span class="car-info-bold">Ātrumkārba:</span>
                            <span class="car-info-light">Automāts</span>
                        </div>

                        <div class="car-info-section">
                            <span class="car-info-bold">Automašīnas virsbūve:</span>
                            <span class="car-info-light">Sedāns</span>
                        </div>

                    </div>

                    <div class="car-info" style="margin-left: 15px;">

                        <div class="car-info-section">
                            <span class="car-info-bold">Krāsa:</span>
                            <span class="car-info-light">Zils</span>
                        </div>

                        <div class="car-info-section">
                            <span class="car-info-bold">Atrašanās vieta:</span>
                            <span class="car-info-light">Rīga</span>
                        </div>

                        <div class="car-info-section">
                            <span class="car-info-bold">Tehniskā apskate:</span>
                            <span class="car-info-light">Līdz 20.12.2023</span>
                        </div>

                        <div class="car-info-section">
                            <span class="car-info-bold">VIN:</span>
                            <span class="car-info-light">4Y1SL65848Z411439</span>
                        </div>

                        <div class="car-info-section">
                            <span class="car-info-bold">Reģistrācijas numurs:</span>
                            <span class="car-info-light">JB3540</span>
                        </div>

                    </div>

                </div>

                <span class="comment">Komentārs:</span>

                <div class="description">
                    <span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span>
                </div>

            </section>

        </div>

        <div class="profile-block">

            <div class="profile-section">
                <div style="display: flex; justify-content: center;">
                    <img class="profile-img" src="/ico/profile.jpg">
                </div>

                <div class="profile-info">
                    <h3>Oļegs</h3>
                    <span>Tiešsaistē kopš 15.03.2023</span>
                </div>

                <div class="profile-contact">

                    <a href="#">

                        <div class="contact-icon">
                            <img src="ico/phone-2.svg" class="icon_24x24">
                        </div>
    
                        <div class="contact-number">
                            <span>+37127xxxxx</span>
                        </div>

                    </a>

                </div>

                <div class="profile-contact">

                    <a href="#">
                    
                        <div class="contact-icon" style="background: #1DB18A;">
                            <img src="ico/whatsapp.svg" class="icon_24x24">
                        </div>

                        <div class="contact-number" style="background: #199473;">
                            <span>+37127xxxxx</span>
                        </div>

                    </a>

                </div>
            </div>

        </div>
    
    
    </div>

</div>

<?php 

require 'layouts/footer.php'; 

?>