<?PHP
session_start();

if($_SESSION['log']) {
$tmpCode = '
<script type="text/javascript">
	window.parent.location.href=window.parent.location.href;
</script>
';
}
else	{
$tmpCode = "
<script>
	window.location.href='formLogin.html';
</script>
";
}

echo $tmpCode
?>