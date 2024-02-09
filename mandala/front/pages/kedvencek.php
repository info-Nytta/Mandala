<?php
$jelolt=false;

$dir="./front/img/mandala/";
if (isset($_GET["nemkedvenc"])) {
	nem_kedvenc($_GET["nemkedvenc"]);
	$jelolt=true;
}
?>

<h1>Kedvenc mandaláid</h1>

<?php if (!$jelolt) { ?>

		<?php if (count(kedvencek())>0) { ?>

		<div class='galery-contener'>
			<?php	foreach (kedvencek() as $kedvenc) { 
					echo "<div class='galery-item'>
						<a class='galery-img' href='$dir$kedvenc' target='_blank'>
							<img src='$dir$kedvenc'>
						</a>
						<a class='galery-item-caption' href='./?p=2&nemkedvenc=$kedvenc'>
								Mégsem kedvenc
						</a>
					</div>";
			} ?>
		</div>

		<?php } else { ?>

		<p class='center'>Nincs kedvenc mandalád</p>

		<?php } ?>

<?php } else { 
			header('Location: ./?p=2'); //include("elvesz.php"); 
		} ?>