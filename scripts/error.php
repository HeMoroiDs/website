<?php
$error=0;
if(isset($_GET['error'])) {
    $error=  addslashes(htmlspecialchars($_GET['error']));
}
$errorMessage='';
switch($error) {
    case 404:
        $errorMessage="Unknown page, Sorry !";
        break;
    case 403:
        $errorMessage="Access denied, Sorry !";
        break;
    default:
        $errorMessage="Server can't give answer to this request, sorry !";
        break;
}
?>
<div class="errorDoc">
    <p><?php echo htmlspecialchars($errorMessage); ?></p>
</div>
