<?php
/**
 * Created by PhpStorm.
 * User: Ender
 * Date: 5/9/2018
 * Time: 1:47 PM
 */
?>

<?php

session_start();
session_unset();
session_destroy();

unset($_COOKIE['session_cookie']);

setcookie('PHPSESSID', '', time() - 3600, '/');
setcookie('session_cookie', '', time() - 3600, '/');
setcookie('csrf_token', '', time() - 3600, '/','localhost',true);
header("Location:index.php");
exit

?>

