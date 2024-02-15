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
    <title>Работа с базой данных</title>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>ФИО получателя</th>
            <th>email/ID_telegram</th>
            <th>&#10004;</th>
            <th>&#9998;</th>
            <th>&#10006;</th>
        </tr>
        <?php
            foreach($contacts as $item) {
              ?>
              <tr>
              <td><?= $item[0] ?></td>
              <td><?= $item[1] ?></td>
              <td><?= $item[2] ?></td>
              <td><a href="view.php?id=<?= $item[0] ?>">Просмотр</a></td>
              <td><a href="update.php?id=<?= $item[0] ?>">Обновить</a></td>
              <td><a href="vendor/delete.php?id=<?= $item[0] ?>">Удалить</a></td>
              </tr>
              <?php      
            }
        ?>
    </table>
    <h2>Создание нового пользователя</h2>
    <form action="vendor/create.php" method="post">
        <p>ФИО</p>
        <input type="text" name="name">
        <p>email или telegram</p>
        <input type="email" name="email_telegram">
        <button type="submit">Добавить</button>
    </form>
    <a href="index.php">Отправка PDF</a>
</body>
</html>