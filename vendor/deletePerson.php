<?php

require_once "../config/connect.php";

$person_id = $_GET['id'];

mysqli_query($connect, "DELETE FROM general_information WHERE `general_information`.`user_id` = '$person_id'");
header('location: /');

