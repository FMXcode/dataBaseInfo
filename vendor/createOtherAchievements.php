<?php
//иные достижения - other_achiev

$date_achiev1 = $_POST['date_achiev1'];
$info_achiew1 = $_POST['info_achiew1'];

$date_achiev2 = $_POST['date_achiev2'];
$info_achiew2 = $_POST['info_achiew2'];

$date_achiev3 = $_POST['date_achiev3'];
$info_achiew3 = $_POST['info_achiew3'];

$date_achiev4 = $_POST['date_achiev4'];
$info_achiew4 = $_POST['info_achiew4'];

$date_achiev5 = $_POST['date_achiev5'];
$info_achiew5 = $_POST['info_achiew5'];

$date_achiev6 = $_POST['date_achiev6'];
$info_achiew6 = $_POST['info_achiew6'];

mysqli_query($connect, "INSERT INTO `other_achiev` (`id`, `achiev_id`, `date_achiev`, `info_achiew`) 
                            VALUES (NULL, '$user_id', '$date_achiev1', '$info_achiew1')");
mysqli_query($connect, "INSERT INTO `other_achiev` (`id`, `achiev_id`, `date_achiev`, `info_achiew`) 
                            VALUES (NULL, '$user_id', '$date_achiev2', '$info_achiew2')");
mysqli_query($connect, "INSERT INTO `other_achiev` (`id`, `achiev_id`, `date_achiev`, `info_achiew`) 
                            VALUES (NULL, '$user_id', '$date_achiev3', '$info_achiew3')");
mysqli_query($connect, "INSERT INTO `other_achiev` (`id`, `achiev_id`, `date_achiev`, `info_achiew`) 
                            VALUES (NULL, '$user_id', '$date_achiev4', '$info_achiew4')");
mysqli_query($connect, "INSERT INTO `other_achiev` (`id`, `achiev_id`, `date_achiev`, `info_achiew`) 
                            VALUES (NULL, '$user_id', '$date_achiev5', '$info_achiew5')");
mysqli_query($connect, "INSERT INTO `other_achiev` (`id`, `achiev_id`, `date_achiev`, `info_achiew`) 
                            VALUES (NULL, '$user_id', '$date_achiev6', '$info_achiew6')");