<?php
function getApi($url) {
	$json=file_get_contents($url);
	switch (http_response_code()) {
		case 200: {return json_decode($json,true); break;}
		case 204: {return array(); break;}
		case 404: {return false; break;}
	}
}

?>

