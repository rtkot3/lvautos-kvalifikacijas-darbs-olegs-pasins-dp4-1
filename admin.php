<?php

$title = 'Auto Pārdošanas Sludinājumi';
$css = 'admin';

$home_active;
$ads_active;
$cont_active;
$admin_active = true;


$show_upload = true;

require 'layouts/header.php'; 

if (!isset($_SESSION['login'])) {
    
    exit;

} else {

    if ($_SESSION['login']['is_admin'] == '0') {
        exit;
    }

}

?>

<div class="container stretch">
    
</div>

<?php 

require 'layouts/footer.php'; 

?>