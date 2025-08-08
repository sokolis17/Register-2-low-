<?php

require_once('db.php');

$name = $_POST['name'];
$email = $_POST['email'];
$passwd = $_POST['pass'];
$passwd_conf = $_POST['pass_conf'];




if(empty($name) or empty($email) or empty($passwd) or empty($passwd_conf)){
    echo "Ошибка: Заполните все поля";
}else{
    if($passwd != $passwd_conf){
        echo "Ошибка: Пароли не свопадают";
    }else{
        $sql = "INSERT INTO `Users` (login,passwd,email) VALUES('$name','$passwd','$email')";
        if($conn -> query($sql)){
            echo "Успешная регистрация";
        }
        else{
            echo "Ошибка: ". $conn->error;
        }
    }
}