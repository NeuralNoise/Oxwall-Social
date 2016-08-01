<?PHP
session_start();

if ($_SESSION['log']) {
?>
<iframe id=frases name=frases frameborder=0 width=100% height=60% src='./?'></iframe>
<table style="width:100%;background-color:#c0c0c0;border:solid 1px #ffffff;" border=1>
	<tr>
		<td align="center" style="width:33%;cursor:pointer;" width="33%"
		onclick="window.parent.location.href='admin.php';">
			Admin
		</td>
		<td align="center" style="width:33%;cursor:pointer;" width="33%"
		onclick="window.parent.location.href='stats.php';">
			Stats
		</td>
		<td align="center" style="width:33%;cursor:pointer;" width="33%"
		onclick="window.parent.location.href='zip.php';">
			ZIP
		</td>
	</tr>
</table>
<?PHP
}
?>
