<?php
$host='localhost';
$user='root';
$pass='root';
$dbname='itfanis';
$link=mysqli_connect($host,$user,$pass,$dbname);
mysqli_set_charset($link,utf8);
if(!$link) {
    echo "Соединение не удалось, ошибка:";
    die( print_r( sqlsrv_errors(), true));
}
?>