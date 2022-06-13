<?php
// ПОДКЛЮЧЕНИЕ через объектно-ориентированный стиль //
$mysqliBD = new mysqli('localhost', 'root', 'root', 'itfanis');
if ($mysqliBD->connect_errno) {
    die('Ошибка соединения: ' . $mysqli->connect_errno);
} else {
    echo "<p>ПОДКЛЮЧЕНИЕ через объектно-ориентированный стиль: УСПЕШНО</p>";
}
// ПОДКЛЮЧЕНИЕ через процедурный стиль //
$linkBD = mysqli_connect('localhost', 'root', 'root', 'itfanis');
if (!$linkBD) {
    die('Ошибка соединения: ' . mysqli_connect_errno());
} else {
    echo "<p>ПОДКЛЮЧЕНИЕ через процедурный стиль: УСПЕШНО</p>";
}