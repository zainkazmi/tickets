<?php
$link = mysql_connect('192.168.30.23', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>