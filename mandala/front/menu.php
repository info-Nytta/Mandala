<?php
$page="pages/start.php";


if (isset($_GET['p'])){
	switch ($_GET['p']) {
		case '1': {
			$page="pages/galeria.php";
			break;
		}
		case '2': {
			$page="pages/kedvencek.php";
			break;
		}
	}
}

?>