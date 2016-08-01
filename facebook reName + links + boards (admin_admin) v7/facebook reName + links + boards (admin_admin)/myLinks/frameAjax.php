<script type="text/javascript" language="javascript">
	/*alert('ola');*/
	var source
<?PHP
if ($_SERVER['HTTP_HOST'] == 'localhost') {
//	sleep(1);
}
if (!$_REQUEST['ID']) {
?>
	source	= '<!--<h1>Bienvenid@ a "myLinks" beta</h1>-->';
	source	+= '<form target="frameAjax" action="frameAjax.php?" onsubmit=document.getElementById("bsubmit").disabled="disabled";>';
	source	+= 'ID: <input type="text" name="ID" value="demo"><input type="submit" value="myLinks" id="bsubmit" >';
	source	+= '</form>';
<?PHP
}
else {
	$filename 	=	$_REQUEST['ID'].'.txt';
	$filexist	=	file_exists($filename);
?>
	source	= '<!--<h1>Bienvenid@ [ <?PHP echo $_REQUEST['ID'];?> ] a "myLinks" beta</h1>-->';
<?PHP
	//if ($filexist)	{
?>
	source	+= '<a href="frameAjaxLinks.php?ID=<?PHP echo $_REQUEST['ID'];?>&action=addlink" target="frameAjax">Añadir enlace</a>';
	source	+= '&nbsp;&nbsp;';
<?PHP
	//}
?>
	source	+= '<a href="frameAjaxLinks.php?ID=<?PHP echo $_REQUEST['ID'];?>&action=editlink" target="frameAjax"';
	source	+= 'style="display:none;" id="editlink">Modificar enlace</a>';
	source	+= '&nbsp;&nbsp;';
	source	+= '<a href="frameAjaxLinks.php?ID=<?PHP echo $_REQUEST['ID'];?>&action=dellink" target="frameAjax"';
	source	+= 'style="display:none;" id="dellink">Borrar enlace</a>';
	source	+= '&nbsp;&nbsp;';
	//source	+= '<a href="index.php">Cambiar ID</a>';
	//source	+= '&nbsp;&nbsp;';
	//source	+= '<a href="<?PHP echo $_REQUEST['ID'];?>.txt">Descarga txt</a>';
	source	+= '<hr>';
	source	+= '<div id="myLinks">';
<?PHP
	if($filexist) {
?>
<?php
// obtiene el contenido de un archivo en una cadena
		$gestor = fopen($filename, "r");
		$contenido = fread($gestor, filesize($filename));
		/*print_r($contenido);*/
		fclose($gestor);

//No tocar
$contenido = explode("
",$contenido);
//No tocar

		/*print_r($contenido);*/
		
		$x = 2;
		while ($contenido[$x] && $x/2) {
?>/*
		var opt = '"Editar | Suprimir"';
		source	+= '<div style="height:35px;padding:3px;float:left;"';
		source	+= 'onmouseover=document.getElementById("<?PHP echo $x;?>").style.display=""; ';
		source	+= 'onmouseout=document.getElementById("<?PHP echo $x;?>").style.display="";>';
		source	+= '<input style="width:8px;height:8px;" type="checkbox" id="<?PHP echo $x;?>" style="cursor:pointer;" ';
		source  += 'onmouseover="return propiedades();" ';
		source	+= 'onclick=editaLink("<?PHP echo $_REQUEST['ID'];?>","<?PHP echo $contenido[$x];?>","<?PHP echo $x;?>");';
		source	+= '>&nbsp;';
		source	+= '<a href="<?PHP echo $contenido[$x+1];?>" target="_blank"><?PHP echo $contenido[$x];?></a>&nbsp;&nbsp;';
		source	+= '</div>';
		*/

		source	+= '<div style="width:138;float:left; margin:2px;"> <fieldset><legend style="font-size:10px;"><?PHP echo $contenido[$x];?></legend>';
		source	+= '<a href="<?PHP echo $contenido[$x+1];?>" title="<?PHP echo $contenido[$x];?>" target="_blank"><img height="102px" width="136px" src="http://<?PHP echo date('D'); ?>.mylinks.websnapr.com/?size=s&key=key&url=<?PHP echo str_replace('http://','',$contenido[$x+1]); ?>" border="0" ';
		source	+= '></a></fieldset></div>';

<?PHP
			$x = $x + 2;
		}
?>
		/*
		source	+= '<input type="checkbox" id="addonPack" style="cursor:pointer;"';
		source	+= 'onclick=editaLink("<?PHP echo $_REQUEST['ID'];?>","addonPack");';
		source	+= '>&nbsp;';
		source	+= '<a href="http://addonPack.tk" target="_blank">addonPack</a>&nbsp;&nbsp;';
		*/
<?PHP
	}
	else {
?>
		source	+= '<form target="frameAjax" action="frameAjaxActions.php?action=addlink">';
		source	+= 'Name: <input type="text" name="name">';
		source	+= '<br>';
		source	+= 'URL: <input type="text" name="url">';
		source	+= '<br>';
		source	+= '<input type="submit" name=Submit value="Add link"><input type="hidden" name="ID" value="<?PHP echo $_REQUEST['ID'];	?>">';
		source	+= '</form>';
<?PHP
	}
?>
	source	+= '</div>';
<?PHP
}
?>
	if (source) {
		window.parent.document.getElementById('legend').innerHTML			=	'<a href="index.php?ID=<?PHP echo $_REQUEST['ID']; ?>">Related links</a>';
		window.parent.document.getElementById('myLinksI').innerHTML = source;
	}
</script>
