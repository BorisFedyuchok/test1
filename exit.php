<?php
session_start();

$_SESSION=[];


session_destroy();
setcookie("PHPSESSID","",time()-10000);

header("Refresh: 0; URL=http://localhost:8888/test1/index.php");

exit();

?>