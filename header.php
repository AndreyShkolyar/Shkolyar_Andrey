<?php
session_start();
//session_destroy();
require_once $_SERVER['DOCUMENT_ROOT'] . '/functions.php';
userBackgroundColorCookie();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/styles.css">
    <?php nightStyles() ?>
    <link rel="shortcut icon" href="images/favicon-32x32.png" type="image/png">
    <title>Школяр Андрей</title>
</head>
<body <?= setUserBackgroundColor() ?>>
<header class="site_header">
    <a href="index.php" title="На главную">
        <img class="logo" src="images/logo.png" alt="Герб Ростова-на-Дону">
    </a>
    <nav class="navigation">
        <ul class="navigation-list">
            <li><a class="navigation_page" href="mendeleevTable.html" target="_blank" title="Таблица Менделеева">Таблица Менделеева</a></li>
            <li><a class="navigation_page" href="controlStructures.php" target="_blank" title="Перейти к заданию">Циклы PHP</a></li>
            <li><a class="navigation_page" href="addtask_16.02.2022.php" target="_blank" title="Доп. задание">Дополнительное задание (16.02.2022)</a></li>
        </ul>
    </nav>
    <?php if (isset($_SESSION['isAuthorized']) && $_SESSION['isAuthorized'] == true) { ?>
        <a class="auth_link" href="hello.php" target="_self" title="Моя страница">Моя страница</a>
    <?php } else { ?>
        <a class="auth_link" href="authorization.php" target="_self" title="Авторизация">Авторизация</a>
    <?php } ?>
</header>