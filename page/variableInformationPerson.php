<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/index.css">
    <link rel="stylesheet" href="../style/headerMenu.css">
    <link rel="stylesheet" href="../style/varibleHeaderMenu.css">
    <link rel="stylesheet" href="../style/tableList.css">
    <link rel="stylesheet" href="../style/scienWorkForm.css">
    <link rel="stylesheet" href="../style/variableProgress.css">
    <link rel="stylesheet" href="../style/variableSport.css">
    <link rel="stylesheet" href="../style/variableEncouragement.css">
    <title>Document</title>
</head>
<style type="text/css">
    @font-face {
        font-family: 'Roboto';
        src: url('../style/fonts/Roboto-Bold.eot');
        src: local('Roboto-Bold'), url('../style/fonts/Roboto-Bold.woff') format('woff'), url('../style/fonts/Roboto-Bold.ttf') format('truetype'), url('../style/fonts/Roboto-Bold.svg') format('svg');
        font-weight: 700;
        font-style: normal;
        font-display: swap;
    }
    @font-face {
        font-family: 'Roboto';
        src: url('../style/fonts/Roboto-Medium.eot');
        src: local('Roboto-Medium'), url('../style/fonts/Roboto-Medium.woff') format('woff'), url('../style/fonts/Roboto-Medium.ttf') format('truetype'), url('../style/fonts/Roboto-Medium.svg') format('svg');
        font-weight: 500;
        font-style: normal;
        font-display: swap;
    }
    @font-face {
        font-family: 'Roboto';
        src: url('../style/fonts/Roboto-Regular.eot');
        src: local('Roboto-Regular'), url('../style/fonts/Roboto-Regular.woff') format('woff'), url('../style/fonts/Roboto-Regular.ttf') format('truetype'), url('../style/fonts/Roboto-Regular.svg') format('svg');
        font-weight: normal;
        font-style: normal;
        font-display: swap;
    }
    body{
        font-family: 'Roboto';
    }
</style>
<body>
<?php
require_once "../components/variableHeaderMenu.php";
?>
<form action="../vendor/variableCreatePerson.php" method="post">
        <div class="container">
            <?php
            require_once "../components/variablePersonInformation.php";
            require_once "../components/variablePersonalData.php";
            require_once "../components/variableProgerss.php";
//            require_once "../components/variableScienWorkForm.php";
            require_once "../components/variableSRW.php";
            require_once "../components/variableSport.php";
            require_once "../components/variableEncouragement.php";
            ?>
            <div class="button_wapper">
                <button type="submit">Сохранить данные</button>
            </div>
        </div>
    <br>
</form>
</body>
</html>