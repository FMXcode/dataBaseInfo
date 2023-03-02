<?php

    require_once './config/connect.php';

    $person_id = $_GET['id'];
    $person = mysqli_query($connect, "SELECT * FROM `general_information` WHERE user_id = '$person_id'");
    $person = mysqli_fetch_assoc($person);
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;500;700&family=Jura:wght@500;600;700&family=Open+Sans&family=Roboto:ital,wght@0,500;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
<form action="vendor/updatePerson.php" method="post">
    <fieldset>
        <legend>Обновить персональную информацию:</legend>
        <div class="container">
            <input type="hidden" name="user_id" value="<?=$person['user_id'] ?>">
            <p>Звание</p>
            <input type="text" name="rank" value="<?=$person['rank'] ?>">
            <p>Фамилия</p>
            <input type="text" name="surname" value="<?=$person['name'] ?>" required>
            <p>Имя</p>
            <input type="text" name="name" value="<?=$person['surname'] ?>" required>
            <p>Отчество</p>
            <input type="text" name="patronymic"  value="<?=$person['patronymic'] ?>" required>
            <p>Дата рождения</p>
            <input type="date" name="dateBirth" value="<?=$person['dateBirth'] ?>" required>
            <p>занимаемая должность</p>
            <input type="text" name="position" value="<?=$person['position'] ?>">
            <p>Окончил</p>
            <textarea name="graduated"><?=$person['graduated'] ?></textarea>
            <p>Специальность</p>
            <textarea name="speciality"><?=$person['speciality'] ?></textarea>
            <p>Научная специальность</p>
            <textarea name="scientific_specialty"><?=$person['scientific_specialty'] ?></textarea> <br> <br>
            <div class="button_wapper">
                <button type="submit">Обновить данные</button>
            </div>
        </div>
    </fieldset>
</body>
</html>