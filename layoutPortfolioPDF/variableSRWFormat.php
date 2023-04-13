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
        body {
            font-family: "DejaVu Sans";
        }

        /*font-family: "DejaVu Sans";*/
    </style>
    <link rel="stylesheet" href="fonts/ofont.ru_Times%20New%20Roman.ttf">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@200;500;700&family=Jura:wght@500;600;700&family=Open+Sans&family=Roboto:ital,wght@0,500;1,400;1,700&display=swap"
        rel="stylesheet">
</head>
<body>
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
                       margin-top: 150px;">Научно-исследовательская работа</h1>
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
<p>Участие в НИР</p>
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
</body>
</html>