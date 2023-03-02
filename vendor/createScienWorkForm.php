<?php

//Повышение квалификации - person_training
$start_date1 = $_POST['start_date1'];
$finish_date1 = $_POST['finish_date1'];
$info1 = $_POST['info1'];

$start_date2 = $_POST['start_date2'];
$finish_date2 = $_POST['$finish_date2'];
$info2 = $_POST['info2'];


mysqli_query($connect, "INSERT INTO `person_training` (`id`, `training_id`, `start_date`, `finish_date`, `info`) 
                                VALUES (NULL, '$user_id', '$start_date1', '$finish_date1', '$info1')");
mysqli_query($connect, "INSERT INTO `person_training` (`id`, `training_id`, `start_date`, `finish_date`, `info`) 
                                VALUES (NULL, '$user_id', '$start_date2', '$finish_date2', '$info2')");

//Публикации за последние 5 лет а) - publications_educational
$name_work1 = $_POST['name_work1'];
$form_work1 = $_POST['form_work1'];
$data1 = $_POST['data1'];
$volume1 = $_POST['volume1'];
$authors1 = $_POST['authors1'];

$name_work2 = $_POST['name_work2'];
$form_work2 = $_POST['form_work2'];
$data2 = $_POST['data2'];
$volume2 = $_POST['volume2'];
$authors2 = $_POST['authors2'];

$name_work3 = $_POST['name_work3'];
$form_work3 = $_POST['form_work3'];
$data3 = $_POST['data3'];
$volume3 = $_POST['volume3'];
$authors3 = $_POST['authors3'];

$name_work4 = $_POST['name_work4'];
$form_work4 = $_POST['form_work4'];
$data4 = $_POST['data4'];
$volume4 = $_POST['volume4'];
$authors4 = $_POST['authors4'];

$name_work5 = $_POST['name_work5'];
$form_work5 = $_POST['form_work5'];
$data5 = $_POST['data5'];
$volume5 = $_POST['volume5'];
$authors5 = $_POST['authors5'];

mysqli_query($connect, "INSERT INTO `publications_educational` (`id`, `public_id`, `name_work`, `form_work`, `data`, `volume`, `authors`) 
                                VALUES (NULL, '$user_id', '$name_work1', '$form_work1', '$data1', '$volume1', '$authors1')");
mysqli_query($connect, "INSERT INTO `publications_educational` (`id`, `public_id`, `name_work`, `form_work`, `data`, `volume`, `authors`) 
                                VALUES (NULL, '$user_id', '$name_work2', '$form_work2', '$data2', '$volume2', '$authors2')");
mysqli_query($connect, "INSERT INTO `publications_educational` (`id`, `public_id`, `name_work`, `form_work`, `data`, `volume`, `authors`) 
                                VALUES (NULL, '$user_id', '$name_work3', '$form_work3', '$data3', '$volume3', '$authors3')");
mysqli_query($connect, "INSERT INTO `publications_educational` (`id`, `public_id`, `name_work`, `form_work`, `data`, `volume`, `authors`) 
                                VALUES (NULL, '$user_id', '$name_work4', '$form_work4', '$data4', '$volume4', '$authors4')");
mysqli_query($connect, "INSERT INTO `publications_educational` (`id`, `public_id`, `name_work`, `form_work`, `data`, `volume`, `authors`) 
                                VALUES (NULL, '$user_id', '$name_work5', '$form_work5', '$data5', '$volume5', '$authors5')");

//Публикации за последние 5 лет б) - publications_sciens
$name_work_sc1 = $_POST['name_work_sc1'];
$form_work_sc1 = $_POST['form_work_sc1'];
$data_sc1 = $_POST['data_sc1'];
$volume_sc1 = $_POST['volume_sc1'];
$authors_sc1 = $_POST['authors_sc1'];

$name_work_sc2 = $_POST['name_work_sc2'];
$form_work_sc2 = $_POST['form_work_sc2'];
$data_sc2 = $_POST['data_sc2'];
$volume_sc2 = $_POST['volume_sc2'];
$authors_sc2 = $_POST['authors_sc2'];

$name_work_sc3 = $_POST['name_work_sc3'];
$form_work_sc3 = $_POST['form_work_sc3'];
$data_sc3 = $_POST['data_sc3'];
$volume_sc3 = $_POST['volume_sc3'];
$authors_sc3 = $_POST['authors_sc3'];

$name_work_sc4 = $_POST['name_work_sc4'];
$form_work_sc4 = $_POST['form_work_sc4'];
$data_sc4 = $_POST['data_sc4'];
$volume_sc4 = $_POST['volume_sc4'];
$authors_sc4 = $_POST['authors_sc4'];

$name_work_sc5 = $_POST['name_work_sc5'];
$form_work_sc5 = $_POST['form_work_sc5'];
$data_sc5 = $_POST['data_sc5'];
$volume_sc5 = $_POST['volume_sc5'];
$authors_sc5 = $_POST['authors_sc5'];

$name_work_sc6 = $_POST['name_work_sc6'];
$form_work_sc6 = $_POST['form_work_sc6'];
$data_sc6 = $_POST['data_sc6'];
$volume_sc6 = $_POST['volume_sc6'];
$authors_sc6 = $_POST['authors_sc7'];

$name_work_sc7 = $_POST['name_work_sc7'];
$form_work_sc7 = $_POST['form_work_sc7'];
$data_sc7 = $_POST['data_sc7'];
$volume_sc7 = $_POST['volume_sc7'];
$authors_sc7 = $_POST['authors_sc7'];

$name_work_sc8 = $_POST['name_work_sc8'];
$form_work_sc8 = $_POST['form_work_sc8'];
$data_sc8 = $_POST['data_sc8'];
$volume_sc8 = $_POST['volume_sc8'];
$authors_sc8 = $_POST['authors_sc8'];

$name_work_sc9 = $_POST['name_work_sc9'];
$form_work_sc9 = $_POST['form_work_sc9'];
$data_sc9 = $_POST['data_sc9'];
$volume_sc9 = $_POST['volume_sc9'];
$authors_sc9 = $_POST['authors_sc9'];

$name_work_sc10 = $_POST['name_work_sc10'];
$form_work_sc10 = $_POST['form_work_sc10'];
$data_sc10 = $_POST['data_sc10'];
$volume_sc10 = $_POST['volume_sc10'];
$authors_sc10 = $_POST['authors_sc10'];


mysqli_query($connect, "INSERT INTO `publications_sciens` (`id`, `public_id`, `name_work_sc`, `form_work_sc`, `data_sc`, `volume_sc`, `authors_sc`) 
                            VALUES (NULL, '$user_id', '$name_work_sc1', '$form_work_sc1', '$data_sc1', '$volume_sc1', '$authors_sc1')");
mysqli_query($connect, "INSERT INTO `publications_sciens` (`id`, `public_id`, `name_work_sc`, `form_work_sc`, `data_sc`, `volume_sc`, `authors_sc`) 
                            VALUES (NULL, '$user_id', '$name_work_sc2', '$form_work_sc2', '$data_sc2', '$volume_sc2', '$authors_sc2')");
mysqli_query($connect, "INSERT INTO `publications_sciens` (`id`, `public_id`, `name_work_sc`, `form_work_sc`, `data_sc`, `volume_sc`, `authors_sc`) 
                            VALUES (NULL, '$user_id', '$name_work_sc3', '$form_work_sc3', '$data_sc3', '$volume_sc3', '$authors_sc3')");
mysqli_query($connect, "INSERT INTO `publications_sciens` (`id`, `public_id`, `name_work_sc`, `form_work_sc`, `data_sc`, `volume_sc`, `authors_sc`) 
                            VALUES (NULL, '$user_id', '$name_work_sc4', '$form_work_sc4', '$data_sc4', '$volume_sc4', '$authors_sc4')");
mysqli_query($connect, "INSERT INTO `publications_sciens` (`id`, `public_id`, `name_work_sc`, `form_work_sc`, `data_sc`, `volume_sc`, `authors_sc`) 
                            VALUES (NULL, '$user_id', '$name_work_sc5', '$form_work_sc5', '$data_sc5', '$volume_sc5', '$authors_sc5')");
mysqli_query($connect, "INSERT INTO `publications_sciens` (`id`, `public_id`, `name_work_sc`, `form_work_sc`, `data_sc`, `volume_sc`, `authors_sc`) 
                            VALUES (NULL, '$user_id', '$name_work_sc6', '$form_work_sc6', '$data_sc6', '$volume_sc6', '$authors_sc6')");
mysqli_query($connect, "INSERT INTO `publications_sciens` (`id`, `public_id`, `name_work_sc`, `form_work_sc`, `data_sc`, `volume_sc`, `authors_sc`) 
                            VALUES (NULL, '$user_id', '$name_work_sc7', '$form_work_sc7', '$data_sc7', '$volume_sc7', '$authors_sc7')");
mysqli_query($connect, "INSERT INTO `publications_sciens` (`id`, `public_id`, `name_work_sc`, `form_work_sc`, `data_sc`, `volume_sc`, `authors_sc`) 
                            VALUES (NULL, '$user_id', '$name_work_sc8', '$form_work_sc8', '$data_sc8', '$volume_sc8', '$authors_sc8')");
mysqli_query($connect, "INSERT INTO `publications_sciens` (`id`, `public_id`, `name_work_sc`, `form_work_sc`, `data_sc`, `volume_sc`, `authors_sc`) 
                            VALUES (NULL, '$user_id', '$name_work_sc9', '$form_work_sc9', '$data_sc9', '$volume_sc9', '$authors_sc9')");
mysqli_query($connect, "INSERT INTO `publications_sciens` (`id`, `public_id`, `name_work_sc`, `form_work_sc`, `data_sc`, `volume_sc`, `authors_sc`) 
                            VALUES (NULL, '$user_id', '$name_work_sc10', '$form_work_sc10', '$data_sc10', '$volume_sc10', '$authors_sc10')");

//Участие в НИР - SRW
$date1 = $_POST['date1'];
$info_srw1 = $_POST['info_srw1'];

$date2 = $_POST['date2'];
$info_srw2 = $_POST['info_srw2'];

$date3 = $_POST['date3'];
$info_srw3 = $_POST['info_srw3'];

$date4 = $_POST['date4'];
$info_srw4 = $_POST['info_srw4'];

$date5 = $_POST['date5'];
$info_srw5 = $_POST['info_srw5'];

$date6 = $_POST['date6'];
$info_srw6 = $_POST['info_srw6'];


mysqli_query($connect, "INSERT INTO `SRW` (`id`, `srw_id`, `date`, `info_srw`) 
                            VALUES (NULL, '$user_id', '$date1', '$info_srw1')");
mysqli_query($connect, "INSERT INTO `SRW` (`id`, `srw_id`, `date`, `info_srw`) 
                            VALUES (NULL, '$user_id', '$date2', '$info_srw2')");
mysqli_query($connect, "INSERT INTO `SRW` (`id`, `srw_id`, `date`, `info_srw`) 
                            VALUES (NULL, '$user_id', '$date3', '$info_srw3')");
mysqli_query($connect, "INSERT INTO `SRW` (`id`, `srw_id`, `date`, `info_srw`) 
                            VALUES (NULL, '$user_id', '$date4', '$info_srw4')");
mysqli_query($connect, "INSERT INTO `SRW` (`id`, `srw_id`, `date`, `info_srw`) 
                            VALUES (NULL, '$user_id', '$date5', '$info_srw5')");
mysqli_query($connect, "INSERT INTO `SRW` (`id`, `srw_id`, `date`, `info_srw`) 
                            VALUES (NULL, '$user_id', '$date6', '$info_srw6')");
//Другие значимые достижения в области научно-методической деятельности - other_srw
$date_other1 = $_POST['date_other1'];
$info_srw_other1 = $_POST['info_srw_other1'];

$date_other2 = $_POST['date_other2'];
$info_srw_other2 = $_POST['info_srw_other2'];

$date_other3 = $_POST['date_other3'];
$info_srw_other3 = $_POST['info_srw_other3'];

$date_other4 = $_POST['date_other4'];
$info_srw_other4 = $_POST['info_srw_other4'];

$date_other5 = $_POST['date_other5'];
$info_srw_other5 = $_POST['info_srw_other5'];

$date_other6 = $_POST['date_other6'];
$info_srw_other6 = $_POST['info_srw_other6'];


mysqli_query($connect, "INSERT INTO `other_srw` (`id`, `srw_id`, `date_other`, `info_srw_other`) 
                            VALUES (NULL, '$user_id', '$date_other1', '$info_srw_other1')");
mysqli_query($connect, "INSERT INTO `other_srw` (`id`, `srw_id`, `date_other`, `info_srw_other`) 
                            VALUES (NULL, '$user_id', '$date_other2', '$info_srw_other2')");
mysqli_query($connect, "INSERT INTO `other_srw` (`id`, `srw_id`, `date_other`, `info_srw_other`) 
                            VALUES (NULL, '$user_id', '$date_other3', '$info_srw_other3')");
mysqli_query($connect, "INSERT INTO `other_srw` (`id`, `srw_id`, `date_other`, `info_srw_other`) 
                            VALUES (NULL, '$user_id', '$date_other4', '$info_srw_other4')");
mysqli_query($connect, "INSERT INTO `other_srw` (`id`, `srw_id`, `date_other`, `info_srw_other`) 
                            VALUES (NULL, '$user_id', '$date_other5', '$info_srw_other5')");
mysqli_query($connect, "INSERT INTO `other_srw` (`id`, `srw_id`, `date_other`, `info_srw_other`) 
                            VALUES (NULL, '$user_id', '$date_other6', '$info_srw_other6')");