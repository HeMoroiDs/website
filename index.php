<?php
echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>HeMoroiDs - Preparation H is good for you</title>
        <meta name="description" content="HEMOROIDS - DemoGroup since 1988 on atari, amiga and PC (also on codef)."/>
        <link rel="author" href="https://plus.google.com/u/0/107853956348923004318/posts" />
        <link rel="icon" type="image/x-icon" href="favicon.ico"/>
        <link href="CSS/intro.css" type="text/css" rel="stylesheet" />
        <meta name="google-site-verification" content="5bNUPwSFf9aIh6z75wgixfqZTEKGUKaF77qj1-10yG0" />
    </head>
    <body>
        <?php
        $array_mods = array("dfd1.mp3", "dfddd1.mp3", "hmd1.mp3", "hmd3.mp3");
        $array_credz = array("AJT", "DOCKERS", "SAM", "SAM", "GRYZOR");
        $random = rand(0, 3);
        $mod = 'mp3/' . $array_mods[$random];
        $cred = '::Music by ' . $array_credz[$random] . '::&nbsp;&nbsp;&nbsp;';
        ?>
        <audio src="<?php echo $mod; ?>" type="audio/mp3" autoplay="autoplay" loop="loop">Musique is off coz of your browser</audio>
        <div class="haut"><img src="GFX/haut.gif" class="balls"></div>
        <div class="cred" align="right"><?php echo($cred); ?></div>
        <div class="espace"></div>
        <div class="line"></div>
        <div class="midle">
            <div id="fond" class="fond" align="center">
                <a href="history"><img src="GFX/logointro.png" img border="0" class="logo"></a>
            </div>
        </div>
        <div class="line"></div>
        <div class="espace"></div>
        <div class="espace"></div>
        <div class="bas"><img src="GFX/bas.gif" class="balls"></div>
    </body>
</html>