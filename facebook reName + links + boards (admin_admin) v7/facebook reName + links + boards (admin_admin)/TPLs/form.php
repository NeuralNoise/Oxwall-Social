<script>
function multSearch() {
 if (document.getElementById('name').value) {
  var name = document.getElementById('name').value;
 }
 else {
  var name = '<?PHP echo $_REQUEST["name"]; ?>';
 }
 window.parent.location.href = "<?PHP echo $reName['multySearchURL']; ?>&Search=Websites&Query="+name;
}
</script>
<script>
function revisa() {
 var val = document.getElementById('name').value;
 if (val == 'Inserte la frase a construir' || val == '<?PHP echo $_REQUEST["name"]; ?>') {
  document.getElementById('name').style.color	= '#000000';
  document.getElementById('name').value		= '';
 }
}
function completa() {
 if (!document.getElementById('name').value) {
  document.getElementById('name').style.color	= '#c0c0c0';
  document.getElementById('name').value		= 'Inserte la frase a construir';
 }
}
function validaForm() {
 if (!document.getElementById('name').value) { document.getElementById('name').value = 'Inserte la frase a construir'; }
 if (document.getElementById('name').value == 'Inserte la frase a construir') {
	document.getElementById('name').style.color	= '#ff0000';
	return false;
 }
 else {
	document.getElementById('make').value		=	'Making...';
	document.getElementById('make').disabled	=	'disabled';
 }
}
function demoFrase() {
	document.getElementById('name').value 		=	'INSERTE AQUI SU TEXTO';
	document.getElementById('name').style.color	= 	'#ff0000';

	document.getElementById('make').value		=	'CLICK HERE';

	//document.getElementById('demo').value		=	'Loading...';
	document.getElementById('demo').disabled	=	'disabled';

	//document.getElementById('fraseForm').submit();


}
</script>
<fieldset style="background-color:white;width:800px;">

<legend><a href="<?PHP echo $reName['homeURL']; ?>" target="_top"
style="font-weight:bold;font-size:2em;padding:3;color:grey;background-color:white;border:solid 1px grey;">.: <?PHP echo $reName['name']; ?> :.</a></legend>

<?PHP include('facebook/global_source.php'); ?>

<form method="_post" onsubmit='return validaForm();' id='fraseForm'><br><br><input type=text id=name name=name style="width:400px;" onclick='revisa();' onmouseout='completa();'><input type=submit value=MAKE id='make'><input type=button value=Demo id='demo' onclick='demoFrase();'><input type=button value='multySearcher' onclick='multSearch();'></form>

<script>
	if(!document.getElementById('name').value) {
<?PHP
if($_REQUEST['name'] == $reName['name']) {	
?>
		document.getElementById('name').value		=	"Inserte la frase a construir";
<?PHP
}else{
?>
		document.getElementById('name').value		=	"<?PHP echo $_REQUEST["name"]; ?>";
<?PHP
}
?>
		
		document.getElementById('name').style.color	=	"#c0c0c0";
	}
</script>

<table width="100%" style="font-size:11px;"><tr>
<td align='left'>
<div id='infoDiv' style="color:black;">Genera y comparte enlaces en facebook!! Crea una pagina a partir de una frase, una palabra o una letra y compartela de inmediato con tus amigos y con el resto del mundo. Las paginas se dan de alta con frecuencia en Google por lo que se atraen usuarios de otras redes ;)</div>


<script>
	document.getElementById('infoDiv').style.display = 'none';
	function explica() {
		document.getElementById('wht').style.display = 'none';
		document.getElementById('infoDiv').style.display = '';
	}
</script>

	<font style="font-size:10px;color:grey;cursor:help;"
	onclick='explica();' id='wht'>Que es esto?</font>
</td>
<td align='right'>
	<div float="right" style='float:right;'>
		<?PHP include('TPLs/color_cheker.php'); ?>
	</div>
	<div float="right" style='float:right;'>
		<?PHP include('TPL_settings.php'); ?>
	</div>
</td>
</tr></table>
</fieldset>
