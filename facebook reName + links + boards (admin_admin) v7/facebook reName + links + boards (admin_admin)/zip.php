<?PHP
session_start();

if (!$_SESSION['log']) { 
include('loginManager/loginManager.php');

?>
<div id='showContents'></div>
<?PHP
	exit();
}
if ($_REQUEST['delete']) {
	print_r(unlink($_SESSION['Zbackup']));
?>
<br/>
<a href="<?PHP echo $_SESSION['Zbackup']; ?>">ARCHIVO ZIP ELIMINADO (Comprobar)</a>
<?PHP
	exit();
}


date_default_timezone_set('Europe/Madrid');
//include('zip.lib.php');
//include('pclzip.lib.php');


$directory = './';
// the name of your zip archive to be created
$zipfile = 'reName_'.date('dmy').'_rnd'.rand(9,99999).'.zip';



// DO NOT TOUCH BELOW IF YOU DONT KNOW WHAT IT IS
// all the process below
$filenames = array();

// function that browse the directory and all subdirectories inside

function browse($dir) {
global $filenames;
    if ($handle = opendir($dir)) {
        while (false !== ($file = readdir($handle))) {
            if ($file != "." && $file != ".." && is_file($dir.'/'.$file)) {
                $filenames[] = $dir.'/'.$file;
            }
            else if ($file != "." && $file != ".." && is_dir($dir.'/'.$file)) {
                browse($dir.'/'.$file);
            }
        }
        closedir($handle);
    }
    return $filenames;
}

browse($directory);

// creating zip archive, adding browsed files

$zip = new ZipArchive();

if ($zip->open($zipfile, ZIPARCHIVE::CREATE)!==TRUE) {
    exit("cannot open <$zipfile>\n");
}

foreach ($filenames as $filename) {
    echo "Adding " . $filename . "<br/>";
    $zip->addFile($filename,$filename);
}

echo "numfiles: " . $zip->numFiles . "\n";
echo "status:" . $zip->status . "\n";
$zip->close();


$_SESSION['Zbackup'] = $zipfile;
?>

<br/>
<a href='<?PHP echo $zipfile; ?>' target='blank'>ARCHIVO ZIP CREADO</a>&nbsp;<a href='?delete=last' target='blank'>Borrar</a>
<br/>
