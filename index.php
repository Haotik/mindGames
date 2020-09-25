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
	<script src="js/onAjaxSucces.js"></script>
	<script src="js/functions.js"></script>
	<title>Игры разума</title>
</head>
<body>
	<span class="gameSelect" onclick="loadSelectGame('sultce_tables')">Таблицы Шульце</span>
	<span class="gameSelect" onclick="loadSelectGame('anagrams')">Анаграмы</span>
	<div class="gameLoadWindow"></div>
</body>
</html>