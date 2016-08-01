<?PHP
session_start();
if(!$_SESSION['TPLsettingsC']['map'])		{ $mapa = 'No mostrar mapa'; }
else						{ $mapa = 'Mostrar mapa'; }

if(!$_SESSION['TPLsettingsC']['relLinks'])	{ $relLinks = 'No mostrar enlaces relacionados'; }
else						{ $relLinks = 'Mostrar enlaces relacionados'; }

if(!$_SESSION['TPLsettingsC']['relF'])		{ $relF = 'No mostrar otras frases'; }
else						{ $relF = 'Mostrar otras frases'; }


?>

<script>
function TPLsettingsC() {
	document.body.innerHTML = document.getElementById('divTableTPL').innerHTML;
}
function checkReload() {
	if (window.parent.location.href	==	window.location.href) {
		window.location.reload();
	}
	else {
		window.parent.location.href	=	window.location.href;
	}
}
</script>

<div style='display:none;' id='divTableTPL'>
	<table style='background-color:white;border:solid 1px grey;width:100%;height:100%;' cellpadding=2>
		<tr><td align="center">
			<h3>Configuraci&oacute;n exclusiva para el template <u>AZUL</u></h3>
			<input type=button id='map' value='<?PHP echo $mapa;	?>'
			onclick="window.open('TPLchangeSettings.php?map=change','TPLsettings');this.disabled='disabled';this.value='Cambiando...';">
			<br>
			<br>
			<input type=button id='relLinks' value='<?PHP echo $relLinks;	?>'
			onclick="window.open('TPLchangeSettings.php?relLinks=change','TPLsettings');this.disabled='disabled';this.value='Cambiando...';">
			<br>
			<br>
			<input type=button id='relF' value='<?PHP echo $relF;	?>'
			onclick="window.open('TPLchangeSettings.php?relF=change','TPLsettings');this.disabled='disabled';this.value='Cambiando...';">

			<br>
			<br>
			<br>
			<input type=button id='Listo' value='Listo' style='font-weight:bold;'
			onclick='checkReload();this.disabled="disabled";this.value="Recargando..."'>
		</td></tr>
	</table>
	<iframe src='about:blank' style='display:none;' name='TPLsettings'></iframe>
</div>
<div style='color:grey;'>
	[&nbsp;<a href='#' onclick='TPLsettingsC();return false;' style="color:grey;"
	title='Configura las opciones de dise&ntilde;o.'>TPL&nbsp;Settings</a>&nbsp;]
</div>

