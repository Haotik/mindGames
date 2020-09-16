<?php 
$word = "лоза";
$variants = ["зал","зло","зола","лаз","лоза"];
$letters = mb_str_split($word);
$countOfLetters = count($letters);

while (implode($letters) == $word) {
	shuffle($letters);
}
?>
<form action="#">
	<div class="inputWord">
		<input type="text" id="inputWordText">
		<input type="submit" value="<=">
	</div>
	<div class="selectLetter">
		<?php foreach ($letters as $letter) {?>
			<span class="letter"><?=$letter?></span>
		<?php } ?>
	</div>
</form>