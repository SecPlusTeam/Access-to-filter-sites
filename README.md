# Access to filter sites
Access to filter sites with your host/server IP 


<?php<br>
$site = $_GET['link'];<br>
echo file_get_contents("$site");<br>
?>

