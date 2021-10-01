<?php
session_start();
include('sess.php');
$logout = new Sess;
$logout->logout();
?>