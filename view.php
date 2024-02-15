<?php
    require_once 'config/connect.php';
    $contacts_id = $_GET['id'];
    $contact = $connect->query("SELECT * FROM `contacts` WHERE `id`='$contacts_id'");
    $contact = $contact->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Посмотреть пользователя</title>
</head>
<body>
<p><a href="index.php">Главная</a></p>
<h2><?= $contact['name'] ?></h2>
<p><?= $contact['email_telegram'] ?></p>
</body>
</html>