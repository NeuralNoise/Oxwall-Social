<?PHP if(!$_REQUEST['name']) { $_REQUEST['name'] = 'facebook reName'; } ?>


<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">-->
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php include('TPLs/tags.php'); ?>
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

<div id="fb-root"></div> 
<script> 
  window.fbAsyncInit = function() {
    FB.init({appId: 'your app id', status: true, cookie: true,
             xfbml: true});
  };
  (function() {
    var e = document.createElement('script'); e.async = true;
    e.src = document.location.protocol +
      '//connect.facebook.net/en_US/all.js';
    document.getElementById('fb-root').appendChild(e);
  }());
</script> 
 
<fb:comments xid="127420047285360" width="700"></fb:comments>

<?PHP include('color_cheker.php'); ?>
    </body>
</html>
