<?php

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
$photo_person = $_POST['photo_person'];

mysqli_query($connect, "INSERT INTO `general_information` (`user_id`, `rank`, `name`, `surname`, `patronymic`, `dateBirth`, `position`, `graduated`, `speciality`, `scientific_specialty`) 
                                VALUES (NULL, '$rank', '$name', '$surname', '$patronymic', '$dateBirth', '$position', '$graduated', '$speciality', '$scientific_specialty')");

$user_id = mysqli_insert_id($connect);
