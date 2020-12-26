<?php
    require_once 'config/connect.php';
?>

<!DOCTYPE html>
<html>
 <head>
   <title>Авторизация</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="css/style.css">
 </head>
 <body>
   
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <form action="vendor/auth.php" method="post">
                  <div class="form-group">
                    <label >Login</label>
                    <input name="login" type="login" class="form-control" >
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input name="pass" type="password" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-primary btn-lg" style="margin-top: 20px;">Авторизоваться</button>
                </form>
            </div>
        </div>
    </div>
 </body>
 </html>

