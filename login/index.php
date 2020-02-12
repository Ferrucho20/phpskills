<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  <?php
   session_start();
    if (!isset($_SESSION["userArcaise"]))
    {
      header("location:login.php");
    }
   ?>
    <p>¡success!</p></b>
    <p> <b>welcome</b> </p>
    <a href="/login.php">logout</a>
    <form action = "lista_correos.php" method = "get">
      <button type="submit" class="btn btn-primary">listar correos</button>
    </form>
    


  </body>
</html>
