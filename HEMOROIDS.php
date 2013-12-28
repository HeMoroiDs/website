<?php
header('Content-Type:text/html; charset=utf-8');
session_start();
if (isset($_GET['page']))
    $page = $_GET['page'];
else
    $page = 0;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>::HEMOROIDS::OFFICIAL WEBSITE::</title>
        <meta name="description" content="HMD - When preparation-H isn't enough !" />
        <link rel="author" href="https://plus.google.com/u/0/107853956348923004318/posts" />
        <link rel="icon" type="image/x-icon" href="./favicon.ico"/>
        <link href="CSS/css.css" type="text/css" rel="stylesheet" />
        <link href="CSS/menu.css" type="text/css" rel="stylesheet" />
<?php
//specific CSS
    switch($page) {
        case 2: ?>
        <link href="CSS/productions.css" type="text/css" rel="stylesheet" />
        <?php
        break;
    }
    ?>
    </head>
    <body>
        <div id="main"></div>
        <div class="top"></div>
        <div class="menu">
            <?php
            include('scripts/menu.php');
            ?>
            <br/>
        </div>
        <div class="content">
            <?php
//
            switch ($page) {
                case 0:
                    include('scripts/history.php');
                    break;
                case 1:
                    include_once 'scripts/members.php';
                    break;
                case 2:
                    include_once 'scripts/productions.php';
                    break;
                case 3:
                    include_once 'scripts/links.php';
                    break;
                case 4:
                    include_once 'scripts/error.php';
                    break;
            }
            ?>
            <br/>
        </div>
        <div class="mountains"></div>
        <?php
        include('scripts/footer.php');
        ?>
    </body>
</html>