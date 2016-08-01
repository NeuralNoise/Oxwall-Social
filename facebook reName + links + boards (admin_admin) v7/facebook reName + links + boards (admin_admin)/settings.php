<?PHP
if ($_SERVER['HTTP_HOST'] == 'localhost')	{ $reName['homeURL']		=	'/reName/'; }
else						{ $reName['homeURL']		=	'/'; }

//$reName['root']			=	'/reName/';
$reName['Version']		=	'7';
$reName['root']			=	'/';
$reName['name']			=	'facebook reName';
$reName['xid']			=	'127420047285360';//Home facebook group / URL
$reName['multySearchURL']	=	'http://publitodo.webcindario.com/multySearch/?';
$reName['relatedLinksURL']	=	'myLinks/?';
$reName['myBoardURL']		=	'myBoard/?';
$reName['relateds']		=	array('http://www.fb-rename.tk','http://fbfacebook.tk','http://i-like-facebook.tk','http://megustafecebook.tk','http://rename-facebook.tk','http://facebook-rename.tk');


if(!$_REQUEST['name'])	{	$_REQUEST['name'] = $reName['name']; }

function nc($string) { return sha1($string); }
?>
