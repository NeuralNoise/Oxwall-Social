<?PHP
$filename = 'frases/grupos/'.sha1($_REQUEST['name']).'.txt';
if (file_exists($filename)) {


$abre = fopen($filename, "r");
$source = fread($abre, filesize($filename));
fclose($abre);

$contents = explode("
",$source);
//$contents = $source;


	$a = 0;
	while(sizeof($contents) > $a) {
		if ($contents[$a]) {
			if (ereg('http://',$contents[$a]) || ereg('https://',$contents[$a])) {

?><iframe src="<?PHP echo $contents[$a]; ?>" width="<?PHP if($rn) { echo $rn; } else { echo '625'; } ?>" height=500 frameborder=0></iframe><?PHP

			}
			else {

?><fb:fan profile_id="<?PHP echo $contents[$a]; ?>" stream="" connections="10" width="<?PHP if($rn) { echo $rn; } else { echo '625'; } ?>"></fb:fan><?PHP

			}
		}
		$a++;
	}
}
//else {
	include('addgroup.php');
//}
?>
