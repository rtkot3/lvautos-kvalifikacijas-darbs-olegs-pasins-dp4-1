<?php

$user_profile_image = '';
$admin_label = '';

if (isset($_SESSION['login'])) {
    
    if ($_SESSION['login']['profile_img'] == null) {
        $user_profile_image = "ico/default_profile_image.jpg";
    } else {
        $user_profile_image = 'data:image/jpeg;base64,' . $_SESSION['login']['profile_img'];
    }

    if ($_SESSION['login']['is_admin'] == '1') {
        $admin_label = '<label class="admin_label">admin</label>';
    }

}

?>

<div class="blur" id="ui" style="display: none">
    <div class="ui" id="ui-main">

        <div id="register" class="ui-section" style="display: none">

            <div class="ui-logo">

                <div style="opacity: 0.3;">
                    <span class="logo"><span>LV</span>AUTO'S</span>
                </div>

                <img class="ui-head-btn" src="ico/close.svg" onclick="UI(false);">

            </div>

            <h1>Reģistrācija</h1>

            <div class="ui-buttons">
                <button class="ui-btn" onclick="switchto('login');">Pieslēgties</button>
                <button class="ui-btn active-ui-btn" style="margin-left: 15px">Reģistrācija</button>
            </div>

            <form id="form-register" onsubmit="return false;">

            <div class="error-msg" style="display: none">
                <div class="error-line"></div>
                <div class="error-span">
                    <span id="err-msg"></span>
                </div>
                <img src="ico/close_error_msg.svg" class="close-msg" onclick="this.parentElement.style.display = 'none';">
            </div>

            <div class="input-select ui-input">
                <input type="text" placeholder="Vārds" name="name">
            </div>

            <div class="input-select ui-input">
                <input type="email" placeholder="E-Pasts" name="email">
            </div>

            <div style="display: flex; align-items: center; margin-bottom: 15px">
                <label>+371</label>
                <div class="input-select ui-input" style="margin-bottom: 0; margin-left: 15px">
                    <input type="tel" placeholder="Tālrunis" name="phone">
                </div>
            </div>

            <div class="input-select ui-input">
                <input type="password" placeholder="Parole" name="password">
            </div>

            <div class="input-select ui-input">
                <input type="password" placeholder="Vēlreiz Ievadiet Parole" name="password_again">
            </div>

            <div class="ui-whatsapp">
                <input type="checkbox" name="whatsapp_status">
                <span>Vai Jums ir WhatsApp?</span>
            </div>

            <div style="text-align: center">
                <button class="ui-btn-submit" id="btn-register">Reģistrācija</button>
            </div>

            </form>

        </div>

        <div id="login" class="ui-section" style="display: none">

            <div class="ui-logo">

                <div style="opacity: 0.3;">
                    <span class="logo"><span>LV</span>AUTO'S</span>
                </div>

                <img class="ui-head-btn" src="ico/close.svg" onclick="UI(false);">

            </div>

            <h1>Pieslēgties</h1>

            <div class="ui-buttons">
                <button class="ui-btn active-ui-btn">Pieslēgties</button>
                <button class="ui-btn" style="margin-left: 15px" onclick="switchto('register');">Reģistrācija</button>
            </div>

            <form id="form-login" onsubmit="return false;">

                <div class="error-msg" style="display: none">
                    <div class="error-line"></div>
                    <div class="error-span">
                        <span id="err-msg"></span>
                    </div>
                    <img src="ico/close_error_msg.svg" class="close-msg" onclick="this.parentElement.style.display = 'none';">
                </div>

                <div class="input-select ui-input">
                    <input type="email" placeholder="E-Pasts" name="email">
                </div>

                <div class="input-select ui-input">
                    <input type="password" placeholder="Parole" name="password">
                </div>

                <div class="forgot-password">
                    <span onclick="switchto('forgot-password');">Aizmirsāt savu paroli?</span>
                </div>

                <div style="text-align: center">
                    <button class="ui-btn-submit" id="btn-login">Pieslēgties</button>
                </div>

            </form>

        </div>

        <div id="forgot-password" class="ui-section" style="display: none">

            <div class="ui-logo">

                <img class="ui-head-btn" src="ico/arrow-back.svg" onclick="switchto('login');">

                <img class="ui-head-btn" src="ico/close.svg" onclick="UI(false);">

            </div>

            <p style="margin-bottom: 15px">... Ievadiet savu e-pastu un jauno paroli, uz kuru vēlaties mainīt, pēc tam saņemsiet saiti uz savu e-pastu, lai izmantotu jauno paroli ...</p>

            <form action="#">

                <div class="input-select ui-input">
                    <input type="email" placeholder="E-Pasts" name="email">
                </div>

                <div class="input-select ui-input">
                    <input type="password" placeholder="Jauna parole" name="new_password">
                </div>

                <div class="input-select ui-input">
                    <input type="password" placeholder="Vēlreiz Jauna parole" name="new_password_again">
                </div>

                <div style="text-align: center">
                    <button class="ui-btn-submit">Sūtīt ziņu</button>
                </div>

            </form>

        </div>

        <div id="profile" class="ui-section" style="display: none">

            <div class="ui-logo">

                <div style="opacity: 0.3;">
                    <span class="logo"><span>LV</span>AUTO'S</span>
                </div>

                <img class="ui-head-btn" src="ico/close.svg" onclick="UI(false);">

            </div>

            <h1>Jūsu Profils<?php echo $admin_label; ?></h1>

            <div class="ui-buttons">
                <button class="ui-btn active-ui-btn">Jūsu Profils</button>
                <button class="ui-btn" style="margin-left: 15px" onclick="switchto('my-cars');">Manas Mašīnas</button>
            </div>

            <form action="#" onsubmit="return false;" id="form-profile">

                <div class="error-msg" style="display: none">
                    <div class="error-line"></div>
                    <div class="error-span">
                        <span id="err-msg"></span>
                    </div>
                    <img src="ico/close_error_msg.svg" class="close-msg" onclick="this.parentElement.style.display = 'none';">
                </div>

                <div class="ui-profile">
                    <div class="ui-profile-img" style="background-image: url(<?php echo $user_profile_image; ?>)"></div>

                    <div class="file-upload">
                    <label class="uploaded-image-name"></label>
                        <img src="ico/upload.svg" class="icon_30x30 upload-img">
                        <input type="file" name="image" accept="image/png, image/jpeg" onchange="fileUploaded(this, this.parentElement);">
                    </div>

                </div>

                <div class="input-select ui-input">
                    <input type="text" placeholder="Vārds" name="name" value="<?php echo $ui_name; ?>">
                </div>

                <div style="display: flex; align-items: center; margin-bottom: 15px">
                    <label>+371</label>
                    <div class="input-select ui-input" style="margin-bottom: 0; margin-left: 15px">
                        <input type="tel" placeholder="Tālrunis" name="phone" value="<?php echo $ui_phone; ?>">
                    </div>
                </div>

                <div style="text-align: center">
                    <button class="ui-btn-submit" id="btn-save-profile" type="submit">Saglabāt</button>
                </div>

                <div style="text-align: center">
                    <button class="ui-btn-logout">
                        <a href="/functions/logout.php">Izejiet</a>
                    </button>
                </div>

            </form>

        </div>

        <div id="my-cars" class="ui-section" style="display: none">

            <div class="ui-logo">

                <div style="opacity: 0.3;">
                    <span class="logo"><span>LV</span>AUTO'S</span>
                </div>

                <img class="ui-head-btn" src="ico/close.svg" onclick="UI(false);">

            </div>

            <h1>Manas Mašīnas</h1>

            <div class="ui-buttons">
                <button class="ui-btn" onclick="switchto('profile');">Jūsu Profils</button>
                <button class="ui-btn active-ui-btn" style="margin-left: 15px">Manas Mašīnas</button>
            </div>

            <div class="ui-cars-lists">

                <?php

                if (isset($_SESSION['login'])) {

                    $email = $_SESSION['login']['email'];

                    $user = $mysql -> query(
                        "SELECT * FROM `users` 
                        WHERE `email` = '$email'"
                    );

                    $user = $user -> fetch_assoc();

                    $user_id = $user['id'];

                    $date = date('Y-m-d');

                    $ad_in_ui = $mysql -> query(
                        "SELECT * FROM `ads` WHERE `user_id` = '$user_id'"
                    );

                    while ($row = $ad_in_ui -> fetch_assoc()) {

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

                        if ($row['ad_time_end'] != '') {
                            if ($row['ad_time_end'] < $date) {
                                continue;   
                            }
                        }

                        $ad_time_end_style = '';

                        if ($row['ad_time_end'] == '') {
                            $ad_time_end = 'Sludinājumu šobrīd izskata administrators ...';
                            $ad_time_end_style = 'style="color: #B1B1B1;"';
                        } else {
                            $ad_time_end = date('d.m.Y', strtotime($row['ad_time_end']));
                        }


                        echo '                
                        <div class="car-option">
                            <div class="ui-car-img" style="background-image: url(\'data:image/jpeg;base64,' . $row['car_image_main'] . '\');"></div>

                            <div class="ui-car-info-boxs">
                                <div class="ui-car-info-box">
                                <img src="ico/car.svg" class="icon_20x20" style="margin-right: 15px;">
                                    <span>' . $brand['brand'] . ' ' . $model['model'] . '</a>
                                </div>

                                <div class="ui-car-info-box">
                                    <img src="ico/euro.svg" class="icon_20x20" style="margin-right: 15px;">
                                    <span>' . $row['car_price'] . '</a>
                                </div>

                                <div class="ui-car-info-box">
                                    <img src="ico/timer.svg" class="icon_20x20" style="margin-right: 15px;">
                                    <span ' . $ad_time_end_style . '>' . $ad_time_end . '</a>
                                </div>
                            </div>

                            <div class="ui-car-info-boxs" style="margin-left: auto">
                                <a href="view?id=' . $row['id'] . '" class="ui-show-car">SKATIES</a>
                                <a href="#" class="ui-show-car ui-show-car-delete" style="margin-top: 5px">DZĒST</a>
                            </div>

                        </div>';

                    }

                }
            
            
                ?>

            </div>

        </div>

    </div>
</div>