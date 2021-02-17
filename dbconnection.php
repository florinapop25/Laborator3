<?php
$dbUsername="RAglXimmOu";
$dbPassword="zVN3Z6lKKg";
$hostName="remotemysql.com";
$dbName="RAglXimmOu";
$dbPort=3306;
$con=mysqli_connect($hostName,$dbUsername,$dbPassword,$dbName);
if(!$con)
{
die("Eroare de conexiune");
$string="Not connected";
echo("<script>console.log('".$string."');</script>");
}
else
{
$string="Connected";
echo("<script>console.log('".$string."');</script>");
}
?>
