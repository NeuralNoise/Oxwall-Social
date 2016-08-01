<?PHP

function counterStats($archivo,$sum=false) {

if (file_exists($archivo)) {
	$abre = fopen($archivo, "r");
	$total = fread($abre, filesize($archivo));
	fclose($abre);
}

if ($sum) {
	$abre = fopen($archivo, "w");
	$total = $total + $sum;
	$grabar = fwrite($abre, $total);
	fclose($abre);
}

return $total;
}

// Archivo en donde se acumulará el numero de visitas
$archivo = "counters/".nc($_REQUEST["name"]).".txt";


if ($_REQUEST['name'] != $reName['name']) {
	echo "<font color='black' size='2'>Total de visitas para <b style='color:#336699;'>".$_REQUEST["name"]."</b>:&nbsp;<b>".counterStats($archivo,1)."</b></font>";
}
?>
<?PHP

if(!$_SESSION['TPLsettingsC']['relF']) {

$archivo = 'frases/frases.txt';
if (file_exists($archivo)) {

  $abre = fopen($archivo, "r");
  $source = fread($abre, filesize($archivo));
  fclose($abre);


  $contents = explode("
",$source);

//print_r($contents);
?>
<div style="height:400px; overflow:scroll; background-color:#ffffff; text-align:left;">
<h2 style='color:#000000;'>M&aacute;s p&aacute;ginas</h2>
<?PHP
  $a = sizeof($contents);
  while(0 <= $a) {
	if ($contents[$a] && $contents[$a]!= $_REQUEST["name"]/* && $a < 50*/) {
?>
<table cellpadding=0 cellspacing=0><tr><td>
	<iframe src="http://www.facebook.com/widgets/like.php?&amp;layout=button_count&amp;href=http://<?PHP echo $_SERVER['HTTP_HOST'].$reName['root']; ?>?name=<?PHP echo urlencode($contents[$a]); ?>" scrolling="No" frameborder="0" style="border:none; width:95px; height:20px; margin-top: 5px; margin-right: 5px;"></iframe>
</td>
<td style="v-align:middle;">
	<a href='?name=<?php echo urlencode($contents[$a]); ?>' target='_top' style='color:#336699;font-size:11px;'><?php echo htmlentities($contents[$a]); ?></a><br>
</td></tr></table>
<?php
	flush();
	ob_flush();
	}
	$a--;
  }
?>
</div>
<br><br>
<?PHP
 }
}
?>
