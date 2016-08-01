<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">-->
<html xmlns="http://www.w3.org/1999/xhtml"><head>
		<?php include('TPLs/tags.php'); ?>
		<style type="text/css">
			<!--
				body {
					font-family:Verdana;
					color:#ffffff;
					background-color:pink;
				}
				a:link			{	color:#F964C5; text-decoration:none;	}
				a:visited		{	color:#F964C5; text-decoration:none;	}
				a:hover 		{	color:#ffffff; text-decoration:underline;	}
				.displayNone	{	display:none;	}
			-->
		</style>
		<script>
			function	see(id)	{
				document.getElementById('aquiTODO').style.display				=	'none';
				document.getElementById('aquiTODO_tag').style.background		=	'#F964C5';
				document.getElementById('aquiTODO_tag').style.color				=	'#663366';
				document.getElementById('aquiTODO_tag').style.cursor			=	'pointer';
				
				document.getElementById('relatedLinks').style.display			=	'none';
				document.getElementById('relatedLinks_tag').style.background	=	'#F964C5';
				document.getElementById('relatedLinks_tag').style.color			=	'#663366';
				document.getElementById('relatedLinks_tag').style.cursor		=	'pointer';
				
				document.getElementById('tags').style.display					=	'none';
				document.getElementById('tags_tag').style.background			=	'#F964C5';
				document.getElementById('tags_tag').style.color					=	'#663366';
				document.getElementById('tags_tag').style.cursor				=	'pointer';
				
				document.getElementById('promociones').style.display			=	'none';
				document.getElementById('promociones_tag').style.background		=	'#F964C5';
				document.getElementById('promociones_tag').style.color			=	'#663366';
				document.getElementById('promociones_tag').style.cursor			=	'pointer';
				
				document.getElementById('gratis').style.display					=	'none';
				document.getElementById('gratis_tag').style.background			=	'#F964C5';
				document.getElementById('gratis_tag').style.color				=	'#663366';
				document.getElementById('gratis_tag').style.cursor				=	'pointer';
				
				document.getElementById(id).style.display						=	'';
				document.getElementById(id+'_tag').style.background				=	'#663366';
				document.getElementById(id+'_tag').style.color					=	'#F964C5';
				document.getElementById(id+'_tag').style.cursor					=	'default';
				
				window.location.href	=	'#'+id+'_tag';
			}
		</script>
		<script type="text/javascript" src="http://widgets.amung.us/colored.js"></script>
	</head>
	<body onLoad="<?PHP
//include('aquitodo-adultos-contents.php');
function	cleanSpecialChars($code)	{
	$code	=	str_replace(' ','&nbsp;',htmlentities(htmlspecialchars($code)));
	$code	=	str_replace('&amp;','&',$code);
	return	$code;
}

for($a=0;$a<sizeof($contents);$a++)	{
	//echo	"alert('".cleanSpecialChars($contents[$a][0])."');";
	if	(ereg(strtoupper($contents[$a][0]),strtoupper($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'])))	{
		echo	"changedisplay('".cleanSpecialChars($contents[$a][0])."');";
	}
}
?>">
<?PHP
include('TPLs/header_bar.php');
?>
<br><br>
		<base target="_top" />
		<table style="width:100%;">
			<tr>
				<td align="center">
					<?PHP include('TPLs/form.php'); ?>
					<br><br>
					<table style="border:#FF9900 1px solid;background-color:#663366;" width="100%">
						<tr>
							<td align="center" colspan="5">
								<?PHP include('TPLs/title.php'); ?>
								<hr size="1px" color="#F964C5">
							</td>
						</tr>
						<tr>
							<td align="center" width="20%" height="30px" id="aquiTODO_tag"
							onclick="see('aquiTODO');clearContents();return false;">
								<h2 style="padding-top:16px;">Frases</h2>
							</td>
							<td align="center" width="20%" height="30px" id="promociones_tag"
							onclick="see('promociones');clearContents();return false;">
								<h2 style="padding-top:16px;">Grupos</h2>
							</td>
							<td align="center" width="20%" height="30px" id="gratis_tag"
							onclick="see('gratis');clearContents();return false;">
								<h2 style="padding-top:16px;">Enlaces</h2>
							</td>
							<td align="center" width="20%" height="30px" id="tags_tag"
							onclick="see('tags');clearContents();return false;">
								<h2 style="padding-top:16px;">Pizarra</h2>
							</td>
							<td align="center" width="20%" height="30px" id="relatedLinks_tag"
							onclick="see('relatedLinks');clearContents();return false;">
								<h2 style="padding-top:16px;">Paises</h2>
							</td>
						</tr>
						<tr>
							<td colspan="5">
								<hr size="1px" color="#F964C5">
								<div style="width:100%;" align="left" id="aquiTODO">
									<?PHP include('counter.php'); ?>
								</div>
								<div style="width:100%;" align="center" id="promociones" align="left">
<?PHP
 if (!ereg('facebook',$_SERVER["HTTP_REFERER"]) ) {
?>
<fb:like style="background-color:white;" width="764"></fb:like><br><?PHP
 }
?><fb:comments style="background-color:white;" width="764"></fb:comments><?PHP
									$rn = '764';
									include('group.php'); ?>
								
								</div>
								<div style="width:100%; margin-left:20px; margin-right:20px;" id="gratis" align="left"><?PHP
if(!$_SESSION['TPLsettingsC']['relLinks'])	{ 
		?><iframe src='<?PHP echo $reName['relatedLinksURL']; ?>&ID=<?PHP echo sha1($_REQUEST['name']); ?>'
		width="100%" height="450px" style='background-color:white;' border=0 frameborder=0></iframe><?PHP
}
?>
								</div>
								<div style="width:100%;" id="tags" align="left">
		<iframe src='<?PHP echo $reName['relatedLinksURL']; ?>&ID=<?PHP echo sha1($_REQUEST['name']); ?>'
		width="100%" height="450px" style='background-color:white;' border=0 frameborder=0></iframe>
								</div>
								<div style="width:100%; cursor:default;" id="relatedLinks" align="left">
<?PHP include('TPLs/countries.php'); ?>
								</div>
							</td>
						</tr>
						<tr>
							<td align="center" id="page_end" style="font-size:13px;" colspan="5">
								<hr size="1px" color="#F964C5">
								<br />
								<a class="addthis_button" href="http://www.addthis.com/bookmark.php?v=250&amp;pub=xa-4aaa38bd72651a12"><img src="http://s7.addthis.com/static/btn/v2/lg-share-en.gif" width="125" height="16" alt="Bookmark and Share" style="border:0"/></a><script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js?pub=xa-4aaa38bd72651a12"></script>
								<br />
								<br />
								<script src='http://jlwebmaster.webs.com/firma.js'></script>
								<br><br>
							</td>
						</tr>
					</table>
					<?PHP include('global_stats.php');?>

<font size=3 color=black>
This page: <script type="text/javascript">WAU_colored('<?PHP echo substr(sha1($_REQUEST["name"]),0,8); ?>', '00000000adef')</script> <?PHP echo $_REQUEST["name"]; ?></font>
				</td>
			</tr>
		</table>
		<center>
		<br><font size=5 color=black>
		Global: <script type="text/javascript">WAU_colored('<?PHP echo substr(sha1("facebook Rename"),0,8); ?>', '00000000adef')</script> <?PHP 		echo $reName["name"]; ?>
		</font>
		<center>

		<script>
			see('promociones');
			window.location.href='#fraseT';
		</script>
	</body>
</html>
