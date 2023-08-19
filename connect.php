<?php
$host = 'localhost';
$username = 'root';
$password = 'Toshiba3377';
$dbname = 'api_tester';

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Ошибка подключения: " . mysqli_connect_error());
}
