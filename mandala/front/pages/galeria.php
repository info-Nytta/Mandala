<?php
$dir="./front/img/mandala/";
$fajlok=scandir($dir);
$jeloles=false;

/* ez így nem működőképes!

if (!isset($_COOKIE["kedvencek"])){
	$_COOKIE['kedvencek']=array();
}

if (isset($_GET["kedvenc"])) {
	array_push($_COOKIE["kedvencek"],$_GET["kedvenc"]);
}
*/

if (isset($_GET["kedvenc"])) {
	uj_kedvenc($_GET["kedvenc"]);
	$jeloles=true;
}
//$kedvencek=kedvencek();

echo "<pre>";
//print_r($GLOBALS);
//print_r(kedvencek());
echo "</pre>";
?>

<h1>Galéria</h1>

<?php 
	if (!$jeloles) include_once("kepek.php");
	else include("hozzaad.php"); 
?>



