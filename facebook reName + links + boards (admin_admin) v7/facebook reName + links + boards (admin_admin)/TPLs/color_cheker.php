<script>
function changeColors() {
	//document.getElementById('divColors').innerHTML = 'Changing template...';
	document.body.innerHTML = document.getElementById('divTableColors').innerHTML;
}
</script>




<div style='display:none;' id='divTableColors' name='divTableColors'>
<script>
function changeColorDTC() {
	//alert('Changing template... PLEASE WAIT');
}
</script>
<table style='background-color:white;border:solid 1px grey;width:100%;height:100%;' cellpadding=2>

	<!--BLUE-->
	<tr><td style='background-color:blue;background-image:url(images/bg.jpg);cursor:pointer;'
	onclick="window.open('colors.php?TPL=blue&name=<?PHP echo $_REQUEST['name']; ?>','colors');changeColorDTC();">
		<center><a href='colors.php?TPL=blue&name=<?PHP echo $_REQUEST['name']; ?>' target='colors' style='color:white;'>Blue</a></center>
	</td></tr>

	<!--PINK-->
	<tr><td style='background-color:pink;cursor:pointer;'
	onclick="window.open('colors.php?TPL=pink&name=<?PHP echo $_REQUEST['name']; ?>','colors');changeColorDTC();">
		<center><a href='colors.php?TPL=pink&name=<?PHP echo $_REQUEST['name']; ?>' target='colors' style='color:purple;'>Pink</a></center>
	</td></tr>

	<!--BLACK-->
	<tr><td style='background-color:black;cursor:pointer;'
	onclick="window.open('colors.php?TPL=black&name=<?PHP echo $_REQUEST['name']; ?>','colors');changeColorDTC();">
		<center><a href='colors.php?TPL=black&name=<?PHP echo $_REQUEST['name']; ?>' target='colors' style='color:white;'>Black</a></center>
	</td></tr>

	<!--WHITE-->
	<tr><td style='background-color:white;cursor:pointer;border:solid 1px grey;'
	onclick="window.open('colors.php?TPL=white&name=<?PHP echo $_REQUEST['name']; ?>','colors');changeColorDTC();">
		<center><a href='colors.php?TPL=white&name=<?PHP echo $_REQUEST['name']; ?>' target='colors' style='color:black;'>White</a></center>
	</td></tr>

	<!--like-->
	<tr><td style='background-color:white;cursor:pointer;border:solid 1px grey;'
	onclick="window.open('colors.php?TPL=like&name=<?PHP echo $_REQUEST['name']; ?>','colors');changeColorDTC();">
		<center><a href='colors.php?TPL=like&name=<?PHP echo $_REQUEST['name']; ?>' target='colors' style='color:black;'>Only Like Button</a></center>
	</td></tr>


</table>
<iframe src='about:blank' style='display:none;' id='colors' name='colors'></iframe>
</div>


<div id='divColors' style='color:grey;'>
	[&nbsp;<a href='colors.php' target='colors' onclick='changeColors();return false;' style="color:grey;"
	title='Al cambiar el template siempre que accedas aqui lo veras todo en funcion de la plantilla escogida.'>Change&nbsp;TPL</a>&nbsp;]
</div>

