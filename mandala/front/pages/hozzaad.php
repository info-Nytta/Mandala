<?php $kedvencek=kedvencek(); ?>
<div class='galery-contener'>
	<p class='center'>Ezt a képet hozzáadtad a kedvencekhez.</p>
	<div class='galery-item'>
		<a class='galery-img' href='<?php echo $dir.$kedvencek[count($kedvencek)-1] ?>' target='_blank'>
			<img src='<?php echo $dir.$kedvencek[count($kedvencek)-1] ?>'>
		</a>
		<a class='galery-item-caption' href='./?p=1'>
			Rendben
		</a>
	</div>
</div>