<?php
$connect = mysqli_connect('localhost', 'root', '6932', 'dataBaseInfo');

if (!$connect) {
    die("error connect to dataBaseInfo");
}
