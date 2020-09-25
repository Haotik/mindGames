<script>
	shultceTables();
</script>

<h4>Таблицы Шульце</h4>
<div class="tables">
	<?php 
	for ($i=1;$i<=25;$i++){
		$numbers[$i] = $i;
	}

	shuffle($numbers);

	foreach ($numbers as $value) {?>
		<div class="number"><?=$value ?></div>
	<?php }?>
</div>