<?php
    require_once '../config/connect.php';
    $name = $_POST['name'];
    $email_telegram = $_POST['email_telegram'];
    $connect->query("INSERT INTO `contacts` (`id`, `name`, `email_telegram`) VALUES (NULL, '$name', '$email_telegram')
    ");

    header('Location: /');

    ?>