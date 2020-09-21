<?php 

$stringNumber = rand(0,67774);
$k = 0;

$handle = @fopen("../words.txt", "r");
if ($handle) {
    while (($buffer = fgets($handle, 4096)) !== false) {
    	if ($k == $stringNumber){
    		$word = str_replace(",", "", $buffer);
    		$word = str_replace(" ", "", $word);
    	}
    	$k++;
    }
    if (!feof($handle)) {
        echo "Ошибка: fgets() неожиданно потерпел неудачу\n";
    }
    fclose($handle);
}

$letters = mb_str_split($word);
$countOfLetters = count($letters);

while (implode($letters) == $word) {
	shuffle($letters);
}
?>
<h4>Анаграмы</h4>
	<div class="anagrams">
		<div class="inputWord">
			<input type="text" id="inputWordText">
			<input type="submit" id="checkWordVariant" value="<=">
		</div>
		<div class="selectLetter">
			<?php foreach ($letters as $letter) {?>
				<span class="letter"><?=$letter?></span>
			<?php } ?>
		</div>
		<div class="ajaxResult"></div>
	</div>