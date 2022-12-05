# Access to filter sites
Access to filter sites with your host/server IP 

First, put the following code in a PHP file

<code><?php
$site = $_GET['link'];
echo file_get_contents("$site");
</code>

Then upload the file on your host/server

Put the following text in front of the link <br>
?link=SITE <br>
And instead of the word SITE, enter the address of your site along with https:// <br>
Example : https://Domain.me.com/file.php?link=https://telegram.org
