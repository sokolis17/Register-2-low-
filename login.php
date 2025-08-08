<?php

require_once('db.php');

$login = $_POST['user_log'];
$password = $_POST['user_passwd'];

if (empty($login) or empty($password)) {
    echo "Заполните все поля";
} else {
    $sql = "SELECT * FROM `Users` WHERE login = '$login' AND passwd = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Добро пожаловать ". $row['login'];
        }
    } else {
        echo "Нет такого пользолвателя";
    }
}
