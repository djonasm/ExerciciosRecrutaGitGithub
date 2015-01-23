<?php
session_start();
echo $_SESSION['ip'];

//destruir cookie
$_SESSION = array();
if (isset($_COOKIE[session_name()])){
    setcookie(session_name(), '' , time() - 42000);
}
session_destroy();
