<?php

require_once 'config/connect.php';

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
    <link rel="stylesheet" href="style/headerMenu.css">
    <link rel="stylesheet" href="style/tableList.css">
    <link rel="stylesheet" href="style/workForm.css">
    <link rel="stylesheet" href="style/scienWorkForm.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;500;700&family=Jura:wght@500;600;700&family=Open+Sans&family=Roboto:ital,wght@0,500;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body id="personInformation">
    <?php
        require_once "components/headerMenu.php";
    ?>

    <form action="vendor/createPerson.php" method="post">
            <div class="container">
                <?php
                require_once "./components/personInformation.php";
                require_once "./components/tableList.php";
                require_once "./components/workForm.php";
                require_once "./components/scienWorkForm.php";
                require_once "./components/otherAchievements.php";
                ?>
                <br> <br>
                <div class="button_wapper">
                    <button type="submit">Отправить данные</button>
                </div>
            </div>
        <br>
    </form>
</body>
</html>
