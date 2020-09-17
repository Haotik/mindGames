<?php

function cssLoader(){

	$allCssFiles = scandir("css");
	unset($allCssFiles[0]);
	unset($allCssFiles[1]);
	
	$currentPage = getCurrentPage();
	foreach ($allCssFiles as $cssFile) {
		if (strstr($cssFile, $currentPage)) {?>
			<link rel="stylesheet" href="css/<?=$cssFile?>">
		<?php }
	}
}

function getCurrentPage(){
	$currentPath = explode("/", $_SERVER['SCRIPT_NAME']);
	$fullName = end($currentPath);
	$nameWiwhoutType = substr($fullName, 0, -4);
	return $nameWiwhoutType;
}