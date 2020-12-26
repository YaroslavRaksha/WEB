<?php
    require_once 'config/connect.php';
?>

<!DOCTYPE html>
<html>
 <head>
   <title>Изменить</title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <style>
       th {
           padding: 10px;
       }
   </style>
 </head>
 <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
            <table class="table">
                <tr>
                    <th scope="col"> TITLE </th>
                    <th scope="col"> DESCR </th>
                    <th scope="col"> PRICE </th>
                </tr>

                <?php

                    $products = mysqli_query($connect, "SELECT * FROM `products`");
                    $products = mysqli_fetch_all($products);
                    foreach($products as $product) { ?>
                        <tr>
                            <td> <?= $product[1] ?> </th>
                            <td> <?= $product[3] ?> </th>
                            <td> <?= $product[2] ?> </th>
                            <th><a href="vendor/delete.php?id=<?= $product[0] ?>"><img src="img/delete.png"></a></th>
                        </tr>
                    
                <?php } ?>

            </table>

    <form action="vendor/create.php" method="post">
        <p>Title</p>
        <input type="text" name="title">
        <p>Description</p>
        <textarea name="description"></textarea>
        <p>Price</p>
        <input type="number" name="price"> <br> <br>
        <button type="sumbit">Добавить новый продукт</button>
    </form>
            </div>
            <div class="col-2 offset-2">
                <form action="login.php" method="post">
                  <div class="form-group">
                    <label >Login</label>
                    <input name="login" type="login" class="form-control" >
                  </div>
                  <div id="validationParent" class="form-group">
                    <label>Password</label>
                    <input name="pass" type="password" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-primary btn-lg" style="margin-top: 20px;">Добавить</button>
                </form>
            </div>
        </div>
    </div>
    <?php 
        $login = filter_var(trim($_POST['login']),
        FILTER_SANITIZE_STRING);
        $pass = filter_var(trim($_POST['pass']),
        FILTER_SANITIZE_STRING);
        if(mb_strlen($login) < 2 || mb_strlen($login) > 20) {
            exit();
        } else if(mb_strlen($pass) < 2 || mb_strlen($pass) > 20) {
            exit();
        }
        
        $connect->query("INSERT INTO `users` (`login`, `pass`) VALUES('$login', '$pass')");
        $connect->close();
    ?>
    
 </body>
 </html>

