<?php
    $connect = new mysqli('localhost', 'root', '', 'pdfcrud');
    if($connect->connect_error) {
            die("Ошибка подключения к БД:".$connect->connect_error);
    }