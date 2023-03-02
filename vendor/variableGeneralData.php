<?php
//variable_general_data - Личные данные;
$rank = $_POST["rank"];
$study_group = $_POST["study_group"];
$surname = $_POST["surname"];
$name = $_POST["name"];
$second_name = $_POST["second_name"];
$job_title = $_POST["job_title"];

mysqli_query($connect, "INSERT INTO `variable_general_data` (`id`, `data_id`, `rank`, `study_group`, `surname`, `name`, `second_name`, `job_title`) 
                            VALUES (NULL, '$user_id', '$rank', '$study_group', '$surname', '$name', '$second_name', '$job_title')");
//family - семья;
$father_info = $_POST["father_info"];
$mother_info = $_POST["mother_info"];
$home_address = $_POST["home_address"];
$brothers_or_sisters = $_POST["brothers_or_sisters"];
$family_status = $_POST["family_status"];
$wife_or_husband = $_POST["wife_or_husband"];
$children = $_POST["children"];

mysqli_query($connect, "INSERT INTO `family` (`id`, `family_id`, `father_info`, `mother_info`, `home_address`, `brothers_or_sisters`, `family_status`, `wife_or_husband`, `children`) 
                            VALUES (NULL, '$user_id', '$father_info', '$mother_info', '$home_address', '$brothers_or_sisters', '$family_status', '$wife_or_husband', '$children')");