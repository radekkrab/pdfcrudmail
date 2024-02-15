<?php
    require_once '../config/connect.php';
    $contacts_id = $_GET['id'];
    $contacts = $connect->query("DELETE FROM `contacts` WHERE `contacts`.`id` ='$contacts_id'");
    header('Location: /');