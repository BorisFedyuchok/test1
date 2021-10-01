<?php
session_start();

if(!empty($_POST['login']) && !empty($_POST['pass'])) {
    $_SESSION['name'] = $_POST['login'];
    echo "<a href='index.php'>".$_SESSION['name'].", вход выполнен</a>";

}

?>
