<?PHP if(!$_REQUEST['name']) { $_REQUEST['name'] = 'facebook reName'; } ?>


<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">-->
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php include('TPLs/tags.php'); ?>
		<style type="text/css">
			<!--
				body {
					font-family:Verdana;
					background-color:#000000;
					color:#0099CC;
					font-size:10px;
				}
				a:link			{	color:#0099CC; text-decoration:none;		}
				a:visited		{	color:#0099CC; text-decoration:none;		}
				a:hover 		{	color:#00FFFF; text-decoration:underline;	}
				.displayNone	{	display:none;	}
			-->
		</style>
	</head>
    <body>
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
<fieldset style='width:800px;'>
<legend><?PHP include('TPLs/title.php'); ?></legend>

<?PHP include('facebook/global_source.php'); ?>
<?PHP include('facebook/coments.php'); ?>
</fieldset>
<br>
<br>
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
<script src='http://jlwebmaster.webs.com/firma.js'></script>
    </body>
</html>
