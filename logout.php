
<?php
include_once("header.php");
setcookie('name', null, time() - 1);
setcookie('email', null, time() - 1);
setcookie('password', null, time() - 1);
header("location: signup.php");

include_once("footer.php");

?>