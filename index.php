<?php

$site = $_GET['link'];

echo file_get_contents("$site");
?>