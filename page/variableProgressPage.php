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
<!--    --><?php
//    require_once "../components/variableShowPersonProgress.php";
//    ?>
    <div class="wapper_chart">
        <div  style="width: 500px;height: 400px;" class="chart_progress">
            <canvas id="myChart"></canvas>
        </div>
    </div>



    <script>
        const ctx = document.getElementById('myChart').getContext('2d');

        const myChar = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['1 сем.', '2 сем.', '3 сем.', '4 сем.', '5 сем.', '6 сем.',
                    '7 сем.', '8 сем.', '9 сем.', '10 сем.'],
                datasets: [{
                    label: '# of Votes',
                    data: [4.32, 4.2, 4.7, 4.7, 4.8, 4.56, 4.32, 4.2, 4.7, 4.7, 4.8, 4.56],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

</div>
</body>

</html>