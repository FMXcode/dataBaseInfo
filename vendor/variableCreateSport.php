<?php
//variable_sport - Спортивная деятельность;
$competition_name = $_POST["competition_name"];
$results = $_POST["results"];
$Number_of_participants = $_POST["Number_of_participants"];
$organizers = $_POST["organizers"];

$competition_name1 = $_POST["competition_name"];
$results1 = $_POST["results"];
$Number_of_participants1 = $_POST["Number_of_participants"];
$organizers1 = $_POST["organizers"];

$competition_name2 = $_POST["competition_name2"];
$results2 = $_POST["results2"];
$Number_of_participants2 = $_POST["Number_of_participants2"];
$organizers2 = $_POST["organizers2"];

$competition_name3 = $_POST["competition_name3"];
$results3 = $_POST["results3"];
$Number_of_participants3 = $_POST["Number_of_participants3"];
$organizers3 = $_POST["organizers3"];

mysqli_query($connect, "INSERT INTO `variable_sport` (`id`, `sport_id`, `competition_name`, `results`, `Number_of_participants`, `organizers`) 
                            VALUES (NULL, '$user_id', '$competition_name', '$results', '$Number_of_participants', '$organizers')");
mysqli_query($connect, "INSERT INTO `variable_sport` (`id`, `sport_id`, `competition_name`, `results`, `Number_of_participants`, `organizers`) 
                            VALUES (NULL, '$user_id', '$competition_name1', '$results1', '$Number_of_participants1', '$organizers1')");
mysqli_query($connect, "INSERT INTO `variable_sport` (`id`, `sport_id`, `competition_name`, `results`, `Number_of_participants`, `organizers`) 
                            VALUES (NULL, '$user_id', '$competition_name2', '$results2', '$Number_of_participants2', '$organizers2')");
mysqli_query($connect, "INSERT INTO `variable_sport` (`id`, `sport_id`, `competition_name`, `results`, `Number_of_participants`, `organizers`) 
                            VALUES (NULL, '$user_id', '$competition_name3', '$results3', '$Number_of_participants3', '$organizers3')");



