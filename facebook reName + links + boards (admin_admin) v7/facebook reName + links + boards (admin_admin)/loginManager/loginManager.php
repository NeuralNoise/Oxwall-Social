<?PHP
session_start();

if (file_exists('loginManager/loginManager.php')) $baseurl = 'loginManager/';
else	$baseurl = '';

if ($_SESSION['log']) {

	if ($_SERVER['HTTP_HOST'] == 'localhost') {
?>
    <a href='<?PHP echo $baseurl; ?>debug.html' target="loginManager"><img
    src="<?PHP echo $baseurl; ?>openterm.png" border="0" onMouseOver="return escape('Debug process');"></a>
<?PHP } ?>
    <a href='<?PHP echo $baseurl; ?>formRegister.php' target="loginManager"><img src="<?PHP echo $baseurl; ?>amsn.png"
    border="0" onMouseOver="return escape('Add users');"></a>
    <a href='<?PHP echo $baseurl; ?>formLogin.html' target="loginManager"><img src="<?PHP echo $baseurl; ?>encrypted.png"
    border="0" onMouseOver="return escape('Login');"></a>
    <a href='<?PHP echo $baseurl; ?>logOff.php' target="loginManager"><img src="<?PHP echo $baseurl; ?>exit.png"
    border="0" onMouseOver="return escape('Log off');"></a>
<?PHP
}
else {
?>
    <a href='<?PHP echo $baseurl; ?>formLogin.html' target="loginManager"><img
     src="<?PHP echo $baseurl; ?>configure.png" border="0" onMouseOver="return escape('loginManager');"></a>
<?PHP
}
?>
<iframe id="loginManager" name="loginManager" style="display:none;" src="about:blank"></iframe>
<script>
	function leerCookie(nombre) {
	   a = document.cookie.substring(document.cookie.indexOf(nombre + '=') + nombre.length + 1,document.cookie.length);
	   if(a.indexOf(';') != -1)a = a.substring(0,a.indexOf(';'))
	   return a; 
	}
	
	//alert(leerCookie('display'));
	if ('table' == leerCookie('display')) {
		document.getElementById('loginManager').style.display = '';
	}
	else {
		document.getElementById('loginManager').style.display	=	'none';
	}
</script>