<?php 
for ($i=1;$i<=25;$i++){
	$numbers[$i] = $i;
}

shuffle($numbers);

foreach ($numbers as $value) {?>
	<div class="number"><?php echo $value ?></div>
<?php }