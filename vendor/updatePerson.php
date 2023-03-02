<?php

require_once '../config/connect.php';

$person_id = $_POST['user_id'];

$rank = $_POST['rank'];
$surname = $_POST['surname'];
$name = $_POST['name'];
$patronymic = $_POST['patronymic'];
$dateBirth = $_POST['dateBirth'];
$position = $_POST['position'];
$graduated = $_POST['graduated'];
$speciality = $_POST['speciality'];
$scientific_specialty = $_POST['scientific_specialty'];

mysqli_query($connect, "UPDATE `general_information` SET `rank` = '$rank', `name` = '$name', `surname` = '$surname', `patronymic` = '$patronymic', `dateBirth` = '$dateBirth', `position` = '$position', `graduated` = '$graduated', `speciality` = '$speciality', `scientific_specialty` = '$scientific_specialty' WHERE user_id = '$person_id'");
header('location: /');

