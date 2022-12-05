# Access to filter sites
<h2>Access to filter sites with your host/server IP</h2>

<h4>First, put the following code in a PHP file</h4>

<code><?php
$site = $_GET['link'];
echo file_get_contents("$site");
</code>

<h4>Then upload the file on your host/server</h4>

<h4>Put the following text in front of the link <br></h4>
<h4>?link=SITE <br></h4>
<h4>And instead of the word SITE, enter the address of your site along with https:// <br>
Example : https://Domain.com/file.php?link=https://site-filter.com</h4>
