<?php session_start();

include ("functions/update_profile.php");

if (isset($home_active)) { $home_active = 'links active-link'; } else { $home_active = 'links'; }

if (isset($ads_active)) { $ads_active = 'links active-link'; } else { $ads_active = 'links'; }

if (isset($cont_active)) { $cont_active = 'links active-link'; } else { $cont_active = 'links'; }

if (isset($admin_active)) { $admin_active = 'links active-link'; } else { $admin_active = 'links'; }

if (!isset($show_upload)) { $show_upload = false; }

$admin_link = '';

if (isset($_SESSION['login']) ) {
    $ui = 'onclick="UI(true, \'profile\');"';
    $ui_name = $_SESSION['login']['name'];
    $ui_phone = $_SESSION['login']['phone'];

    if ($_SESSION['login']['is_admin'] == '1') {
        $admin_link = '<a href="admin" class="' . $admin_active . '">ADMIN</a>';
    }


} else {
    $ui = 'onclick="UI(true, \'login\');"';
    $ui_name = 'Pieslēgties';
    $ui_phone = '29123456';
}

?>

<!DOCTYPE html>
<html lang="lv">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Lexend:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/ui.css">
    <link rel="stylesheet" href="css/<?php echo $css ?>.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $title ?> </title>
</head>
<body>
    
<header>

    <section class="header-logo">
        <div class="block">

            <div class="sub-block">
                <a href="/" class="logo"><span>LV</span>AUTO'S</a>
            </div>

            <div class="sub-block profile" id="profile" <?php echo $ui; ?> >
                <img style="margin-right: 15px;" class="icon_22x22" src="ico/user.svg">

                <span><?php echo $ui_name; ?></span>
                
            </div>

        </div>
    </section>

    <section class="header-section" style="position: relative;">
        <div class="block">

            <div class="sub-block menu">
                <a href="/" class="<?php echo $home_active ?>" style="margin-right: 15px;">HOME</a>
                <a href="ads" class="<?php echo $ads_active ?>" style="margin-right: 15px;">SLUDINĀJUMI</a>
                <a href="contacts" class="<?php echo $cont_active ?>" style="margin-right: 15px;">KONTAKTI</a>
                <?php echo $admin_link; ?>
            </div>

            <div class="sub-block nav">
                <img src="ico/menu.svg" onclick="menu();">
            </div>

            <?php
            
            if ($show_upload) {

                if (isset($_SESSION['login'])) {

                    echo '<div class="sub-block"> <a class="upload-ad no-long-upload-ad" href="upload"><img class="icon_22x22" src="ico/ad-upload.svg"></a> <a href="upload" class="upload-ad long-upload-ad">Iesniegt Sludinājumu</a></div>';

                } else {

                    echo '<div class="sub-block"> <a onclick="UI(true, \'login\');" class="upload-ad no-long-upload-ad"><img class="icon_22x22" src="ico/ad-upload.svg"></a> <a onclick="UI(true, \'login\');" class="upload-ad long-upload-ad">Iesniegt Sludinājumu</a></div>';

                }

                

            }
            
            ?>

        </div>

        <nav style="display: none">
            <a href="/" class="<?php echo $home_active ?>">HOME</a>
            <a href="ads" class="<?php echo $ads_active ?>">SLUDINĀJUMI</a>
            <a href="contacts" class="<?php echo $cont_active ?>">KONTAKTI</a>
            <?php echo $admin_link; ?>  
        </nav>

    </section>

</header>

<?php

require 'layouts/ui.php'; 

?>