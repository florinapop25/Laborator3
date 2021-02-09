<?php
$dbUsername="sql7391786";
$dbPassword="eugFMKlMSf";
$hostName="sql7.freesqldatabase.com";
$dbName="sql7391786";
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
