<pre>
    ОТЛАДОЧНАЯ ИНФОРМАЦИЯ
<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'users';
$db_con = mysqli_connect($hostname, $username, $password, $dbname);
mysqli_set_charset($db_con, 'UTF-8');

$login = 'Andrey';
$query = "SELECT login, password FROM users WHERE login = '$login'";
$loginDetails = mysqli_fetch_array(mysqli_query($db_con, $query));
print_r($loginDetails);
?>