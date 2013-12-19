<?php
echo '<?xml version="1.0" encoding="UTF-8"?>';

?>
<!DOCTYPE html>
<html>
    <head>
<title>HeMoroiDs - Preparation H is good for you</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="generator" content="NETBEANS 7.0.1"/>
<meta name="author" content=""/>
<meta name="date" content=""/>
<meta name="copyright" content=""/>
<meta name="keywords" content=""/>
<meta name="description" content="HEMOROIDS - OFFICIAL WEBSITE !"/>
<link rel="icon" type="image/x-icon" href="favicon.ico"/>
<link href="CSS/style1.css" type="text/css" rel="stylesheet" />
<meta name="google-site-verification" content="5bNUPwSFf9aIh6z75wgixfqZTEKGUKaF77qj1-10yG0" />
</head>
<body>
<?php
$array_mods=array("dfd1.mp3","dfddd1.mp3","hmd1.mp3","hmd3.mp3");
$array_credz=array("AJT","DOCKERS","SAM","SAM","GRYZOR");
$random=rand(0,3);
$mod='mp3/'.$array_mods[$random];
$cred='::Music by '.$array_credz[$random].'::&nbsp;&nbsp;&nbsp;';
?>
<audio src="<?php echo $mod; ?>" type="audio/mp3" autoplay="autoplay" loop="loop">Musique is off coz of your browser</audio>
<div class="haut"><img src="GFX/haut.gif"></div>
<div class="cred" align="right"><?php echo($cred); ?></div>
<div class="espace"></div>
<div class="line"></div>
<div class="midle">
<div id="fond" class="fond" align="center">
<a href="history"><img src="logos/logointro.png" img border="0"></a>
</div>
</div>
<div class="line"></div>
<div class="espace"></div>
<div class="espace"></div>
<div class="bas"><img src="GFX/bas.gif"></div>
    </body>
    </html>