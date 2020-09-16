<?php
	include_once 'php/mainFunctions.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/main.css">
	<?php cssLoader()?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="js/onDocumentReady.js"></script>
	<title>Игры разума</title>
</head>
<body>
	<h4>Таблицы Шульце</h4>
	<div class="tables">
		<?php
			include_once 'php/sultce_tables.php';
		?>
	</div>
	<div class="anagrams">
		<?php
			include_once 'php/anagrams.php';
		?>
	</div>
</body>
</html>