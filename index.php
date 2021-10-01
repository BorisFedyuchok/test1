<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

//Неавторизированая часть


if($_GET['page']=="login") {
    echo '<form action="?page=submit" method="post">
<h1>Login</h1>
<input type="text" name="login" placeholder="your login">
<br><br>
<input type="password" name="pass" placeholder="password">
<br><br>
<input type="submit" value="login">
</form>';
    //Проверка и автоиизированная часть
}elseif ($_GET['page']=='submit'){

    $_SESSION['user']=$_POST['login'];

    if(empty($_SESSION['user'])){
        echo "Пройдите  <a href='?page=login'>авторизацию</a>";
    }else{


        echo '<h1>Welcome'.$_SESSION['user'].'</h1>';

        echo "<a href='?page=exit'>Exit</a>";
    }




}
//Неавторизированная часть
elseif ($_GET['page']=='exit'){
    $_SESSION=[];
    session_destroy();
    echo "Вы вышли. <a href='?page=login'>Войдите</a>";
 }
//Неавторизированая
else{
    echo '<form action="?page=welcome" method="post">
<h1>Login</h1>
<input type="text" name="login" placeholder="your login">
<br><br>
<input type="password" name="pass" placeholder="password">
<br><br>
<input type="submit" value="login">
</form>';

}

?>

</body>
</html>