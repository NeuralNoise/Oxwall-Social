<?PHP
session_start();
include('loginManager/loginManager.php');
?>
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
<script type="text/javascript" src="http://widgets.amung.us/colored.js"></script>
<div style="height:30%; overflow:scroll;">
	<font size=3 color=black>
<?PHP
$a = 0;
while(sizeof($contents) > $a) {
	if ($contents[$a]) {
?>
		<script type="text/javascript">WAU_colored('<?PHP echo substr(nc($contents[$a]),0,8); ?>', '00000000adef')</script>
		&nbsp;<?PHP echo $contents[$a]; ?><br>
<?php
	}
	$a++;
}
?>
	</font>
</div>
<?PHP include('admin/footer.php'); ?>

