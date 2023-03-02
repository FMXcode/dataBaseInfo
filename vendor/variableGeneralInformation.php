<?php
//variable_general_information - Общие сведения;
$speciality = $_POST["speciality"];
$specialization = $_POST["specialization"];
$military_specialty = $_POST["military_specialty"];
$gualification = $_POST["gualification"];
$date_birth = $_POST["dateBirth"];
$place_birth = $_POST["placeBirth"];
$home_address = $_POST["homeAddress"];
$education = $_POST["education"];

mysqli_query($connect, "INSERT INTO `variable_general_information` (`user_id`, `speciality`, `specialization`, `military_specialty`, `gualification`, `date_birth`, `place_birth`, `home_address`, `education`) 
                            VALUES (NULL, '$speciality', '$specialization', '$military_specialty', '$gualification', '$date_birth', '$place_birth', '$home_address', '$education')");

$user_id = mysqli_insert_id($connect);

//variable_general_result - Результаты Егэ;
$res_rus = $_POST["res_rus"];
$res_matematics = $_POST["res_matematics"];
$res_physics = $_POST["res_physics"];
$res_training = $_POST["res_training"];
$category_suitability = $_POST["category_suitability"];

mysqli_query($connect, "INSERT INTO `variable_general_result` (`id`, `result_id`, `res_rus`, `res_matematics`, `res_physics`, `res_training`, `category_suitability`) 
                            VALUES (NULL, '$user_id', '$res_rus', '$res_matematics', '$res_physics', '$res_training', '$category_suitability')");