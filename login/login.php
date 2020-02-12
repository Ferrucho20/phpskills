<html>

   <head>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <title>Login Page</title>

      <style type = "text/css">

         .container{
           margin-top: 150px;
           width: 300px;
           padding: 10px;

         }
        /*.box {
            border:#666666 solid 1px;
         }*/
      </style>

   </head>

   <body >
     <div class="container">

       <form action = "comprueba_login.php" method = "POST">
         <div class="form-group">
           <label for="exampleInputEmail1">Email address</label>
           <input name="login" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="correo@arcaise.com">
         </div>
         <div class="form-group">
           <label for="exampleInputPassword1">Password</label>
           <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
         </div>

         <button type="submit" class="btn btn-primary">Log in</button>
       </form>
</div>

  <!--    <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">

            <div style = "margin:30px">

               <form action = "comprueba_login.php" method = "POST">
                  <label>Correo  :</label><input type = "text" name = "login" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>

               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>

            </div>

         </div>

      </div>
    -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </body>
</html>
