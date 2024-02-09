<?php
session_start();

if (!isset($_SESSION["kedvencek"])) {
	$_SESSION["kedvencek"]=array();
}

function kedvencek() {
	return $_SESSION["kedvencek"];
}

function uj_kedvenc($kep){
	if (!in_array($kep,$_SESSION["kedvencek"]))
		array_push($_SESSION["kedvencek"],$kep);
}

function nem_kedvenc($kep) {
	$i=array_search($kep,$_SESSION["kedvencek"]);
	unset($_SESSION["kedvencek"][$i]);
}

if (isset($_GET["alap"]) && $_GET["alap"]=="igen") {
	session_unset(); 
	header('Location: ./?p=0');
}

?>