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
    <link rel="stylesheet" href="../style/variableProgressPage.css">
    <link rel="stylesheet" href="../style/variableShowCreatePerson.css">
    <title>Document</title>
    <script src="../page/chart.umd.js"></script>
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
require_once "../components/headerForVariableShowPerson.php";
?>
<div class="container" style="height: 600px;">
    <h3 style="background-color: #3b4c25; width: 98%; margin: 0 auto;height: 30px;border-radius: 5px; margin: 10px;line-height: 30px; ">Экспортировать отчетный документ в pdf</h3>
    <div class="wapper__block" style="background-color: #3b4c25;border-radius: 5px;width: 98%;margin: 0 auto; padding: 10px;">
        <div class="wapper_chart">
            <div class="button__export" style="width: 500px;"><a href="../pdf-generation/variableConverting.php" class="export__link">
                    <div class="button__title" style="font-size: 22px;">Портфолио</div>  <img src="../photo/don.png" alt="" class="button__img">
                </a>
            </div>
            <div class="button_wapper_get"><div class="button__export"><a href="../pdf-generation/variableProgressConverting.php" class="export__link">
                        <div class="button__title">Образовательная деятельность</div>  <img src="../photo/don.png" alt="" class="button__img"></a></div>
                <div class="button__export"><a href="../pdf-generation/variableSRWConverting.php" class="export__link"><div class="button__title" style="font-size: 14px;">Научно-исследовательская работа</div>  <img src="../photo/don.png" alt="" class="button__img"></a></div></div>
            <div class="button_wapper_get">
                <div class="button__export"><a href="../pdf-generation/variableSportConverting.php" class="export__link"><div class="button__title" style="font-size: 18px;margin-bottom: 10px;">Спортивная работа</div>  <img src="../photo/don.png" alt="" class="button__img"></a></div>
                <div class="button__export"><a href="../pdf-generation/variableEncouragementConverting.php" class="export__link"><div class="button__title">Дисциплинарная практика </div>  <img src="../photo/don.png" alt="" class="button__img"></a></div></div>
        </div>
    </div>
</div>
</body>

</html>