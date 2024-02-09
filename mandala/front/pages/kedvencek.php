<h1>Kedvencek</h1>

<?php 
$honnan="kedvencek";

$kep_tomb=kedvencek();
if (count($kep_tomb)==0) echo "<p class='center'>Nincs kedvenc mandalád</p>";
else if (isset($_GET["nemkedvenc"])) {
    nem_kedvenc($_GET["nemkedvenc"]);
    header("Location: ./?p=2");
}
else include("kepek.php");
?>