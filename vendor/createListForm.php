<?php

$admissionStart1 = $_POST['admissionStart1'];
$admissionFinish1 = $_POST['admissionFinish1'];
$position1 = $_POST['position1'];

$admissionStart2 = $_POST['admissionStart2'];
$admissionFinish2 = $_POST['admissionFinish2'];
$position2 = $_POST['position2'];

$admissionStart3 = $_POST['admissionStart3'];
$admissionFinish3 = $_POST['admissionFinish3'];
$position3 = $_POST['position3'];

$admissionStart4 = $_POST['admissionStart4'];
$admissionFinish4 = $_POST['admissionFinish4'];
$position4 = $_POST['position4'];

$admissionStart5 = $_POST['admissionStart5'];
$admissionFinish5 = $_POST['admissionFinish5'];
$position5 = $_POST['position5'];

$admissionStart6 = $_POST['admissionStart6'];
$admissionFinish6 = $_POST['admissionFinish6'];
$position6 = $_POST['position6'];

$admissionStart7 = $_POST['admissionStart7'];
$admissionFinish7 = $_POST['admissionFinish7'];
$position7 = $_POST['position7'];

$admissionStart8 = $_POST['admissionStart8'];
$admissionFinish8 = $_POST['admissionFinish8'];
$position8 = $_POST['position8'];

$admissionStart9 = $_POST['admissionStart9'];
$admissionFinish9 = $_POST['admissionFinish9'];
$position9 = $_POST['position9'];

$admissionStart10 = $_POST['admissionStart10'];
$admissionFinish10 = $_POST['admissionFinish10'];
$position10 = $_POST['position10'];

mysqli_query($connect, "INSERT INTO `person_list` (`id`, `list_id`, `start_date`, `finish_date`, `position`) VALUES (NULL, '$user_id', '$admissionStart1', '$admissionFinish1', '$position1')");
mysqli_query($connect, "INSERT INTO `person_list` (`id`, `list_id`, `start_date`, `finish_date`, `position`) VALUES (NULL, '$user_id', '$admissionStart2', '$admissionFinish2', '$position2')");
mysqli_query($connect, "INSERT INTO `person_list` (`id`, `list_id`, `start_date`, `finish_date`, `position`) VALUES (NULL, '$user_id', '$admissionStart3', '$admissionFinish3', '$position3')");
mysqli_query($connect, "INSERT INTO `person_list` (`id`, `list_id`, `start_date`, `finish_date`, `position`) VALUES (NULL, '$user_id', '$admissionStart4', '$admissionFinish4', '$position4')");
mysqli_query($connect, "INSERT INTO `person_list` (`id`, `list_id`, `start_date`, `finish_date`, `position`) VALUES (NULL, '$user_id', '$admissionStart5', '$admissionFinish5', '$position5')");
mysqli_query($connect, "INSERT INTO `person_list` (`id`, `list_id`, `start_date`, `finish_date`, `position`) VALUES (NULL, '$user_id', '$admissionStart6', '$admissionFinish6', '$position6')");
mysqli_query($connect, "INSERT INTO `person_list` (`id`, `list_id`, `start_date`, `finish_date`, `position`) VALUES (NULL, '$user_id', '$admissionStart7', '$admissionFinish7', '$position7')");
mysqli_query($connect, "INSERT INTO `person_list` (`id`, `list_id`, `start_date`, `finish_date`, `position`) VALUES (NULL, '$user_id', '$admissionStart8', '$admissionFinish8', '$position8')");
mysqli_query($connect, "INSERT INTO `person_list` (`id`, `list_id`, `start_date`, `finish_date`, `position`) VALUES (NULL, '$user_id', '$admissionStart9', '$admissionFinish9', '$position9')");
mysqli_query($connect, "INSERT INTO `person_list` (`id`, `list_id`, `start_date`, `finish_date`, `position`) VALUES (NULL, '$user_id', '$admissionStart10', '$admissionFinish10', '$position10')");
