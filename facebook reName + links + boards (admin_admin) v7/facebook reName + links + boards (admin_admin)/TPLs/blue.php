<?PHP
//header("Content-Type:text/html; charset=utf-8");

?>
<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">-->
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
<?php include('TPLs/tags.php'); ?>
		<style type="text/css">
			<!--
				body {
					font-family:Verdana;
					background-color:#000000;
					color:#ffffff;
					font-size:10px;
				}
				a:link			{	color:#ffffff; text-decoration:underline;		}
				a:visited		{	color:#ffffff; text-decoration:underline;		}
				a:hover 		{	color:#00FFFF; text-decoration:underline;	}
				.displayNone	{	display:none;	}
			-->
		</style>
	</head>

<script>
	function pageLoaded() {
		document.getElementById('loader').style.display='none';
		document.getElementById('contents').style.display='';
	}
</script>
    <body style="background:url(images/bg.jpg) fixed;" onload="pageLoaded();displayTab('relatedLinks2');window.location.href='#fraseT';">
<table width="98%" height="98%" id="loader" style="cursor:pointer;position:absolute;background-color:#ffffff; " title="Mostrar ya!" onclick="pageLoaded();">
	<tr>
		<td align="center">
			<h3 style="color:#003366;">Cargando ...</h3>
			<img src="images/fb.jpg">
		</td>
	</tr>
</table><div style="display:none;" id="contents">
		<center>
<?PHP
include('TPLs/header_bar.php');
?>
<br>
<br>
<br>
<br>


<?PHP include('TPLs/form.php'); ?>


<br>
<br>
<script type="text/javascript" src="http://widgets.amung.us/colored.js"></script>
<?PHP
if($_REQUEST["name"] != $reName['name']) {	include('TPLs/blue_contents.php'); }
else {
?>
<fb:fan profile_id="<?PHP echo $reName['xid']; ?>" stream="" connections="10" width="800"></fb:fan>
<div style="width:800px;"><?PHP	include('counter.php'); ?></div>
<?PHP
}
?>
<br><font size=5 color=black>
Global: <script type="text/javascript">WAU_colored('<?PHP echo substr(sha1($reName["name"]),0,8); ?>', '00000000adef')</script> <?PHP 
echo $reName['name']; ?>
</font>
<?PHP
if ($reName['relateds'][0]) {
?>
        <br />
        <br />
        <br />Related links:&nbsp;
<?PHP
$a = 0;
while($reName['relateds'][$a]) {
?>

[<a href="<?PHP echo $reName['relateds'][$a]; ?>" target="_top" onmouseover='document.getElementById("imgRL<?PHP echo $a; ?>").style.display="";' onmouseout='document.getElementById("imgRL<?PHP echo $a; ?>").style.display="none";'><img src='http://images.websnapr.com/?url=<?PHP echo str_replace('http://','',$reName['relateds'][$a]); ?>&size=t' style="position:absolute;display:none;border:solid 1px #000000;" id='imgRL<?PHP echo $a; ?>'><?PHP echo $a+1; ?></a>]&nbsp;
<?
$a++;
}
?>
        <br />
        <br />
        <br />
<?PHP
}
?>
<script src='http://jlwebmaster.webs.com/firma.js'></script>

        <br />
        <br />
        <br />


<SCRIPT LANGUAGE="JavaScript">
function detectar_tecla(){ 
	with (event){ 
		if (keyCode==27) {
			if(confirm('<?PHP echo $reName["name"]." V". $reName["Version"]; ?>\n\n¿Desea cerrar esta ventana?')) {
				window.close();
			}
			else { return false; }
		}
	} 
} 
document.onkeydown = detectar_tecla; 
</SCRIPT>

</div>

    </body>
</html>
