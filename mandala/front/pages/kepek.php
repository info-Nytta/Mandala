<div class='galery-contener'>
	<?php	for($i=2; $i<count($fajlok); $i++) { 
			echo "<div class='galery-item'>
			<a class='galery-img' href='$dir".$fajlok[$i]."' target='_blank'>
				<img src='$dir".$fajlok[$i]."'>
			</a>";
			if (in_array($fajlok[$i],kedvencek())) {
				echo "Már kedvenc"; 
			}
			else { 
				echo "<a class='galery-item-caption' href='./?p=1&kedvenc=$fajlok[$i]'>
					Kedvencekhez
				</a>";
			}
		echo "</div>"; } ?>
</div>
<p>
	<a href='https://gencraft.com/' target='_blank'>Gencraft AI</a> által generált képek
</p>