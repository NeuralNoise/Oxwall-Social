<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">-->
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title><?PHP echo $_REQUEST['name']; ?></title>
		<META NAME="TITLE" CONTENT="<?PHP echo $_REQUEST['name']; ?>">
		<meta http-equiv="TITLE" CONTENT="<?PHP echo $_REQUEST['name']; ?>">
		<meta name="DC.title" CONTENT="<?PHP echo $_REQUEST['name']; ?>">
		<META NAME="DESCRIPTION" CONTENT="<?PHP echo $_REQUEST['name']; ?>">
		<meta http-equiv="description" content="<?PHP echo $_REQUEST['name']; ?>">
		<meta http-equiv="DC.Description" content="<?PHP echo $_REQUEST['name']; ?>">
		<META NAME="KEYWORDS" CONTENT="<?PHP echo $_REQUEST['name']; ?>">
		<meta http-equiv="keywords" content="<?PHP echo $_REQUEST['name']; ?>">
		<META NAME="ROBOTS" CONTENT="All">
		<META HTTP-EQUIV="CHARSET" CONTENT="ISO-8859-1">
		<META HTTP-EQUIV="CONTENT-LANGUAGE" CONTENT="ES">
		<meta http-equiv="pragma" content="cache">
		<style type="text/css">
			<!--
				body {
					font-family:Verdana;
					background-color:#ffffff;
					color:#000000;
					font-size:10px;
				}
				.displayNone	{	display:none;	}
			-->
		</style>
	</head>
    <body>
		<center>
<h1><?PHP echo $_REQUEST['name']; ?></h1>


<?PHP include('facebook/global_source.php'); ?>
<fb:like></fb:like>
<br><br>
<?PHP include('color_cheker.php'); ?>
    </body>
</html>
