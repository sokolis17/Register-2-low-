<?php

require_once('db.php');


$login = $_POST['user_name'];
$password = $_POST['user_passwd'];
$password_conf = $_POST['user_passwd_conf'];
$email = $_POST['user_email'];

if (empty($login) or empty($email) or empty($password) or empty($password_conf)) {
    echo "Заполните все поля";
} else {
    if ($password != $password_conf) {
        echo "Пароли не совпадают";
    } else {
        $sql = "INSERT INTO `Users` (login,passwd,email) VALUES ('$login','$password','$email')";
        if ($conn -> query($sql)) {
            echo "Успешная регистррация";

        } else {
            "Ошибка: ". $conn->error;
        }
    }
}
