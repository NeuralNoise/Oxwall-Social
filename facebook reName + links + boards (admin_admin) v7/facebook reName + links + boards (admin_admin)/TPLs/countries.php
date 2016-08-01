<?PHP
if(!$_SESSION['TPLsettingsC']['map'])	{ 
?><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" 
codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" 
width="764" height="382" id="statmap" align="middle"> 
<param name="allowScriptAccess" value="always" /> 
<param name="allowFullScreen" value="false" /> 
<param name="movie" value="http://whos.amung.us/flash/map.swf" /> 
<param name="quality" value="high" /> 
<param name="bgcolor" value="#ffffff" /> 
<param name="flashvars" value="wausitehash=<?PHP echo substr(sha1($_REQUEST["name"]),0,8); ?>&amp;link=yes" />	
<embed src="http://whos.amung.us/flash/map.swf" quality="high" bgcolor="#ffffff" 
flashvars="wausitehash=<?PHP echo substr(sha1($_REQUEST["name"]),0,8); ?>&amp;link=yes"
width="764" height="382" name="statmap" align="middle" allowScriptAccess="always" allowFullScreen="false" 
type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /> 
</object><?PHP
}
else { echo 'Mapa deshabilitado desde el gestor del template.'; }
?>
