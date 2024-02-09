<?php 
switch ($honnan){
    case "kedvencek": {
        $van_link=true;
        $link_szoveg="Mégsem kedvenc";
        $link="./?p=2&nemkedvenc=";
        break;}
    case "galeria": {
        $van_link=false;
        $link_szoveg="Kedvencekhez";
        $link="./?p=1&kedvenc=";
        $szoveg="Már kedvenc";
        break;
    }
    case "ujkedvenc": {
        $van_link=true;
        $link_szoveg="Rendben";
        $link="./?p=1&rendben=";
        break;
    }
}
$kedvencek=kedvencek();
?>

<div class='galery-contener'>
<?php foreach ($kep_tomb as $k) { ?>

    <div class='galery-item'>
		<a class='galery-img' href='<?php echo MANDALAK.$k ?>' target='_blank'>
			<img src='<?php echo MANDALAK.$k ?>'>
		</a>
        <?php if ($van_link || (!$van_link && !in_array($k,$kedvencek)) ) {?>
		<a class='galery-item-caption' href='<?php echo $link.$k ?>'>
			<?php echo $link_szoveg ?>
		</a>
        <?php } else echo $szoveg ?>
	</div>

<?php } ?>
</div>