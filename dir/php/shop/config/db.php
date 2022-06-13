<?php
/**
 * Инициализация подключения к БД
 */

$dblocation = "localhost";
$dbname = "myshop";
$dbuser = "root";
$dbpasswd = "root";

// Соединяемся с БД
$db = mysqli_connect($dblocation,$dbuser,$dbpasswd,$dbname);
if(! $db){
    echo "Ошибка доступа к MySql";
    exit();
}

// Устанавливаем кодировку по умолчанию для текущего соединения
mysqli_set_charset($db,"utf8");

if(!mysqli_select_db($db,$dbname)){
    echo "Ошибка доступа к базе данных {$dbname}";
    exit();
}