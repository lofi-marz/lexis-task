<!DOCTYPE html>
<html>

<head>
	<title>LexisNexis Task</title>
	<link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>
	<?php
	require_once("curl.php");
	?>
	<div id="container">
		<div id="content-box">
			<header>
				🌊 LexisNexis Task
			</header>
			<div id="response-box" class="response-box">
				<?php
				$testurl = "https://api.acme.com/fireworks/v1";
				$workingurl = "https://official-joke-api.appspot.com/random_joke";
				$url = $testurl;
				$response = get($url);
				print($response);

				?>
			</div>
		</div>


	</div>


</body>

</html>