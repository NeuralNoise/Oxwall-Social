<?PHP
session_start();

if ($_REQUEST['TPL']) {
	$_SESSION['color']	=	$_REQUEST['TPL'];
	header('Location: ?name='.$_REQUEST['name']);
}



include('settings.php');





if ($_SESSION['color']=='black') {
	include('TPLs/black.php');
}
elseif ($_SESSION['color']=='pink') {
	include('TPLs/pink.php');
}
elseif ($_SESSION['color']=='white') {
	include('TPLs/white.php');
}
elseif ($_SESSION['color']=='like') {
	include('TPLs/like.php');
}
else {
	include('TPLs/blue.php');
}

include('TPLs/saver.php');
?>
