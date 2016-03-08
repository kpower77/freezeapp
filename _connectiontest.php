<?php
$server   = "localhost";
$database = "freezeapp";
$username = "root";
$password = "root";

$mysqlConnection = mysql_connect($server, $username, $password);
if (!$mysqlConnection) 
{
  echo "Please try later.";
}
else
{
echo "FREEZE APP Database Connection Successfull";
}

?>

<!--
To check database conneciton copy and past below link in your browswer:
https://freezeapp-nasirahamed-2.c9users.io/_connectiontest.php


To login to PhpMyAdmin, use the following details:
https://freezeapp-nasirahamed-1.c9users.io/phpmyadmin

UserName:
root

Password:
root

After login select the freezeapp database.
-->