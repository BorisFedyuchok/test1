<?php
session_start();

  echo "Welcome " .$_SESSION['name'];

  echo "<br><a href='exit.php'>Выйти</a>";

?>