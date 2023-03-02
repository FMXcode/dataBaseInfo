<?php
//variable_penalties - Взыскания;
$announced_pen1 = $_POST["announced1"];
$content_pen1 = $_POST["content1"];
$announced_pen2 = $_POST["announced2"];
$content_pen2 = $_POST["content2"];
$announced_pen3 = $_POST["announced3"];
$content_pen3 = $_POST["content3"];
$announced_pen4 = $_POST["announced4"];
$content_pen4 = $_POST["content4"];
$announced_pen5 = $_POST["announced5"];
$content_pen5 = $_POST["content5"];
$announced_pen6 = $_POST["announced6"];
$content_pen6 = $_POST["content6"];

mysqli_query($connect, "INSERT INTO `variable_penalties` (`id`, `penalties_id`, `announced`, `content`) 
                            VALUES (NULL, '$user_id', '$announced_pen1', '$content_pen1')");
mysqli_query($connect, "INSERT INTO `variable_penalties` (`id`, `penalties_id`, `announced`, `content`) 
                            VALUES (NULL, '$user_id', '$announced_pen2', '$content_pen2')");
mysqli_query($connect, "INSERT INTO `variable_penalties` (`id`, `penalties_id`, `announced`, `content`) 
                            VALUES (NULL, '$user_id', '$announced_pen3', '$content_pen3')");
mysqli_query($connect, "INSERT INTO `variable_penalties` (`id`, `penalties_id`, `announced`, `content`) 
                            VALUES (NULL, '$user_id', '$announced_pen4', '$content_pen4')");
mysqli_query($connect, "INSERT INTO `variable_penalties` (`id`, `penalties_id`, `announced`, `content`) 
                            VALUES (NULL, '$user_id', '$announced_pen5', '$content_pen5')");
mysqli_query($connect, "INSERT INTO `variable_penalties` (`id`, `penalties_id`, `announced`, `content`) 
                            VALUES (NULL, '$user_id', '$announced_pen6', '$content_pen6')");

