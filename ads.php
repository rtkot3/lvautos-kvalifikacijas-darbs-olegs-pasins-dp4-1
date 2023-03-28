<?php 

$title = 'Auto Pārdošanas Sludinājumi';
$css = 'adss';

$home_active;
$ads_active = true;
$cont_active;

$show_upload = true;

require 'layouts/header.php'; 

?>

<div class="container stretch">

    <div class="search-container">

        <div class="search-box">

            <div class="search-header bb">
                <span>Transportlīdzeklis</span>
            </div>

            <div class="input-select" style="margin: 15px;">
                <select>
                    <option value="" disabled selected>- Brand -</option>
                    <option value="bmw">Bmw</option>
                    <option value="audi">Audi</option>
                    <option value="mercedes">Mercedes</option>
                </select>
                <div class="input-section-icon">
                    <img src="ico/arrow-down.svg" class="icon_20x20">
                </div>
            </div>

            <div class="input-select" style="margin: 15px;">
                <select>
                    <option value="" disabled selected>- Modelis -</option>
                    <option value="bmw">Bmw</option>
                    <option value="audi">Audi</option>
                    <option value="mercedes">Mercedes</option>
                </select>
                <div class="input-section-icon">
                    <img src="ico/arrow-down.svg" class="icon_20x20">
                </div>
            </div>

            <div class="search-header btb">
                <span>Dzinēja tips</span>
            </div>

            <div class="input-select" style="margin: 15px; margin-bottom: 0;">
                <select>
                    <option value="" disabled selected>- Dzinēja tips -</option>
                    <option value="bmw">Bmw</option>
                    <option value="audi">Audi</option>
                    <option value="mercedes">Mercedes</option>
                </select>
                <div class="input-section-icon">
                    <img src="ico/arrow-down.svg" class="icon_20x20">
                </div>
            </div>

            <div style="display: flex;">

                <div class="input-select" style="margin: 15px;">
                    <select>
                        <option value="bmw">0.0</option>
                        <option value="audi">Audi</option>
                        <option value="mercedes">Mercedes</option>
                    </select>
                    <div class="input-section-icon">
                        <img src="ico/arrow-down.svg" class="icon_20x20">
                    </div>
                </div>

                <div class="input-select" style="margin: 15px; margin-left: 0;">
                    <select>
                        <option value="bmw">2.0</option>
                        <option value="audi">Audi</option>
                        <option value="mercedes">Mercedes</option>
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
                    <select>
                        <option value="" disabled selected>No</option>
                        <option value="audi">Audi</option>
                        <option value="mercedes">Mercedes</option>
                    </select>
                    <div class="input-section-icon">
                        <img src="ico/arrow-down.svg" class="icon_20x20">
                    </div>
                </div>

                <div class="input-select" style="margin: 15px; margin-left: 0;">
                    <select>
                        <option value="" disabled selected>Līdz</option>
                        <option value="audi">Audi</option>
                        <option value="mercedes">Mercedes</option>
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

            <div class="input-select" style="margin: 15px;">
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

            <div class="input-select" style="margin: 15px;">
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

            <div class="input-select" style="margin: 15px;">
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

            <div class="search-header btb">
                <span>Atrašanās vieta</span>
            </div>

            <div class="input-select" style="margin: 15px;">
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

        <div class="search-result">

            <div class="result-filter">
                <div>
                    <span>Rezultāti atrasti:</span>
                    <span style="margin-left: 5px;">100</span>
                </div>

                <div class="input-select" style="max-width: 205px; height: auto;">
                    <select style="padding: 10px;">
                        <option value="" disabled selected>Filtrēšana pēc</option>
                        <option value="bmw">Bmw</option>
                        <option value="audi">Audi</option>
                        <option value="mercedes">Mercedes</option>
                    </select>
                    <div class="input-section-icon" style="background: white; border-left: 1px solid #E1E1E1;;">
                        <img src="ico/arrow-down.svg" class="icon_20x20">
                    </div>
                </div>

            </div>

            <div class="result">

                <div class="result-box">
                    <div class="car-image" style="background-image: url('ico/example-photo.png');"></div>

                    <div class="car-information">
                        
                        <div class="breadcrumbs">
                            <a href="#">Bmw</a>
                            <img src="ico/arrow-right.svg" class="icon_16x16" style="margin: 0 5px;">
                            <a href="#">3-series</a>
                        </div>

                        <div class="car-model">
                            <h3>Bmw 3-series</h3>
                        </div>

                        <div class="car-mini-info">
                            <img src="ico/car.svg" class="icon_20x20">
                            <span style="margin: 0 15px;">2005</span>
                            <img src="ico/power.svg" class="icon_20x20">
                            <span style="margin-left: 15px;">2.5 Dīzels</span>
                        </div>

                        <div class="car-mini-add-info">

                            <div style="display: flex; align-items: center">
                                <img src="ico/odometr.svg" class="icon_20x20">
                                <span style="margin: 0 15px;">200000 km</span>
                            </div>

                            <div style="display: flex; align-items: center">
                                <img src="ico/transmision.svg" class="icon_20x20">
                                <span style="margin: 0 15px;">Automāts</span>
                            </div>

                            <div style="display: flex; align-items: center">
                                <img src="ico/tech-doc.svg" class="icon_20x20">
                                <span style="margin-left: 15px;">Līdz 20.12.2023</span>                        
                            </div>

                        </div>

                        <div class="car-location">
                            <img src="ico/location.svg" class="icon_20x20">
                            <span style="color: #B1B1B1; margin-left: 15px;">Rīga</span>
                        </div>

                        <div class="car-price-and-view">
                            <img src="ico/euro.svg" class="icon_20x20">
                            <span style="margin-left: 15px;">6000</span>
                            <a style="margin-left: auto;" href="view">SKATIES</a>
                        </div>

                    </div>

                </div>

                <div class="result-box">
                    <div class="car-image" style="background-image: url('ico/example-photo.png');"></div>

                    <div class="car-information">
                        
                        <div class="breadcrumbs">
                            <a href="#">Bmw</a>
                            <img src="ico/arrow-right.svg" class="icon_16x16" style="margin: 0 5px;">
                            <a href="#">3-series</a>
                        </div>

                        <div class="car-model">
                            <h3>Bmw 3-series</h3>
                        </div>

                        <div class="car-mini-info">
                            <img src="ico/car.svg" class="icon_20x20">
                            <span style="margin: 0 15px;">2005</span>
                            <img src="ico/power.svg" class="icon_20x20">
                            <span style="margin-left: 15px;">2.5 Dīzels</span>
                        </div>

                        <div class="car-mini-add-info">

                            <div style="display: flex; align-items: center">
                                <img src="ico/odometr.svg" class="icon_20x20">
                                <span style="margin: 0 15px;">200000 km</span>
                            </div>

                            <div style="display: flex; align-items: center">
                                <img src="ico/transmision.svg" class="icon_20x20">
                                <span style="margin: 0 15px;">Automāts</span>
                            </div>

                            <div style="display: flex; align-items: center">
                                <img src="ico/tech-doc.svg" class="icon_20x20">
                                <span style="margin-left: 15px;">Līdz 20.12.2023</span>                        
                            </div>

                        </div>

                        <div class="car-location">
                            <img src="ico/location.svg" class="icon_20x20">
                            <span style="color: #B1B1B1; margin-left: 15px;">Rīga</span>
                        </div>

                        <div class="car-price-and-view">
                            <img src="ico/euro.svg" class="icon_20x20">
                            <span style="margin-left: 15px;">6000</span>
                            <a style="margin-left: auto;" href="view">SKATIES</a>
                        </div>

                    </div>

                </div>

                <div class="load-more">
                    <span>VAIRĀK</span>
                </div>

            </div>

        </div>

    </div>

</div>

<?php 

require 'layouts/footer.php'; 

?>