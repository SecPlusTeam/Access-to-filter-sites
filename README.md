# Access to filter sites
<h2>Access to filter sites with your host/server IP</h2>

<h4>First, put the following code in a PHP file</h4>

<code><?php
$site = $_GET['link'];
echo file_get_contents("$site");
</code>

<h4>Then upload the file on your host/server<br>

Put the following text in front of the link <br>
?link=SITE <br></h4>
<h4>And instead of the word SITE, enter the address of your site along with https:// <br>
Example : https://Domain.com/file.php?link=https://site-filter.com</h4>

<h4>This only brings the HTML of the site and it depends on the person who wrote the site to bring the CSS or not<br>
The present sample source is at the address below</h4>
