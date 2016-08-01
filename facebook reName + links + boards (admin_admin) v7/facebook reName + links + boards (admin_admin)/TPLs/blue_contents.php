<fieldset style="background-color:white;width:800px;">
<legend id='fraseT' name="fraseT"><?PHP include('TPLs/title.php'); ?></legend>


<?PHP
 //if ($_REQUEST['sub']) {
 /*if (!ereg('facebook',$_SERVER["HTTP_REFERER"]) ) {
?>
<fb:like style="background-color:white;" width="764"></fb:like>
<br>
<?PHP
 }*/
?>
<table border=0><tr>
<td style='v-align:top;vertical-align:top;'>
	<fb:comments style="background-color:white;" width="625"></fb:comments>
<?PHP include('group.php'); ?>
	<br>
	<br>


<div style="width:625px;"><?PHP	include('counter.php'); ?></div>


</td>
<td style='v-align:top;vertical-align:top;'>

<a class="addthis_button" href="http://www.addthis.com/bookmark.php?v=250&amp;pub=xa-4aaa38bd72651a12"><img src="http://s7.addthis.com/static/btn/v2/lg-share-en.gif" width="125" height="16" alt="Bookmark and Share" style="border:0"/></a><script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js?pub=xa-4aaa38bd72651a12"></script>
<br>
<br>
<font color="#336699">Off topic</font><br>
<script LANGUAGE="JavaScript" src="http://tagboard.miarroba.com/ver.php?id=4"></script>


</td>
</tr>
<tr>
	<td colspan=2>
		<script>
			function	displayTab(id)	{
				document.getElementById('PUBLItodo').style.display			=	'none';
				document.getElementById('PUBLItodo_tag').style.background		=	'#c0c0c0';
				document.getElementById('PUBLItodo_tag').style.color			=	'#000000';
				document.getElementById('PUBLItodo_tag').style.cursor			=	'pointer';
				
				document.getElementById('relatedLinks2').style.display			=	'none';
				document.getElementById('relatedLinks2_tag').style.background		=	'#c0c0c0';
				document.getElementById('relatedLinks2_tag').style.color		=	'#000000';
				document.getElementById('relatedLinks2_tag').style.cursor		=	'pointer';
				
				document.getElementById('tags2').style.display				=	'none';
				document.getElementById('tags2_tag').style.background			=	'#c0c0c0';
				document.getElementById('tags2_tag').style.color			=	'#000000';
				document.getElementById('tags2_tag').style.cursor			=	'pointer';
				
				document.getElementById(id).style.display				=	'';
				document.getElementById(id+'_tag').style.background			=	'#ffffff';
				document.getElementById(id+'_tag').style.color				=	'#000000';
				document.getElementById(id+'_tag').style.cursor				=	'default';
				//document.getElementById(id+'_tag').style.width				=	'33%';
				
				//window.location.href	=	'#'+id+'_tag';
			}
		</script>

					<table style="width:100%;">
						<tr>
							<td align="center" style="width:266px;" width="266px" height="30px" id="relatedLinks2_tag"
							onclick="displayTab('relatedLinks2');return false;">
								Enlaces relacionados
							</td>
							<td align="center" style="width:266px;" width="266px" height="30px" id="tags2_tag"
							onclick="displayTab('tags2');return false;">
								Pizarra
							</td>
							<td align="center" style="width:266px;" width="266px" height="30px" id="PUBLItodo_tag"
							onclick="displayTab('PUBLItodo');return false;">
								Mapa
							</td>
						</tr>
						<tr>
							<td colspan="3" style="color:white;">
								<hr size="1px" color="#c0c0c0">
								<div style="width:100%;" id="relatedLinks2" align="left">

<?PHP

if(!$_SESSION['TPLsettingsC']['relLinks'])	{ 
?>
		<iframe src='<?PHP echo $reName['relatedLinksURL']; ?>&ID=<?PHP echo sha1($_REQUEST['name']); ?>'
		width="100%" height="450px" style='background-color:white;' border=0 frameborder=0></iframe>
<?PHP
}
else { echo 'Enlaces relacionados deshabilitado desde el gestor del template.'; }
?>


								</div>
								<div style="width:100%;" id="tags2" align="left">
		<iframe src='<?PHP echo $reName['myBoardURL']; ?>&ID=<?PHP echo sha1($_REQUEST['name']); ?>'
		width="100%" height="450px" style='background-color:white;' border=0 frameborder=0></iframe>
								</div>
								<div style="width:100%; cursor:default;" id="PUBLItodo" align="left">
									<?PHP include('TPLs/countries.php'); ?>
								</div>
							</td>
						</tr>
					</table>

	</td>
</tr>
</table>
			<br>
			<br>
            



	<script src="http://publitodo.webs.com/pageAdd.js"></script>
        <br />
        <br />
        <br />
        <br />
        <br />

        <br>
        <br>

<?PHP include('global_stats.php');?>

<font size=3 color=black>
This page: <script type="text/javascript">WAU_colored('<?PHP echo substr(nc($_REQUEST["name"]),0,8); ?>', '00000000adef')</script> <?PHP echo $_REQUEST["name"]; ?></font>
</fieldset>
