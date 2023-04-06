<?php

$blob = file_get_contents($_FILES['image']['tmp_name']);

echo base64_encode($blob); exit;

?>