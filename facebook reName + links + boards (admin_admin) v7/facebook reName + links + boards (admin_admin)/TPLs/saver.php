<br><br><?PHP
if ($_REQUEST['name'] != $reName['name']) {

	$filename 	=	'frases/'.nc($_REQUEST['name']).'.txt';
	if (file_exists($filename)) {

		$ultima_modificacion = filemtime($filename);
		$ultima_modificacion = date("j/m/y h:i", $ultima_modificacion);
		echo 'Frase creada: '.$ultima_modificacion;
	}
	else {
	
		$gestor 	=	fopen($filename, "w");
		
		echo '<!--';
		ob_start();

		print_r($GLOBALS);
		fwrite($gestor,ob_get_contents());

		ob_end_flush();
		echo 'File saved-->';

		fclose($gestor);


		$filename 	=	'frases/frases.txt';
		//echo filesize($filename);
		if (filesize($filename)	>	3000)	{
 			$abre = fopen($filename, "r");
			$source = fread($abre, filesize($filename));
			fclose($abre);
//Esta línea esta correcta (Captura los saltos de línea) NO MODIFICAR
			$contents = explode("
",$source);
			$a = 0;
			while (sizeof($contents) > $a) {
				$archivo = 'frases/'.nc($contents[$a]).'.txt';
				if (file_exists($archivo)) { unlink($archivo); }
				$a++;
			}
			unlink($filename);
		}
		else	{
			$gestor 	=	fopen($filename, "a+");
			fwrite($gestor,$_REQUEST['name']."\n");
			fclose($gestor);
		}
		echo 'Frase creada: Hace unos segundos...';
	}
}
?>
