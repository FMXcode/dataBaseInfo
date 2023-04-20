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
    <title>Document</title>
    <script src="chart.umd.js"></script>
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
<div class="container">
    <h3 style="background-color: #3b4c25; width: 98%; margin: 0 auto;height: 30px;border-radius: 5px; margin: 10px;line-height: 30px; ">Развитие навыков</h3>
    <div class="wapper_chart">
        <div class="wapper__block" style="background-color: #3b4c25;border-radius: 5px;width: 98%;margin: 0 auto; padding: 10px;">
            <?php
            require_once "../components/variableChartSport.php";
            ?>
        </div>
        <?php
        require_once "../components/variableSportTable.php";
        ?>
        <div class="button_wapper_get">
            <button type="button" class="progressButton"><a href="../pdf-generation/variableSportConverting.php" class="progress__button">Экспортировать в pdf</a></button>
        </div>
    </div>
</div>
</body>

</html>