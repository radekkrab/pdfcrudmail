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
    <title>Обновить товар</title>
</head>
<body>
<h2>Обновить товар</h2>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id" value="<?= $contact['id'] ?>">
        <p>ФИО</p>
        <input type="text" name="name" value="<?= $contact['name'] ?>">
        <p>email или telegram</p>
        <input type="text" name="email_telegram" value="<?= $contact['email_telegram'] ?>">
        <button type="submit">Обновить</button>
    </form>
</body>
</html>