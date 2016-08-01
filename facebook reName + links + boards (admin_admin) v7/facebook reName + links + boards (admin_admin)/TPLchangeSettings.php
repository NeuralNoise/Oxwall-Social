<?PHP
session_start();
$_SESSION['color'] = 'blue';
?>
<script>
	window.parent.document.getElementById('Listo').disabled = 'disabled';
</script>

<?PHP
flush();
ob_flush();
?>
<script>

<?PHP
if ($_REQUEST['map']) {
?>
	window.parent.document.getElementById('map').disabled = 'disabled';
<?PHP
	if(!$_SESSION['TPLsettingsC']['map']) {
		$_SESSION['TPLsettingsC']['map'] = 'off';
?>
	window.parent.document.getElementById('map').value = 'Mostrar mapa';
	window.parent.document.getElementById('map').disabled = '';
<?PHP
	}
	else
	{
		unset($_SESSION['TPLsettingsC']['map']);
?>
	window.parent.document.getElementById('map').value = 'No mostrar mapa';
	window.parent.document.getElementById('map').disabled = '';

<?PHP
	}
}
?>

<?PHP
if ($_REQUEST['relLinks']) {
?>
	window.parent.document.getElementById('relLinks').disabled = 'disabled';
<?PHP
	if(!$_SESSION['TPLsettingsC']['relLinks']) {
		$_SESSION['TPLsettingsC']['relLinks'] = 'off';
?>
	window.parent.document.getElementById('relLinks').value = 'Mostrar enlaces relacionados';
	window.parent.document.getElementById('relLinks').disabled = '';
<?PHP
	}
	else
	{
		unset($_SESSION['TPLsettingsC']['relLinks']);
?>
	window.parent.document.getElementById('relLinks').value = 'No mostrar enlaces relacionados';
	window.parent.document.getElementById('relLinks').disabled = '';

<?PHP
	}
}
?>
<?PHP
if ($_REQUEST['relF']) {
?>
	window.parent.document.getElementById('relF').disabled = 'disabled';
<?PHP
	if(!$_SESSION['TPLsettingsC']['relF']) {
		$_SESSION['TPLsettingsC']['relF'] = 'off';
?>
	window.parent.document.getElementById('relF').value = 'Mostrar otras frases';
	window.parent.document.getElementById('relF').disabled = '';
<?PHP
	}
	else
	{
		unset($_SESSION['TPLsettingsC']['relF']);
?>
	window.parent.document.getElementById('relF').value = 'No mostrar otras frases';
	window.parent.document.getElementById('relF').disabled = '';

<?PHP
	}
}
?>


</script>




<script>
	window.parent.document.getElementById('Listo').disabled = '';
</script>
