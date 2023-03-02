<?php

$disciplines1 = $_POST['disciplines1'];
$level_education1 = $_POST['level_education1'];
$grade1 = $_POST['grade1'];

$disciplines2 = $_POST['disciplines2'];
$level_education2 = $_POST['level_education2'];
$grade2 = $_POST['grade2'];

$disciplines3 = $_POST['disciplines3'];
$level_education3 = $_POST['level_education3'];
$grade3 = $_POST['grade3'];

mysqli_query($connect, "INSERT INTO `academic_work` (`id`, `work_id`, `disciplines`, `level_education`, `grade`) VALUES (NULL, '$user_id', '$disciplines1', '$level_education1', '$grade1')");
mysqli_query($connect, "INSERT INTO `academic_work` (`id`, `work_id`, `disciplines`, `level_education`, `grade`) VALUES (NULL, '$user_id', '$disciplines2', '$level_education2', '$grade2')");
mysqli_query($connect, "INSERT INTO `academic_work` (`id`, `work_id`, `disciplines`, `level_education`, `grade`) VALUES (NULL, '$user_id', '$disciplines3', '$level_education3', '$grade3')");
