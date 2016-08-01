<?PHP
	session_start();
	unset($_SESSION['log']);
	unset($_SESSION);
	session_destroy();
	/*header('Location: check.php');*/
?>
<script>
	window.parent.location.href	=	'../';
</script>