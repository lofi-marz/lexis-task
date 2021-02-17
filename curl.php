
<?php 

function sanitise($value) {
	$value = htmlspecialchars($value);
	$value = filter_var($value, FILTER_SANITIZE_STRING);
	$value = trim($value);
	$value = stripslashes($value);
	return $value;
}

function get($url,  $headers = false) {
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);

	if ($headers) {
		curl_setopt($curl, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/json',
			$headers
		));
	} else {
		curl_setopt($curl, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/json'
		 ));
	}

	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_NONE);
	$result = curl_exec($curl);
	if (!$result) {
		print("Error connecting to API: ");
		echo "cURL Error: " . curl_error($curl);
		return null;
	}
	curl_close($curl);
	return sanitise($result);
}
?>