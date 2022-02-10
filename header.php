<?php
$serverHour = date('H');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/styles.css">
    <? if ($serverHour >= 20 || $serverHour < 8) {?>
        <link rel="stylesheet" href="styles/stylesNight.css">
    <? } ?>
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
            <li><a class="navigation_page" href="controlStructures.php" target="_blank" title="Перейти к заданию">Циклы PHP</a></li>
        </ul>
    </nav>
    <a href="mendeleevTable.html" target="_blank" title="Фрагмент таблицы Менделеева">
        <img class="mendeleev" src="images/mendeleev.jpg" alt="Фрагмент таблицы Менделеева" title="Фрагмент таблицы Менделеева">
    </a>
</header>