<?php
session_start();

session_unset();

session_destroy();

header('Location: /login');

  /* if(session_destroy()) {
      header("Location: login.php");
   }*/
?>
