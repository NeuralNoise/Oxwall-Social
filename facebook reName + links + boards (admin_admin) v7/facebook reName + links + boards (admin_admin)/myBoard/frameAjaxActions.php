<script type="text/javascript" language="javascript">
	/*alert('DEBUG: frameActions LOADED.');*/
<?PHP
$filename 	=	$_REQUEST['ID'].'.txt';
//if ($_REQUEST['action'] == 'editBoard')	{
//	$gestor 	=	fopen($filename, "wr");
//}
//else  {
	$gestor 	=	fopen($filename, "w");
//}

fwrite($gestor,str_replace('

','\n\n',$_REQUEST['textarea']));
	/*print_r($contenido);*/

?>
	/*alert('DEBUG: action editBoard.');*/
	window.location.href="frameAjax.php?ID=<?PHP	echo $_REQUEST['ID'];	?>";
<?PHP
	fclose($gestor);
?>
</script>