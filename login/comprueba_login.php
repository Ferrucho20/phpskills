<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    try{
      //creamos una instancia de la clase PDO y hacemos la conexion con la DB (libreria)
      $base=new PDO("mysql:host=localhost; dbname=curso_09_mysql" , "jafs", "TlxuCu1ddvKs2SVF");
      //el obejeto conexion llama la funcion setAttribute
      $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //consulta usando marcadores :login y :password
      $sql="SELECT * FROM tbl_users WHERE correo= :login AND password= :password";
      //consulta preparada con marcadores
      $resultado=$base->prepare($sql);
      //rescatamos los datos traidos por POST
      $login=htmlentities(addslashes($_POST["login"]));
      $password=htmlentities(addslashes($_POST["password"]));
      //identificar cada marcador con lo que trae POST usando la funcion bindValue
      $resultado->bindValue(":login", $login);
      $resultado->bindValue(":password", $password);
      //ejecutamos la consulta sql
      $resultado->execute();
      //rowCount muestra el numero de registros que devuelve una consulta si
      //el usuario no existe devuelve 0 de lo contrario 1
      $numero_registro=$resultado->rowCount();
      if($numero_registro !=0)
      {
       session_start();
       $_SESSION["userArcaise"]=$_POST["login"];
        header("location:index.php");

      }else{
        header("location:login.php");
      }

    }catch(Exception $e){
      die ("Error: " . $e->getMessage());
    }
     ?>
  </body>
</html>
