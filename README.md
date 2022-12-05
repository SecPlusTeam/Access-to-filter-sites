# Access to filter sites
Access to filter sites with your host/server IP 
<per>
  <?php<br>
$site = $_GET['link'];<br>
echo file_get_contents("$site");<br>
?>
  </pre>

