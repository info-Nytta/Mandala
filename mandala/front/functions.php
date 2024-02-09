<?php
function getApi($url) {
	$json=file_get_contents($url);
	if (http_response_code()==404) return false;
	else return json_decode($json,true);
}
?>

