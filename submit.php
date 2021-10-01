<?php
session_start();
include('sess.php');

if(!empty($_POST['login']) && !empty($_POST['pass'])){
    $ip=new Sess();
    $ip->set_sess('ip',$_SERVER['REMOTE_ADDR']);
    $name=new Sess;
    $name->set_sess('name',$_POST['login']);
    header("Refresh: 0; URL=http://localhost:8888/test1/index.php");
}else{
    echo "<span style='color:red;'>Данные введены некоректно!</span>";
    require_once('login.php');
}
?>
