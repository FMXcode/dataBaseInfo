<?php
require_once '../config/connect.php';

$person_id = $_GET['id'];
$person = mysqli_query($connect, "SELECT * FROM `general_information` WHERE user_id = 142;");
$person = mysqli_fetch_assoc($person);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/headerMenu.css">
    <link rel="stylesheet" href="../style/showPerson.css">
    <link rel="stylesheet" href="../style/fonts">
    <title>Document</title>
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
</head>
<body>
<?php
require_once "../components/headerForShowPerson.php";
?>
<div class="container" style="background-color:  #6e8c45; padding: 20px 10px; margin: 0 auto;">
    <div class="wapper__block" style="background-color: #3b4c25;border-radius: 5px;width: 98%;margin: 0 auto; padding: 10px;">
        <div class="wapper_port" style="background-color: white; padding: 100px; border-radius: 10px;width: 800px;margin: 0 auto;">
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
                                              font-size: 18px;width: 650px;margin: 0 auto;">Доцент кафедры Военной академии связи, 12 кафедры (военных систем
                    космической, радиорелейной, тропосферной связи и навигации)
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
                <div class="table" style="width: 610px;margin: 0 auto;">
                    <table style="border: 1px solid #000;
                              border-collapse: collapse;
                              text-align:center;
                              margin: 0 auto;">
                        <tr>
                            <td rowspan="5"><img src="../photo/Slice%208.svg" alt=""></td>
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
                                      margin-bottom: 15px;">(ученая степень, ученое звание)
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
                                   padding: 5px;text-align:left;">Окончил: </td>
                        <td style="border: 1px solid #000;
                                   border-collapse: collapse;
                                   padding: 5px">Ульяновское высшее военное инженерное училище связи
                            (военный институт) им. Г.К. Орджоникидзе в 2007 году
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                                   border-collapse: collapse;
                                   padding: 5px">
                            Специальность
                            <br>
                            (квалификация):
                        </td>
                        <td style="border: 1px solid #000;
                    border-collapse: collapse;
                    padding: 5px">Инженер по специальности «Радио, радиовещание
                            и телевидение»</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                                   border-collapse: collapse;
                                   padding: 5px">
                            Окончил:
                        </td>
                        <td style="border: 1px solid #000;
                    border-collapse: collapse;
                    padding: 5px">Адъюнктуру при Военной академии связи в 2012 году
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                                   border-collapse: collapse;
                                   padding: 5px">
                            Специальность
                            <br>
                            (квалификация):
                        </td>
                        <td style="border: 1px solid #000;
                    border-collapse: collapse;
                    padding: 5px">Преподаватель высшей школы
                        </td>
                    </tr>
                </table>
            </div>
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
                               padding: 5px;text-align:left;">Научно-педагогический стаж</td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">13 лет
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Научная специальность (шифр и
                            наименование) и тема диссертации
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">20.01.09 «Военные системы
                            управления, связи и навигации», тема
                            диссертации «Методика обоснования
                            сигнально-кодовых конструкций для
                            радиолиний спутниковой связи
                            военного назначения»</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Наличие государственных наград
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">нет
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Участие в боевых действиях
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">не участвовал
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Наличие почетных званий
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">нет
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Дата последнего повышения
                            квалификации (переподготовки)
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">с 12.04.21 г. по 26.04.21 г.
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Количество научных, методических и
                            учебных трудов
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">более 40
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">
                            Индекс Хирша
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">1
                        </td>
                    </tr>
                </table>
            </div>
            <h2 style="text-align:center;font-size: 16px;">2. Послужной список</h2>
            <div class="table" style="margin-top: 25px;
                                      width: 610px;
                                      margin: 0 auto;
                                      margin-top: 20px;">
                <table style="border: 1px solid #000;
                              border-collapse: collapse;
                              text-align:center;
                              margin: 0 auto;
                             ">
                    <tr>
                        <td colspan="2" style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;text-align:center;"><b>Месяц и год</b></td>
                        <td rowspan="2" style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;text-align:center;"><b>Должность с указанием учреждения,
                                организации, предприятия, а также
                                министерства (ведомства)</b></td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;text-align:center;">поступления</td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px 30px;
                               text-align:center;">ухода</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;">01.08.2002 г.</td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;
                               font-size: 14px;">16.06.2007 г.</td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;">Курсант Ульяновского филиала военного
                            университета связи</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;
                               font-size: 14px;">16.06.2007 г.</td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;
                               font-size: 14px;">01.09.2009 г</td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;">Инженер отделения отдела антенных устройств
                            войсковой части 22285</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;
                               font-size: 14px;">16.06.2007 г.</td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;
                               font-size: 14px;">01.09.2009 г</td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;">Инженер отделения отдела антенных устройств
                            войсковой части 22285</td>
                    </tr><tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;
                               font-size: 14px;">16.06.2007 г.</td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;
                               font-size: 14px;">01.09.2009 г</td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;">Инженер отделения отдела антенных устройств
                            войсковой части 22285</td>
                    </tr><tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;
                               font-size: 14px;">16.06.2007 г.</td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;
                               font-size: 14px;">01.09.2009 г</td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;">Инженер отделения отдела антенных устройств
                            войсковой части 22285</td>
                    </tr><tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;
                               font-size: 14px;">16.06.2007 г.</td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;
                               font-size: 14px;">01.09.2009 г</td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;">Инженер отделения отдела антенных устройств
                            войсковой части 22285</td>
                    </tr>
                </table>
            </div>
            <h2 style="text-align:center;
                        font-size: 16px;">3. Учебная работа</h2>
            <p style="text-align:left;
                      width: 600px;
                      margin: 0 auto;">3.1. Преподаваемые дисциплины.</p>
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
                               padding: 5px;">Наименование
                            преподаваемых
                            дисциплин</td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;
                               font-size: 14px;">Уровень образования</td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;">Средний балл
                            обучающихся</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;
                               font-size: 14px;">1. «Системы
                            специальной
                            спутниковой связи»</td>
                        <td rowspan="3" style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;
                               font-size: 14px;">Высшее образование,
                            направление подготовки
                            (специальность) 11.05.04
                            «Инфокоммуникационные
                            технологии и системы
                            специальной связи», по военной
                            специальности: «Применение
                            подразделений и эксплуатация
                            систем спутниковой связи»</td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;">4,77</td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;
                               font-size: 14px;">2. «Работа на
                            средствах связи»
                        </td>

                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;">4,77</td>
                    </tr><tr>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;
                               font-size: 14px;">3. «Радиорелейные,
                            тропосферные и
                            спутниковые системы
                            передачи
                            специального
                            назначения»</td>

                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px;">4,62</td>
                    </tr>
                </table>
            </div>
            <p style="text-align:left;
                      width: 600px;
                      margin: 0 auto;
                      margin-top: 20px;">3.2. Другие значимые достижения в области образовательной
                деятельности.</p>
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
                            с 2012 г.
                            по н. в.
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Руководство выпускными квалификационными работами
                            (свыше 20 ВКР), средний балл – 4,8.
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
                            с 2019 г.
                            по
                            настоящее
                            время
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Соавтор 6 учебных пособий и 1 учебника. Принимал активное
                            участие в 15 НИР. За последние 3 года опубликовал 3 учебных
                            пособия, 1 учебник, 11 статьей в российских рецензируемых
                            научных журналах, из которых 7 статей по перечню ВАК,
                            является разработчиком и соавтором пяти фрагментов
                            автоматизированных обучающих курсов.
                        </td>
                    </tr>
                </table>
            </div>
            <h2 style="text-align:center;font-size: 16px;">4. Научно-методическая работа</h2>
            <p style="text-align:left;
                      width: 600px;
                      margin: 0 auto;">4.1. Публикации за последние 5 лет</p>
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
                <p>4.2. Участие в НИР</p>
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
                      margin: 0 auto;">4.4. Другие значимые достижения в области научно-методической
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
            <h2 style="text-align:center;font-size: 16px;">5. Иные достижения</h2>
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
                            12.2020 г.
                        </td>
                        <td style="border: 1px solid #000;
                               border-collapse: collapse;
                               padding: 5px">Победитель конкурсного отбора среди молодых ученых, молодых
                            кандидатов наук среди вузов, отраслевых и академических
                            институтов, расположенных на территории Санкт-Петербурга
                            в возрасте до 35 лет в 2020 году по направлению «Связь».
                            Распоряжением Комитета по науке и высшей школе от 17.09.2020
                            № 183 «О реализации постановления Правительства СанктПетербурга от 17.08.2020 № 640» и от 21.12.2020 № 276
                            «О предоставлении в 2020 году субсидий молодым ученым,
                            молодым кандидатам наук вузов, отраслевых и академических
                            институтов, расположенных на территории Санкт-Петербурга».
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
                    </tr>
                </table>
            </div>
            <h2 style="text-align:center;font-size: 16px;">6. Копии подтверждающих документов
                Диплом о высшем образовании</h2>
            <div class="button_wapper_get">
                <button type="button"><a href="../pdf-generation/converting.php">Экспортировать в pdf</a></button>
            </div>
        </div>
    </div>
</div>
<br>
</body>
</html>
