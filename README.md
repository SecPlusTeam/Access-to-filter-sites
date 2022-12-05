# Access to filter sites
Access to filter sites with your host/server IP 

First, put the following code in a PHP file

<?php
$site = $_GET['link'];
echo file_get_contents("$site");
?>

Then upload the file on your host/server

Put the following text in front of the link
?link=SITE
And instead of the word SITE, enter the address of your site along with https://
