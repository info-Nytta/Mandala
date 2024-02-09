<h1>Galéria</h1>

<?php 
if (isset($_GET["kedvenc"])) {
    uj_kedvenc($_GET["kedvenc"]);
    $honnan="ujkedvenc";
    $kep_tomb=array($_GET["kedvenc"]);
    echo "<p class='center'>Ezt a képet hozzáadtad a kedvencekhez.</p>";
}
else {
    $honnan="galeria";
    $kep_tomb=scandir(MANDALAK);
    unset($kep_tomb[0],$kep_tomb[1]); 
}
include("kepek.php");
?>
<p>
	<a href='https://gencraft.com/' target='_blank'>Gencraft AI</a> által generált képek
</p>