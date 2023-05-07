<?php session_start();

ini_set('display_errors', 0);

if (!isset($_SESSION['login'])) {
    
    header('Location: /');

} else {

    if ($_SESSION['login']['is_admin'] == '0') {

        header('Location: /');

    }

}

$title = 'Auto Pārdošanas Sludinājumi';
$css = 'admin';

$home_active;
$ads_active;
$cont_active;
$admin_active = true;


$show_upload = true;

require 'layouts/header.php';

?>

<div class="container stretch" style="padding-top: 50px">
    <div class="car-list">
        <?php
        
        include ("functions/sql_connection.php");

        $non_actives_ads = $mysql -> query(
            "SELECT * FROM `ads` 
            WHERE `ad_is_showing` = 0"
        );

        while ($row = $non_actives_ads -> fetch_assoc()) {

            echo '

            <div class="car">
                <span class="car-id">' . $row['id'] . '</span>
                <span class="car-number">' . $row['car_registration_number'] . '</span>
                <span>' . $row['car_vin_number'] . '</span>

                <div class="car-buttons">
                    <button onclick="adminViewCar(' . $row['id'] . ')">View</button>
                    <button onclick="adminUploadCar(' . $row['id'] . ', this.parentElement.parentElement)">Upload</button>
                    <button onclick="this.parentElement.parentElement.outerHTML = null; adminDeleteCar(' . $row['id'] . ')">Delete</button>
                </div>

            </div>';

        }
        
        ?>

    </div>

    <div class="car-view">

    </div>

</div>

<script src="/js/admin.js"></script>
<script src="/js/view.js"></script>
<script src="/js/jquery-3.6.4.min.js"></script>
<script src="/js/notify.min.js"></script>

<?php 

require 'layouts/footer.php'; 

?>