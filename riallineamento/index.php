<?php
// include("functions.php");
require("php/functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/style.css">
	<title>Riallineamento competenze</title>
</head>
<body>
	<nav>
		<input type="button" value="rosso" id="rosso">
		<input type="button" value="verde" id="verde">
		<input type="button" value="alterna" id="alterna">
	</nav>

	<?php CreaDiv(10, "daColorare"); ?>

</body>
<script src="js/manager.js"></script>
</html>
