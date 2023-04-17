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

<div>

</div>

</div>
    
</div>

<?php 

require 'layouts/footer.php'; 

?>