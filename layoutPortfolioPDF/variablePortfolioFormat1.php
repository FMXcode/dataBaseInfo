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
                       margin-top: 150px;">ПОРТФОЛИО</h1>
        <p class="main_text field" style="margin: 6px 0px;
                                              font-size: 18px;width: 650px;margin: 0 auto;">Курсант Военной академии связи, 3 факультета
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
                                   margin-top: 290px;">г. Санкт-Петербург</p>
    </div>
    <h2 style="text-align:center;font-size: 16px;
margin-top: 60px;">1. Общие сведения</h2>
    <div class="wapper_table">
        <div class="table">
            <table style="border: 1px solid #000;
                              border-collapse: collapse;
                              text-align:center;
                              margin: 0 auto;">
                <tr>
                    <td rowspan="5" ><img style="width: 200px;height: 280px;" src="../photo/MPwSbiZpcdY%20(1).jpg" alt=""></td>
                    <td style="border: 1px solid #000;
                                   border-collapse: collapse;
                                   padding: 30px 15px 5px 15px;"><?=$person['rank'] ?> <?=$person['name'] ?> <?=$person['surname'] ?> <?=$person['patronymic'] ?></td>
                </tr>
                <tr>
                    <td style="border: 1px solid #000;
                                   border-collapse: collapse;
                                   padding: 0 15px 15px 15px;">
                        <p style="margin: 0;text-align:center;">(воинское звание, фамилия, имя, отчество)</p>
                        <p style="margin: 0; font-weight: 700;"><?=$person['dateBirth'] ?></p>
                    </td>
                </tr>
                <tr>
                    <td style="border: 1px solid #000;
                                   border-collapse: collapse;
                                   padding: 0 15px 10px 15px;">
                        <p style="font-size: 12px;margin: 0;">(дата рождения)
                        </p>
                        <p style="margin: 5px;"><?=$person['position'] ?></p>
                    </td>
                </tr>
                <tr>
                    <td style="border: 1px solid #000;
                                   border-collapse: collapse;
                                   padding: 0 15px 15px 15px;">
                        <p style="font-size: 12px;margin: 0;margin-bottom: 5px;">(занимаемая должность)</p>
                        <?=$person['speciality'] ?>
                    </td>
                </tr>
                <tr>
                    <td style="border: 1px solid #000;
                                   border-collapse: collapse;
                                   padding: 0 15px;">
                        <p style="font-size: 12px;
                                      margin: 0;
                                      margin-bottom: 15px;">(Учебная группа)
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="table" style="margin-top: 25px;
                                      width: 610px;
                                      margin: 0 auto;
                                      margin-top: 20px;">
        <table style="border: 1px solid #000;
                              border-collapse: collapse;
                              text-align:left;
                              margin: 0 auto;">
            <tr>
                <td style="border: 1px solid #000;
                                   border-collapse: collapse;
                                   padding: 5px;text-align:left;">Специальность: </td>
                <td style="border: 1px solid #000;
                                   border-collapse: collapse;
                                   padding: 5px">Эксплуатация вычислительных машин, комплексов, систем и сетей специального назначения
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                                   border-collapse: collapse;
                                   padding: 5px">
                    Специализация:
                </td>
                <td style="border: 1px solid #000;
                    border-collapse: collapse;
                    padding: 5px">Эксплуатация вычислительных машин, комплексов, систем и сетей специального назначения</td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                                   border-collapse: collapse;
                                   padding: 5px">
                    Военная специальность:
                </td>
                <td style="border: 1px solid #000;
                    border-collapse: collapse;
                    padding: 5px">Эксплуатация вычислительных машин, комплексов, систем и сетей специального назначения
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                                   border-collapse: collapse;
                                   padding: 5px">
                    Квалификация:
                </td>
                <td style="border: 1px solid #000;
                    border-collapse: collapse;
                    padding: 5px">Инженер
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                                   border-collapse: collapse;
                                   padding: 5px">
                    Место рождения:
                </td>
                <td style="border: 1px solid #000;
                    border-collapse: collapse;
                    padding: 5px">Обручевых д.4а
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                                   border-collapse: collapse;
                                   padding: 5px">
                    Домашний адрес:
                </td>
                <td style="border: 1px solid #000;
                    border-collapse: collapse;
                    padding: 5px">Инженер
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                                   border-collapse: collapse;
                                   padding: 5px">
                    Образование:
                </td>
                <td style="border: 1px solid #000;
                    border-collapse: collapse;
                    padding: 5px">Инженер
                </td>
            </tr>
        </table>
    </div>
    <h2 style="text-align:center;font-size: 16px;
margin-top: 60px;">2. Результаты вступительных экзаменов в ВАС и ЕГЭ</h2>
    <div class="table" style="margin-top: 25px;">
        <table style="border: 1px solid #000;
                              border-collapse: collapse;
                              text-align:left;
                              width: 610px;
                              margin: 0 auto;
                              margin-top: 20px;;">
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;text-align:left;">Русский язык</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">92
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
                               padding: 5px">88</td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                    Физика
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
                    Физическая подготовка
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
                    Сумма баллов
                </td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">445
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                    Категория проф. пригодности
                </td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">1
                </td>
            </tr>
        </table>
    </div>
    <h2 style="text-align:center;font-size: 16px;
margin-top: 60px;">3. Личные данные</h2>
    <div class="table" style="margin-top: 25px;">
        <table style="border: 1px solid #000;
                              border-collapse: collapse;
                              text-align:left;
                              width: 610px;
                              margin: 0 auto;
                              margin-top: 20px;;">
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;text-align:left;">Отец</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                    Мать
                </td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px"></td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                    Домашний адрес родителей
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
                    Брат/Cёстры
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
                    Семейное положение
                </td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">445
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                    Жена/Муж
                </td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">1
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                    Дети
                </td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">1
                </td>
            </tr>
        </table>
    </div>
    <h2 style="text-align:center;
                        font-size: 16px;">4. Успеваемость по семестрам</h2>
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
    <h2 style="text-align:center;font-size: 16px;">5. Научно-методическая работа</h2>
    <p style="text-align:left;
                      width: 600px;
                      margin: 0 auto;">5.1. Публикации за последние 5 лет</p>
    <div class="table" style="width: 610px;
                                      margin: 0 auto;
                                      margin-top: 20px;">
        <table style="border: 1px solid #000;
                              border-collapse: collapse;
                              text-align:center;
                              margin: 0 auto;">
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;">№</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Наименование трудов</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Форма работы</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Выходные данные</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Объем в п.л.</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Объем в п.л.</td>
            </tr>
            <tr>
                <td colspan="6" style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;"><b>а) учебные издания</b></td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;">№</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Наименование трудов</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Форма работы</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Выходные данные</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Объем в п.л.</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Объем в п.л.</td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;">№</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Наименование трудов</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Форма работы</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Выходные данные</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Объем в п.л.</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Объем в п.л.</td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;">№</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Наименование трудов</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Форма работы</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Выходные данные</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Объем в п.л.</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Объем в п.л.</td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;">№</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Наименование трудов</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Форма работы</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Выходные данные</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Объем в п.л.</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Объем в п.л.</td>
            </tr>
            <tr>
                <td colspan="6" style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;"><b>б) научные работы</b></td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;">2</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Наименование трудов</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Форма работы</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Выходные данные</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Объем в п.л.</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Объем в п.л.</td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;">1</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Станция спутниковой
                    связи Р-441ЛМ
                    (учебное пособие).</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Печатная</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">СПб.: ВАС, 2019. – 112 с.</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">112
                    27
                </td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Смирнов А.А.,
                    Дворовой М.О.,
                    Платонов С.Н.,
                    Веркин С.С.,
                    Антонов В.В.,
                    всего 5 чел.</td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;">1</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Станция спутниковой
                    связи Р-441ЛМ
                    (учебное пособие).</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Печатная</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">СПб.: ВАС, 2019. – 112 с.</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">112
                    27
                </td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Смирнов А.А.,
                    Дворовой М.О.,
                    Платонов С.Н.,
                    Веркин С.С.,
                    Антонов В.В.,
                    всего 5 чел.</td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;">1</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Станция спутниковой
                    связи Р-441ЛМ
                    (учебное пособие).</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Печатная</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">СПб.: ВАС, 2019. – 112 с.</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">112
                    27
                </td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Смирнов А.А.,
                    Дворовой М.О.,
                    Платонов С.Н.,
                    Веркин С.С.,
                    Антонов В.В.,
                    всего 5 чел.</td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;">1</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Станция спутниковой
                    связи Р-441ЛМ
                    (учебное пособие).</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Печатная</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">СПб.: ВАС, 2019. – 112 с.</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">112
                    27
                </td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Смирнов А.А.,
                    Дворовой М.О.,
                    Платонов С.Н.,
                    Веркин С.С.,
                    Антонов В.В.,
                    всего 5 чел.</td>
            </tr>
        </table>
        <p>5.2. Участие в НИР</p>
    </div>
    <div class="table" style="width: 610px;
                                      margin: 0 auto;
                                      margin-top: 20px;">
        <table style="border: 1px solid #000;
                              border-collapse: collapse;
                              text-align:center;
                              margin: 0 auto;">
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;">Дата</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Наименование (шифр) НИР, исполняемая роль</td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                    2018 г.
                </td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Отчет о НИР «Исследование вопросов разработки предложений по
                    оборудованию учебных подразделений ВАС техникой и имуществом связи,
                    УТС и специальным программным обеспечением в рамках реализации
                    Государственной программы вооружения 2020-2027 годов», г. СанктПетербург, ВАС, инв. № 9307, (шифр «Класс-учеба» заключительный Книга
                    1 исх. 0926 от 20.11.2018 г.), исполнитель раздела 1.11.1 «Анализ
                    электромагнитной обстановки на антенных площадках в/г № 123 и оценка
                    возможности по размещению станции спутниковой связи Р-442-ОС».
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                    в 2017-
                    2019 гг.
                </td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Подготовка команд (обучающихся) к участию в конкурсах
                    «Уверенный прием», участники в личном первенстве взяли I-III
                    призовые места, в командном – II место.
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                    2018 г.
                </td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Отчет о НИР «Исследование вопросов разработки предложений по
                    оборудованию учебных подразделений ВАС техникой и имуществом связи,
                    УТС и специальным программным обеспечением в рамках реализации
                    Государственной программы вооружения 2020-2027 годов», г. СанктПетербург, ВАС, инв. № 9307, (шифр «Класс-учеба» заключительный Книга
                    1 исх. 0926 от 20.11.2018 г.), исполнитель раздела 3.1 «Разработка
                    предложений по перечню и количественному составу современной и
                    перспективной техники и имущества связи».
                </td>
            </tr>
        </table>
    </div>
    <p style="text-align:left;
                      width: 600px;
                      margin: 0 auto;">5.3. Другие значимые достижения в области научно-методической
        деятельности</p>
    <div class="table" style="width: 610px;
                                      margin: 0 auto;
                                      margin-top: 20px;">
        <table style="border: 1px solid #000;
                              border-collapse: collapse;
                              text-align:center;
                              margin: 0 auto;">
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;">Дата</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Содержание достижения</td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                    2018 г.
                </td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Отчет о НИР «Исследование вопросов разработки предложений по
                    оборудованию учебных подразделений ВАС техникой и имуществом связи,
                    УТС и специальным программным обеспечением в рамках реализации
                    Государственной программы вооружения 2020-2027 годов», г. СанктПетербург, ВАС, инв. № 9307, (шифр «Класс-учеба» заключительный Книга
                    1 исх. 0926 от 20.11.2018 г.), исполнитель раздела 1.11.1 «Анализ
                    электромагнитной обстановки на антенных площадках в/г № 123 и оценка
                    возможности по размещению станции спутниковой связи Р-442-ОС».
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                    04.2022 г.
                </td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">1. Разработано и издано учебное пособие «Станция спутниковой
                    связи Р-441-ОВ стационарного и контейнерного вариантов
                    исполнения», 2022 г.
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                    04.2022 г.
                </td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">2. Разработаны УММ для проведения занятий с начальниками связи
                    бтгр по работе на носимых станциях спутниковой связи Р-438М,
                    Р-438Н и Р-444ПТН, для проведения занятий по дисциплинам
                    с новыми группами переподготовки квалификации: 16202 –
                    командиры рот ТЗУ; 16203 – командиры рот связи (батареи
                    управления) видов ВС, родов ВС и специальных войск; 16204 –
                    начальников центров, командиров рот бригад управления; 16207 –
                    начальников пунктов управления связью, узлов связи.
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                    12.2021 г.
                </td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">3. Разработаны рабочие программы и тематические планы по ФГОС
                    поколения 3++ по дисциплинам специализации ДС.1.О «Системы
                    специальной спутниковой связи», ДС.2.О «Элементы трактов СВЧ
                    средств и комплексов спутниковой связи», ДС.3.О «Работа на
                    средствах связи».
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                    2019-2020 г.
                </td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">4. Руководство профессиональным становлением начинающего
                    преподавателя кафедры майора Мешкова И.С.
                </td>
            </tr>
        </table>
    </div>
    <h2 style="text-align:center;font-size: 16px;">6. Спортивная деятельность</h2>
    <div class="table" style="width: 610px;
                                      margin: 0 auto;
                                      margin-top: 20px;">
        <table style="border: 1px solid #000;
                              border-collapse: collapse;
                              text-align:center;
                              margin: 0 auto;">
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;">Дата</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Содержание достижения</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;">Количество уч.</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">организаторы</td>
            </tr>
            <tr>

                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                    10.2021 г.
                </td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Победитель конкурсного отбора среди молодых ученых, молодых
                    кандидатов наук среди вузов, отраслевых и академических
                    институтов, расположенных на территории Санкт-Петербурга
                    в возрасте до 35 лет в 2020 году по направлению «Связь».
                </td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                    32
                </td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                    12.2020 г.
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                    10.2021 г.
                </td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">На основании распоряжения от 27.10.2021 г. № 866-р Комитета по
                    физической культуре и спорту по г. Санкт-Петербургу присвоен
                    I спортивный разряд по военно-прикладному спорту (ВТ-4).
                </td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                    342
                </td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                    10.2021 г.
                </td>
            </tr>
        </table>
    </div>
    <h2 style="text-align:center;font-size: 16px;">7. Поощрения</h2>
    <div class="table" style="width: 610px;
                                      margin: 0 auto;
                                      margin-top: 20px;">
        <table style="border: 1px solid #000;
                              border-collapse: collapse;
                              text-align:center;
                              margin: 0 auto;">
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;">Объявил</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Содержание</td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                    начальник академии
                </td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Грамота за образцовое исполнение служебных обязанностей и проявленные при этом усердие, старание и инициативу
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                    командир группы
                </td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                    Благодарность за отличную подготовку к семинару по дисциплине РХБЗ.
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                    командир группы
                </td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Благодарность за отличную подготовку к контрольной работе по дисциплине "математика".
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                    12.2021 г.
                </td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">3. Разработаны рабочие программы и тематические планы по ФГОС
                    поколения 3++ по дисциплинам специализации ДС.1.О «Системы
                    специальной спутниковой связи», ДС.2.О «Элементы трактов СВЧ
                    средств и комплексов спутниковой связи», ДС.3.О «Работа на
                    средствах связи».
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                    2019-2020 г.
                </td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">4. Руководство профессиональным становлением начинающего
                    преподавателя кафедры майора Мешкова И.С.
                </td>
            </tr>
        </table>
    </div>
    <h2 style="text-align:center;font-size: 16px;">8. Взыскания</h2>
    <div class="table" style="width: 610px;
                                      margin: 0 auto;
                                      margin-top: 20px;">
        <table style="border: 1px solid #000;
                              border-collapse: collapse;
                              text-align:center;
                              margin: 0 auto;">
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;">Объявил</td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Содержание</td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                    2018 г.
                </td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Отчет о НИР «Исследование вопросов разработки предложений по
                    оборудованию учебных подразделений ВАС техникой и имуществом связи,
                    УТС и специальным программным обеспечением в рамках реализации
                    Государственной программы вооружения 2020-2027 годов», г. СанктПетербург, ВАС, инв. № 9307, (шифр «Класс-учеба» заключительный Книга
                    1 исх. 0926 от 20.11.2018 г.), исполнитель раздела 1.11.1 «Анализ
                    электромагнитной обстановки на антенных площадках в/г № 123 и оценка
                    возможности по размещению станции спутниковой связи Р-442-ОС».
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                    04.2022 г.
                </td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">1. Разработано и издано учебное пособие «Станция спутниковой
                    связи Р-441-ОВ стационарного и контейнерного вариантов
                    исполнения», 2022 г.
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                    04.2022 г.
                </td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">2. Разработаны УММ для проведения занятий с начальниками связи
                    бтгр по работе на носимых станциях спутниковой связи Р-438М,
                    Р-438Н и Р-444ПТН, для проведения занятий по дисциплинам
                    с новыми группами переподготовки квалификации: 16202 –
                    командиры рот ТЗУ; 16203 – командиры рот связи (батареи
                    управления) видов ВС, родов ВС и специальных войск; 16204 –
                    начальников центров, командиров рот бригад управления; 16207 –
                    начальников пунктов управления связью, узлов связи.
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                    12.2021 г.
                </td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">3. Разработаны рабочие программы и тематические планы по ФГОС
                    поколения 3++ по дисциплинам специализации ДС.1.О «Системы
                    специальной спутниковой связи», ДС.2.О «Элементы трактов СВЧ
                    средств и комплексов спутниковой связи», ДС.3.О «Работа на
                    средствах связи».
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                    2019-2020 г.
                </td>
                <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">4. Руководство профессиональным становлением начинающего
                    преподавателя кафедры майора Мешкова И.С.
                </td>
            </tr>
        </table>
    </div>
    <h2 style="text-align:center;font-size: 16px;">9. Копии подтверждающих документов
        Диплом о высшем образовании</h2>
</div>
</body>
</html>
