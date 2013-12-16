<?php
header('Content-Type:text/html; charset=utf-8');
session_start();
if(isset($_GET['page']))
$page=$_GET['page'];
else
$page=0;
?>
<!DOCTYPE html>
<html>
    <head>
<title>::HEMOROIDS::OFFICIAL WEBSITE::</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="generator" content="NETBEANS 7.0.1"/>
<meta name="author" content=""/>
<meta name="date" content=""/>
<meta name="copyright" content=""/>
<meta name="keywords" content=""/>
<meta name="description" content="HMD - When preparation-H isn't enough !" />
<link rel="icon" type="image/x-icon" href="./favicon.ico"/>
<link href="./CSS/css.css" type="text/css" rel="stylesheet" />
<link href="./CSS/menu.css" type="text/css" rel="stylesheet" />

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
switch($page)
{
case 0:
include('scripts/history.php');
break;
case 1:
include('scripts/members.php');
break;
case 2:
include('scripts/productions.php');
break;
/**case 3:
include('scripts/guestbook.php');
break;**/
case 4:
include('scripts/contact.php');
break;
case 5:
include('scripts/links.php');
break;
/**case 6: //Sign Guestbook 
include('scripts/sign_guestbook.php');
break;*/
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