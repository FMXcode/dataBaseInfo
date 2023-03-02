<?php
//variable_Incentives - Поощренияж;
$announced1 = $_POST["announced1"];
$content1 = $_POST["content1"];
$announced2 = $_POST["announced2"];
$content2 = $_POST["content2"];
$announced3 = $_POST["announced3"];
$content3 = $_POST["content3"];
$announced4 = $_POST["announced4"];
$content4 = $_POST["content4"];
$announced5 = $_POST["announced5"];
$content5 = $_POST["content5"];
$announced6 = $_POST["announced6"];
$content6 = $_POST["content6"];

mysqli_query($connect, "INSERT INTO `variable_Incentives` (`id`, `Incentives_id`, `announced`, `content`) 
                            VALUES (NULL, '$user_id', '$announced1', '$content1')");
mysqli_query($connect, "INSERT INTO `variable_Incentives` (`id`, `Incentives_id`, `announced`, `content`) 
                            VALUES (NULL, '$user_id', '$announced2', '$content2')");
mysqli_query($connect, "INSERT INTO `variable_Incentives` (`id`, `Incentives_id`, `announced`, `content`) 
                            VALUES (NULL, '$user_id', '$announced3', '$content3')");
mysqli_query($connect, "INSERT INTO `variable_Incentives` (`id`, `Incentives_id`, `announced`, `content`) 
                            VALUES (NULL, '$user_id', '$announced4', '$content4')");
mysqli_query($connect, "INSERT INTO `variable_Incentives` (`id`, `Incentives_id`, `announced`, `content`) 
                            VALUES (NULL, '$user_id', '$announced5', '$content5')");
mysqli_query($connect, "INSERT INTO `variable_Incentives` (`id`, `Incentives_id`, `announced`, `content`) 
                            VALUES (NULL, '$user_id', '$announced6', '$content6')");