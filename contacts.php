<?php 

$title = 'Auto Pārdošanas Sludinājumi';
$css = 'contacts';

$home_active;
$ads_active;
$cont_active = true;

$show_upload = true;

require 'layouts/header.php'; 

?>

<div class="container stretch">

    <div class="questions-header">
        <span class="questions-info">Vai jums ir jautājumi?</span>
        <h1 class="questions-h1">Jautājiet mums, mēs jums palīdzēsim!</h1>
    </div>

    <div class="contacts">

        <div class="box">

            <div class="icon-contact">
                <img src="ico/phone.svg" >
            </div>

            <span class="contact-header">Tel. Numurs</span>
            <span class="contact-info">+371 12345678</span>

        </div>

        <div class="box" style="margin-left: 50px;">

            <div class="icon-contact">
                <img src="ico/mail.svg" >
            </div>

            <span class="contact-header">E-Pasts Adrese</span>
            <span class="contact-info">example@inbox.lv</span>

        </div>

        <div class="box" style="margin-left: 50px;">

            <div class="icon-contact">
                <img src="ico/find-us.svg" >
            </div>

            <span class="contact-header">Atrašanās Vieta</span>
            <span class="contact-info">Lātvija, Rīga, Kartupeļu iela 45-3</span>

        </div>

    </div>

</div>

<?php 

require 'layouts/footer.php'; 

?>