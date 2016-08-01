<script type="text/javascript" language="javascript">
	/*alert('ola');*/
	var source
<?PHP
if ($_REQUEST['action']	==	'addlink') {
?>
	source	= '<form target="frameAjax" action="frameAjaxActions.php?action=addlink">';
	source	+= 'Name: <input type="text" name="name">';
	source	+= '<br>';
	source	+= 'URL: <input type="text" name="url">';
	source	+= '<br>';
	source	+= '<input type="submit" name="Submit" value="Add link"><input type="hidden" name="ID" value="<?PHP echo $_REQUEST['ID'];	?>">';
	source	+= '</form>';
<?PHP
}
?><?PHP
if ($_REQUEST['action']	==	'editlink') {
?>
	/*alert('Editing link...');*/
	source	= '<form target="frameAjax" action="frameAjaxActions.php?">';
	source	+= 'Name: <input type="text" name="name">';
	source	+= '<br>';
	source	+= 'URL: <input type="text" name="url">';
	source	+= '<br>';
	source	+= '<input type="submit" value="Edit link">';
	source	+= '</form>';
<?PHP
}
?>
	if (source) {
		window.parent.document.getElementById('myLinks').innerHTML = source;
	}
</script>