<?php
/**
 * Created by PhpStorm.
 * User: slava
 * Date: 08.04.18
 * Time: 12:09
 */

$host = 'localhost';
$login = 'root';
$passworld = '1234';
$db = 'new_table';
$link = mysqli_connect($host, $login, $passworld,$db);
if(mysqli_connect_errno()){
    echo 'error connect data base ('.mysqli_connect_errno().'):'.mysqli_connect_error();
    exit();
}
//base work
$query = "SELECT * FROM users";
$result = mysqli_query($link,$query);
echo '<pre>';
var_dump($result);
echo '</pre>';
