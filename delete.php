<?php
$dbhost='localhost';
$usename='root';
$password='';
//$db='delete';

$dbhandle=mysqli_connect("$dbhost","$usename","$password");


mysqli_select_db($dbhandle,"delete");
echo "Connectedd";
?>