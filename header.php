<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/functions.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/styles.css">
    <?php timesOfDay() ?>
    <link rel="shortcut icon" href="images/favicon-32x32.png" type="image/png">
    <title>Школяр Андрей</title>
</head>
<body>
<header class="site_header">
    <a href="index.php" title="На главную">
        <img class="logo" src="images/logo.png" alt="Герб Ростова-на-Дону">
    </a>
    <nav class="navigation">
        <ul class="navigation-list">
            <li><a class="navigation_page" href="mendeleevTable.html" target="_blank" title="Таблица Менделеева">Таблица Менделеева</a></li>
            <li><a class="navigation_page" href="controlStructures.php" target="_blank" title="Перейти к заданию">Циклы PHP</a></li>
            <li><a class="navigation_page" href="" target="_blank" title="Доп. задание">Дополнительное задание (16.02.2022)</a></li>
        </ul>
    </nav>
    <a class="auth_link" href="authorization.php" target="_blank" title="Авторизация">Авторизация</a>
</header>