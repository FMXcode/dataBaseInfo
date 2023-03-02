<?php
//variable_srw - Участие в НИР;
$date_srw1 = $_POST["date_srw"];
$info_srw1 = $_POST["info_srw"];
$date_srw2 = $_POST["date_srw"];
$info_srw2 = $_POST["info_srw"];
$date_srw3 = $_POST["date_srw"];
$info_srw3 = $_POST["info_srw"];
$date_srw4 = $_POST["date_srw"];
$info_srw4 = $_POST["info_srw"];
$date_srw5 = $_POST["date_srw"];
$info_srw5 = $_POST["info_srw"];
$date_srw6 = $_POST["date_srw"];
$info_srw6 = $_POST["info_srw"];

mysqli_query($connect, "INSERT INTO `variable_srw` (`id`, `srw_id`, `date_srw`, `info_srw`) 
VALUES (NULL, '$user_id', '$date_srw1', '$info_srw1')");
mysqli_query($connect, "INSERT INTO `variable_srw` (`id`, `srw_id`, `date_srw`, `info_srw`) 
VALUES (NULL, '$user_id', '$date_srw2', '$info_srw2')");
mysqli_query($connect, "INSERT INTO `variable_srw` (`id`, `srw_id`, `date_srw`, `info_srw`) 
VALUES (NULL, '$user_id', '$date_srw3', '$info_srw3')");
mysqli_query($connect, "INSERT INTO `variable_srw` (`id`, `srw_id`, `date_srw`, `info_srw`) 
VALUES (NULL, '$user_id', '$date_srw4', '$info_srw4')");
mysqli_query($connect, "INSERT INTO `variable_srw` (`id`, `srw_id`, `date_srw`, `info_srw`) 
VALUES (NULL, '$user_id', '$date_srw5', '$info_srw5')");
mysqli_query($connect, "INSERT INTO `variable_srw` (`id`, `srw_id`, `date_srw`, `info_srw`) 
VALUES (NULL, '$user_id', '$date_srw6', '$info_srw6')");

//variable_other_srw - Другие значимые достижения в области научно-методической деятельности
$date_other1 = $_POST["date_other"];
$info_srw_other1 = $_POST["info_srw_other"];
$date_other2 = $_POST["date_other"];
$info_srw_other2 = $_POST["info_srw_other"];
$date_other3 = $_POST["date_other"];
$info_srw_other3 = $_POST["info_srw_other"];
$date_other4 = $_POST["date_other"];
$info_srw_other4 = $_POST["info_srw_other"];
$date_other5 = $_POST["date_other"];
$info_srw_other5 = $_POST["info_srw_other"];
$date_other6 = $_POST["date_other"];
$info_srw_other6 = $_POST["info_srw_other"];

mysqli_query($connect, "INSERT INTO `variable_other_srw` (`id`, `srw_id`, `date_other`, `info_srw_other`) 
VALUES (NULL, NULL, '$date_other1', '$info_srw_other1')");
mysqli_query($connect, "INSERT INTO `variable_other_srw` (`id`, `srw_id`, `date_other`, `info_srw_other`) 
VALUES (NULL, NULL, '$date_other2', '$info_srw_other2')");
mysqli_query($connect, "INSERT INTO `variable_other_srw` (`id`, `srw_id`, `date_other`, `info_srw_other`) 
VALUES (NULL, NULL, '$date_other3', '$info_srw_other3')");
mysqli_query($connect, "INSERT INTO `variable_other_srw` (`id`, `srw_id`, `date_other`, `info_srw_other`) 
VALUES (NULL, NULL, '$date_other4', '$info_srw_other4')");
mysqli_query($connect, "INSERT INTO `variable_other_srw` (`id`, `srw_id`, `date_other`, `info_srw_other`) 
VALUES (NULL, NULL, '$date_other5', '$info_srw_other5')");
mysqli_query($connect, "INSERT INTO `variable_other_srw` (`id`, `srw_id`, `date_other`, `info_srw_other`) 
VALUES (NULL, NULL, '$date_other6', '$info_srw_other6')");