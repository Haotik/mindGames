<?php
	include_once 'php/mainFunctions.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/main.css">
	<?cssLoader()?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="js/onDocumentReady.js"></script>
	<title>Игры разума</title>
</head>
<body>
	<span class="gameSelect">Таблицы Шульце</span>
	<span class="gameSelect">Анаграмы</span>
		<?php
			include_once 'php/sultce_tables.php';
		?>
		<?php
			include_once 'php/anagrams.php';
		?>
</body>
</html>