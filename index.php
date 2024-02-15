<?php
    require_once 'config/connect.php';
    $contacts = $connect->query("SELECT * FROM `contacts`");
    $contacts = $contacts->fetch_all();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Отправка PDF подписчикам</title>
</head>
<body>
    <h2>Отправка PDF</h2>
    <form action="vendor/upload.php" method="post" enctype="multipart/form-data">
        <label for="user">Выберите пользователя:</label>
        <select name="email_telegram" id="user">
            <?php
             foreach($contacts as $item) {
            ?>
            <option value="<?= $item[2] ?>"><?= $item[1] ?></option>
            <?php }
            ?>
        </select>
        <a href="crud.php">Редактировать пользователей</a>
        
        <input type="file" name="pdf_file">
        <input type="submit" value="Загрузить и посмотреть">
    </form>

</body>
</html>