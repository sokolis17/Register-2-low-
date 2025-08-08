<?php

require_once('db.php');

$login = $_POST['login'] ?? '';
$pass = $_POST['pass'] ?? '';


if(empty($login) or empty($pass)){
    echo "Ошибка: Заполните поля";
}else{
    $sql = "SELECT * FROM `Users` WHERE login = '$login' AND passwd = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0 ){
        while($row = $result-> fetch_assoc()){
            echo "Добро пожаловать" . $row['login'];
        }
    }else echo "Нет такого пользователя";
}
