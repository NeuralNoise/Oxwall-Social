<?PHP
if ($_REQUEST['ID']) {
	if ($_REQUEST['Submit'] == 'Add link') {
		if (!$_REQUEST['name'] || !$_REQUEST['url']) {
			echo '<script>alert("Write name an url of link.");</script>';
			exit();
		}
		$filename 	=	$_REQUEST['ID'].'.txt';
		if (file_exists($filename)) {
			$gestor 	=	fopen($filename, "a+");	
			$Contents = '
'.$_REQUEST['name'].'
'.$_REQUEST['url'];
		}
		else {
			$gestor 	=	fopen($filename, "w");
			$Contents = '[bgColor]
[linkColor]
'.$_REQUEST['name'].'
'.$_REQUEST['url'];
		}
		if (!fwrite($gestor,$Contents))
		{
			echo 'fwrite error';
		}
		fclose($gestor);
		header('Location: frameAjax.php?ID='.$_REQUEST['ID']);
		exit();
	}
?>
No request Submit
<?PHP
	exit();
}
?>
No request ID