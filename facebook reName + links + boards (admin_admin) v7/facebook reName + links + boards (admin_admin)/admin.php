<?PHP
session_start();
include('loginManager/loginManager.php'); ?>
<div id='showContents'></div>
<?PHP
if (!$_SESSION['log']) { exit(); }



$archivo = 'frases/frases.txt';
$abre = fopen($archivo, "r");
$source = fread($abre, filesize($archivo));
fclose($abre);


$contents = explode("
",$source);

//print_r($contents);
?>
<div style="height:30%; overflow:scroll;">
<?PHP
$a = 0;
while(sizeof($contents) > $a) {
	if ($contents[$a]) {
?>
<a href='/reName/?name=<?php echo $contents[$a]; ?>' target='frases'><?php echo $contents[$a]; ?></a>
 ( <a href='/reName/frases/<?php echo sha1($contents[$a]); ?>.txt' target='frases'><b>+</b></a> )
<br>
<?php
	}
	$a++;
}
?>
</div>
<?PHP include('admin/footer.php'); ?>

