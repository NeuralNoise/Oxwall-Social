<!--
myBoard by JL
Download: http://wmtools.webs.com/

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
-->
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>myBoard</title>
		<style>
		</style>
		<script>
			function editaLink(id,name,x)	{
				/*alert('debug_bui8');*/
				/*document.getElementById('editlink').style.display	=	'';*/
				/*document.getElementById('delBoard').style.display	=	'';*/
				/*document.getElementById(x).style.background			=	'green';*/
				/*document.getElementById('myLinks').innerHTML		=	'Cargando '+name+'...';*/
				document.getElementById('legend').innerHTML			=	'<a href="index.php?ID='+id+'">myBoard</a>';
				/*window.open('frameAjaxLinks.php?action=editlink&ID='+id+'&name='+name+'&x='+x,'frameAjax');*/
			}
			function propiedades() {
				return escape("Editar | Eliminar"); 
			}
		</script>
	</head>
	<body>
		<fieldset>
			<legend id="legend"><a href="index.php">myBoard</a></legend>
			<div id="myLinksI">Cargando...</div>
		</fieldset>
		<iframe id="frameAjax" name="frameAjax" style="display:none;" src=frameAjax.php?ID=<?PHP	echo $_REQUEST['ID'];	?>></iframe>
	</body>
</html>
