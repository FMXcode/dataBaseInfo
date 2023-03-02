<?php
//variable_sport - Спортивная деятельность;
$competition_name = $_POST["competition_name"];
$results = $_POST["results"];
$Number_of_participants = $_POST["Number_of_participants"];
$organizers = $_POST["organizers"];

mysqli_query($connect, "INSERT INTO `variable_sport` (`id`, `sport_id`, `competition_name`, `results`, `Number_of_participants`, `organizers`) 
                            VALUES (NULL, '$user_id', '$competition_name', '$results', '$Number_of_participants', '$organizers')");

