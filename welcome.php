<?php
  session_start();
  include('sess.php');
  $name=new Sess;
  echo "Welcome " .$name->get_sess('name');
  echo "<br><a href='exit.php'>Выйти</a>";
?>