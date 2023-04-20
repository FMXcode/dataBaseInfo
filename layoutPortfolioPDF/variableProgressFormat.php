<?php

//$png = file_get_contents("![](Slice 2.png");
//$pngbase64 = base64_encode($png);
require_once '../config/connect.php';

$person_id = $_GET['id'];
$person = mysqli_query($connect, "SELECT * FROM `general_information` WHERE user_id = 2;");
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
    <link rel="stylesheet" href="layoutStyle/portfolioFormat1.css">
    <style type="text/css">
        /*@font-face {*/
        /*    font-family: 'Times New Roman';*/
        /*    src: local('Times New Roman'),url('fonts/ofont.ru_Times New Roman.ttf') format('truetype');*/
        /*    font-weight: normal;*/
        /*    font-style: normal;*/
        /*    font-display: swap;*/
        /*}*/
        body{
            font-family: "DejaVu Sans";
        }
        /*font-family: "DejaVu Sans";*/
    </style>
    <link rel="stylesheet" href="fonts/ofont.ru_Times%20New%20Roman.ttf">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;500;700&family=Jura:wght@500;600;700&family=Open+Sans&family=Roboto:ital,wght@0,500;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
<div class="container" style="padding: 0 60px;">
    <div class="wapper_main" style="text-align: center;">
        <p class="main_title"
           style="font-size: 20px;
                      font-weight: 400;
                      margin: 3px 0;">МИНИСТЕРСТВО ОБОРОНЫ РОССИЙСКОЙ ФЕДЕРАЦИИ</p>
        <div class="line" style="background-color: black;
                                     height: 1px;
                                     margin-top: 3px;"></div>
        <p class="main_text" style="margin: 6px 0px;font-size: 14px; width: 600px;margin: 0 auto;">Федеральное государственное казенное военное образовательное учреждение высшего
            образования «Военная орденов Жукова и Ленина Краснознаменная академия связи имени
            Маршала Советского Союза С.М.Буденного» Министерства обороны Российской
            Федерации
        </p>
        <h1 style="font-weight: 400;
                       font-size: 40px;
                       margin-top: 150px;">Образовательная деятельность</h1>
        <p class="main_text field" style="margin: 6px 0px;
                                              font-size: 18px;width: 650px;margin: 0 auto;">Курсанта Военной академии связи, 3 факультета
            <br> (Автоматизированных Систем Управления), учебной группы 3882
        </p>
        <div class="line" style="background-color: black;
                                     height: 1px;
                                     margin-top: 20px;"></div>
        <div class="text_parentheses" style="font-size: 13px;
                                                 margin-top: 2px;">(должность, № и наименование подразделения)
        </div>
        <p class="name" style="font-size: 20px;
                                   font-weight: 400;"><?=$person['surname'] ?> <?=$person['name'] ?>  <?=$person['patronymic'] ?>
        </p>
        <div class="line" style="background-color: black;
                                     height: 1px;
                                     margin-top: 20px;"></div>
        <div class="text_parentheses" style="font-size: 13px;
                                                 margin-top: 2px;">(фамилия, имя, отчество)</div>
        <p class="city" style="font-size: 18px;
                                   margin-top: 290px; margin-bottom: 100px;">г. Санкт-Петербург</p>
    </div>
    <h2 style="text-align:center;
                        font-size: 16px;">Успеваемость по семестрам</h2>
    <div class="wapper_table_progress"
         style="display:flex;
                    justify-content:space-between;
                    width: 600px;
                    margin: 0 auto;
                    margin-top: 25px;">
        <div class="table_content">
            <p style="text-align:left;
                      width: 150px;
                      margin: 0;
                      font-size: 18px;"> 1 семестр </p>
            <div class="table" style="margin-top: 5px;">
                <table style="border: 1px solid #000;
                              border-collapse: collapse;
                              text-align:left;
                              width: 600px;
                              margin: 0 auto;
                              margin-top: 5px;;">
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;text-align:left;">Физическая подготовка</td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;">
                            5
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Иностранный язык
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">5</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Информатика
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">5
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Математика
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">5
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Строевая подготовка
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">4
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            За семестр
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;
font-weight: 700;"
                        >4,7
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="table_content">
            <p style="text-align:left;
                      width: 150px;
                      margin: 0;
                      font-size: 18px;
margin-top: 15px;"> 2 семестр </p>
            <div class="table" style="margin-top: 5px;">
                <table style="border: 1px solid #000;
                              border-collapse: collapse;
                              text-align:left;
                              width: 600px;
                              margin: 0 auto;
                              margin-top: 5px;;">
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;text-align:left;">Философия</td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            4
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Социология
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">5</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Физика
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">5
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Иностранный язык
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">4
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            История
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">5
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Инженерная и компьютерная графика
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">5
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            За семестр
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;
                                font-weight: 700;"
                        >4,9
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="wapper_table_progress"
         style="display:flex;
                    justify-content:space-between;
                    width: 600px;
                    margin: 0 auto;
                    margin-top: 25px;">
        <div class="table_content">
            <p style="text-align:left;
                      width: 200px;
                      margin: 0;
                      font-size: 18px;"> 3 семестр </p>
            <div class="table" style="margin-top: 5px;">
                <table style="border: 1px solid #000;
                              border-collapse: collapse;
                              text-align:left;
                              width: 600px;
                              margin: 0 auto;
                              margin-top: 5px;;">
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;text-align:left;">Строевая подготовка</td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            5
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Философия
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">5</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Социология
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">4
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Физика
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">4
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Иностранный язык
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">5
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            История
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">5
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Инженерная и компьютерная графика
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">5
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Физическая подготовка
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">5
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Математика
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">4
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            За семестр
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;
                               font-weight: 700;"
                        >4,7
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="table_content">
            <p style="text-align:left;
                      width: 200px;
                      margin: 0;
                      font-size: 18px;
margin-top: 15px;"> 4 семестр </p>
            <div class="table" style="margin-top: 5px;">
                <table style="border: 1px solid #000;
                              border-collapse: collapse;
                              text-align:left;
                              width: 600px;
                              margin: 0 auto;
                              margin-top: 5px;;">
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;text-align:left;">Иностранный язык</td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            5
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Математика
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">5</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Военная топография
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">4
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Строевая подготовка
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">5
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Физическая подготовка
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">4
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Автомобильная подготовка
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">4
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            ЭВМ и периферийные устройства
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">4
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Электротехника, электроника и схемотехника
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">4
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            За семестр
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;
                               font-weight: 700;"
                        >4,5
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="wapper_table_progress"
         style="display:flex;
                    justify-content:space-between;
                    width: 600px;
                    margin: 0 auto;
                    margin-top: 25px;">
        <div class="table_content">
            <p style="text-align:left;
                      width: 200px;
                      margin: 0;
                      font-size: 18px;"> 5 семестр </p>
            <div class="table" style="margin-top: 5px;">
                <table style="border: 1px solid #000;
                              border-collapse: collapse;
                              text-align:left;
                              width: 600px;
                              margin: 0 auto;
                              margin-top: 5px;;">
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;text-align:left;">Теория автоматов</td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">5
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Физическая подготовка
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">5</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Электроснабжение объектов автоматизации
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">4
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Операционные системы
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">5
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Безопасность жизнедеятельности
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">4
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Моделирование и проектирование систем
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">5
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Сети и телекоммуникации
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">5
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Психология и педагогика
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">5
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Иностранный язык
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">5
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Теория вычислительных процессов
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">5
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            За семестр
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;
                               font-weight: 700;"
                        >4,7
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="table_content">
            <p style="text-align:left;
                      width: 200px;
                      margin: 0;
                      font-size: 18px;
margin-top: 15px;"> 6 семестр </p>
            <div class="table" style="margin-top: 5px;">
                <table style="border: 1px solid #000;
                              border-collapse: collapse;
                              text-align:left;
                              width: 600px;
                              margin: 0 auto;
                              margin-top: 5px;;">
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;text-align:left;">Строевая подготовка</td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            5
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Общая тактика
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">4</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Организация связи в подразделениях общевойсковых соединений
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">4
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Математика
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">100
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Военная техника связи
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">4
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Методы и средства криптографической защиты информации
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">5
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Базы данных
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">5
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Моделирование и проектирование систем
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">5
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Сети и телекоммуникации
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">5
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Физическая подготовка
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">5
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Военная история
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">5
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            За семестр
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;
                               font-weight: 700;"
                        >4,7
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="wapper_table_progress"
         style="display:flex;
                    justify-content:space-between;
                    width: 600px;
                    margin: 0 auto;
                    margin-top: 25px;">
        <div class="table_content">
            <p style="text-align:left;
                      width: 200px;
                      margin: 0;
                      font-size: 18px;"> 7 семестр </p>
            <div class="table" style="margin-top: 5px;">
                <table style="border: 1px solid #000;
                              border-collapse: collapse;
                              text-align:left;
                              width: 600px;
                              margin: 0 auto;
                              margin-top: 5px;;">
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;text-align:left;">Физическая подготовка</td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            5
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Радиационная химическая биологическая защита
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">4</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Военно-инженерная подготовка
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">5
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Общая тактика
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">4
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            БППАУАСУУСПУОСВ
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">4
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Медицинское обеспечение
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">5
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Правоведенье
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">5
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Автоматизированные системы специального назначения
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">5
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            За семестр
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;
                               font-weight: 700;"
                        >4,7
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="table_content">
            <p style="text-align:left;
                      width: 200px;
                      margin: 0;
                      font-size: 18px;
margin-top: 15px;"> 8 семестр </p>
            <div class="table" style="margin-top: 5px;">
                <table style="border: 1px solid #000;
                              border-collapse: collapse;
                              text-align:left;
                              width: 600px;
                              margin: 0 auto;
                              margin-top: 5px;;">
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;text-align:left;">Метрология, стандартизация и артификация</td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            5
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Защита информации
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px"5</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            БППАУАСУУСПУОСВ
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">4
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Автоматизированные системы специального назначения
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">5
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Автоматизированные вычислительных сетей специального назначения
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">4
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Организация связи в подразделениях общевойсковых соединений
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">5
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Техническое обеспечение связи и автоматизации
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">5
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Физическая подготовка
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">5
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            За семестр
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;
                               font-weight: 700;"
                        >4,7
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="wapper_table_progress"
         style="display:flex;
                    justify-content:space-between;
                    width: 600px;
                    margin: 0 auto;
                    margin-top: 25px;">
        <div class="table_content">
            <p style="text-align:left;
                      width: 200px;
                      margin: 0;
                      font-size: 18px;"> 9 семестр </p>
            <div class="table" style="margin-top: 5px;">
                <table style="border: 1px solid #000;
                              border-collapse: collapse;
                              text-align:left;
                              width: 600px;
                              margin: 0 auto;
                              margin-top: 5px;;">
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;text-align:left;">Физическая подготовка</td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Иностранный язык
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px"></td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Информатика
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">96
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Математика
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">100
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Строевая подготовка
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">445
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="table_content">
            <p style="text-align:left;
                      width: 200px;
                      margin: 0;
                      font-size: 18px;
                        margin-top: 15px;"> 10 семестр </p>
            <div class="table" style="margin-top: 5px;">
                <table style="border: 1px solid #000;
                              border-collapse: collapse;
                              text-align:left;
                              width: 600px;
                              margin: 0 auto;
                              margin-top: 5px;;">
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;text-align:left;">Физическая подготовка</td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Иностранный язык
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px"></td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Информатика
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">96
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Математика
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">100
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Строевая подготовка
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">445
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
