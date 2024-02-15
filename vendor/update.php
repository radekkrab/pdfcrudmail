<?php
     require_once '../config/connect.php';
     $name = $_POST['name'];
     $email_telegram = $_POST['email_telegram'];
     $id = $_POST['id'];
    $connect->query("UPDATE `contacts` SET `name` = '$name', `email_telegram` = '$email_telegram' WHERE `contacts`.`id` = '$id'");
    header('Location: /');