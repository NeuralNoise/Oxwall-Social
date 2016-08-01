<?PHP
include_once('settings.php');
if ($_REQUEST['group_id'] && $_REQUEST['nameG']) {
	$filename	=	'frases/grupos/'.nc($_REQUEST['nameG']).'.txt';
	
	if (file_exists($filename)) {
		$gestor 	=	fopen($filename, "a+");
	}
	else {
		$gestor 	=	fopen($filename, "w");
	}


	fwrite($gestor,$_REQUEST['group_id']."\n");
	fclose($gestor);
?>
<script>
	if (window.parent.location != '<?PHP echo $_SERVER['HTTP_REFERRER']; ?>') {
		window.parent.location.reload();
		window.parent.location.href=window.parent.location.href;
		window.parent.document.body.innerHTML = 'Adding Group...';
	}
</script>
<?PHP
}
else {
?>
<script>
	function loadGroup() {
		document.getElementById('addGsubmit').value	= 'Adding...';
		document.getElementById('addGsubmit').disabled	= 'disabled';
	}
function revisa() {
 var val = document.getElementById('group_id').value;
 if (val == 'facebook id or site url') {
  document.getElementById('group_id').style.color	= '#000000';
  document.getElementById('group_id').value		= '';
 }
}
</script>
<div id='falseGroup'>
	<form action='addgroup.php' target='newGroup' onsubmit='loadGroup();'>
		<input type='hidden' id='nameG' name='nameG' value="<?PHP echo $_REQUEST['name']; ?>">
		<input type='text' id='group_id' name='group_id' value="facebook id or site url" onclick='revisa();'>
		<input type='submit' value="Add group / URL" id='addGsubmit' >
	</form>
</div>
<iframe style="display:none;" name='newGroup'></iframe>
<?PHP
}
?>
