# Access to filter sites
Access to filter sites with your host/server IP 

<code><?php<br><br>$site = $_GET['link'];<br><br>echo file_get_contents("$site");</code>
