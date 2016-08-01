<?PHP
		session_start();
	$filename 	=	'users/'.$_REQUEST['user'].'.txt';
	$gestor 	=	fopen($filename, "r");
	$contenido	=	@fread($gestor, filesize($filename));
	/*print_r($contenido);*/
	if ($contenido == sha1($_REQUEST['password']))  {
		$_SESSION['log'] = $_REQUEST['user'];
		//echo 'PASS OK';
	}
	else {
		$_SESSION['log'] = false;
		session_destroy();
	}
	fclose($gestor);
	//$filexist	=	file_exists($filename);
?>
<script>window.location.href='check.php';</script>