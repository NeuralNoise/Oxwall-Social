<?PHP
session_start();

if ($_REQUEST['TPL']) {
	$_SESSION['color'] = $_REQUEST['TPL'];
}
/*
else{
	if (!$_SESSION['color']) {
		$_SESSION['color'] = 'black';
	}
	else {
		if($_SESSION['color'] == 'black') {
			$_SESSION['color'] = 'white';
		}
		else {
			unset($_SESSION['color']);
		}
	}
}
*/
?>
<script>
	//alert('changing colors...');
	if (window.parent.location != '<?PHP echo $_SERVER['HTTP_REFERRER']; ?>') {
		//window.parent.location.reload();
		//window.parent.location.href=window.parent.location.href;
		window.parent.location.href		=	"<?PHP echo $reName['homeURL'];	?>?name=<?PHP echo $_REQUEST['name']; ?>";
		window.parent.document.body.innerHTML	=	'Changing template...';
	}
</script>
