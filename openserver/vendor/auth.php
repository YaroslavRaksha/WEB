<?php
    $login = filter_var(trim($_POST['login']),
    FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),
    FILTER_SANITIZE_STRING);

    $connect = mysqli_connect('localhost', 'mysql', 'mysql', '7lab');
    $result = $connect->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass`= '$pass'");
    $user = $result->fetch_assoc();
    if(count($user) == 0) {
        echo "Такой пользователь не найден";
        exit();
    }

    $connect->close();
    header('Location: ../shop.php');
   

    