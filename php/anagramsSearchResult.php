<?php
/** по хорошему базу слов надо загнать в бд, но пока что это не актуально*/
$checkWord =",".$_POST['word'].",";
$flag = false;
$handle = @fopen("../words.txt", "r");
if ($handle) {
    while (($buffer = fgets($handle, 4096)) !== false) {
    	if (mb_stristr($buffer,$checkWord)){
    		echo "Правильно";
    		$flag = true;
    	}
    }
    if (!feof($handle)) {
        echo "Ошибка: fgets() неожиданно потерпел неудачу\n";
    }
    fclose($handle);
}
if(!$flag){
	echo "Неправильно";
}
?>