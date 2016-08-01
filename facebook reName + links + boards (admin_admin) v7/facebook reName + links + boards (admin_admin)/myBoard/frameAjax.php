<?PHP
if ($_SERVER['HTTP_HOST'] == 'localhost') {
	sleep(1);
}
if (!$_REQUEST['ID']) {
?>
<script type="text/javascript" language="javascript">
	/*alert('ola');*/
	var source
	source	= '<h1>Bienvenid@ a "myBoard" beta</h1>';
	source	+= '<form target="frameAjax" action="frameAjax.php?" onsubmit=document.getElementById("bsubmit").disabled="disabled";>';
	source	+= 'ID: <input type="text" name="ID" value="demo"><input type="submit" value="myBoard" id="bsubmit" >';
	source	+= '</form>';
<?PHP
}
else {
	$filename 	=	$_REQUEST['ID'].'.txt';
	$filexist	=	file_exists($filename);

	if($filexist) {
// obtiene el contenido de un archivo en una cadena
		$gestor = fopen($filename, "r");
		$contenido = @fread($gestor, filesize($filename));
		fclose($gestor);
?>
<div id="source"><?PHP echo $contenido; ?></div>
<script type="text/javascript" language="javascript">
	/*alert('ola');*/
	var source
	source	= '<!--<h1>Bienvenid@ [ <?PHP echo $_REQUEST['ID'];?> ] a "myBoard" beta</h1>-->';
	source	+= '<a href="index.php">Cambiar ID</a>';
	source	+= '<hr>';
	source	+= '<div id="myLinks">';

		source	+= '<form target="frameAjax" action="frameAjaxActions.php" onsubmit=document.getElementById("bsubmit").disabled="disabled";>';
		source	+= '<input type="hidden" name="action" value="editBoard">';
		source	+= '<input type="hidden" name="ID" value="<?PHP echo $_REQUEST['ID'];	?>">';
		source	+= '<textarea widht="100%" height="400px" style="height:400px;width:100%;" id="textarea" name="textarea">';

		source	+= document.getElementById('source').innerHTML;

		source	+= '</textarea>';
		source	+= '<br>';
		source	+= '<input type="submit" value="Guarda" name="bsubmit"><input type="reset" value="Resetea"><input type="button" ';
		source	+= 'onclick=document.getElementById("textarea").innerHTML=""; value="Limpia">';
		source	+= '</form>';
<?PHP
	}
	else {
?>
<script type="text/javascript" language="javascript">
	/*alert('ola');*/
	var source
	source	= '<a href="index.php">Cambiar ID</a>';
	source	+= '<hr>';
	source	+= '<div id="myLinks">';

		source	+= '<form target="frameAjax" action="frameAjaxActions.php">';
		source	+= '<input type="hidden" name="action" value="addBoard">';
		source	+= '<input type="hidden" name="ID" value="<?PHP echo $_REQUEST['ID'];	?>">';
		source	+= '<textarea widht="100%" height="400px" style="height:400px;width:100%;" id="textarea" name="textarea"></textarea>';
		source	+= '<br>';
		source	+= '<input type="submit" value="Save"><input type="button" ';
		source	+= 'onclick=document.getElementById("textarea").innerHTML=""; value="Limpia">';
		source	+= '</form>';
<?PHP
	}
?>
	source	+= '</div>';
<?PHP
}
?>
	if (source) {
		window.parent.document.getElementById('legend').innerHTML			=	'<a href="index.php?ID=<?PHP echo $_REQUEST['ID']; ?>">myBoard</a>';
		window.parent.document.getElementById('myLinksI').innerHTML = source;
	}
</script>
