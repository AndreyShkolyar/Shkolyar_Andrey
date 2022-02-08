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
    <img class="logo" src="images/logo.png" alt="Герб Ростова-на-Дону" title="Герб Ростова-на-Дону">
    <a href="pages/table.html" target="_blank" title="Фрагмент таблицы Менделеева">
        <img class="mendeleev" src="images/mendeleev.jpg" alt="Фрагмент таблицы Менделеева" title="Фрагмент таблицы Менделеева">
    </a>
</header>
<main>
    <section class="about_me">
        <img class="my_photo" src="images/my_photo.jpg" alt="Фото" title="Мое фото">
        <table>
            <caption><h2>Школяр Андрей</h2></caption>
            <tr>
                <td>
                    <p>
                        <b>О себе:</b><br>
                        Мне 27 лет, живу в Ростове-на-Дону. Работаю в Факте с октября 2020 года.
                        Решил сменить сферу деятельности, поэтому принял участие в обучении в Факт.Школе.
                    </p>
                </td>
                <td>
                    <p>
                        <b>О школе:</b><br>
                        Обучение в школе нравится. Поначалу не всегда успевал за темпом занятия, сейчас влился в процесс.
                        Очень жду начало занятий по PHP, т.к. в программировании интересен именно backend.
                    </p>
                </td>
            </tr>
        </table>
    </section>
    <hr>
    <h1>Достопримечательности Ростова-на-Дону</h1>
    <hr>
    <h2>Памятники</h2>
    <section class="monuments">
        <figure class="photo-content">
            <img class="monument-image" src="images/tachanka.jpg" alt="Тачанка">
            <figcaption>Тачанка.<br> Памятник сооружен в год 60-летия Великой Октябрьской Социалистической Революции. Посвящается Первой Конной Армии в годы Гражданской войны.

            </figcaption>
        </figure>
        <figure class="photo-content">
            <img class="monument-image" src="images/stela.jpg" alt="Стела Освободителям Ростова">
            <figcaption>Стела «Освободителям Ростова».<br> Возведена на центральной площади Ростова-на-Дону в честь освобождения города от нацистских войск. Торжественное открытие памятника состоялось 8 мая 1983 года. Представляет собой стелу высотой 72 метра, со стилизованным позолоченным изображением греческой богини Ники, одетой в плащ-палатку.
            </figcaption>
        </figure>
        <figure class="photo-content">
            <img class="monument-image" src="images/zmievckaya-balka.jpg" alt="Мемориал Змиевская балка">
            <figcaption>Мемориал жертвам нацизма.<br> Открыт в Змиевской балке 9 мая 1975 года. В центре композиции расположена фигура женщины, которая является символом Родины-матери.</figcaption>
        </figure>
        <figure class="photo-content">
            <img class="monument-image" src="images/1-konnaya-army.jpg" alt="Памятник бойцам 1-й Конной Армии">
            <figcaption>Памятник бойцам 1-й Конной Армии.<br>Установлен на площади Советов в 1972 году и олицетворяет победу Красной армии в Гражданской войне. Кавалерист, красноармеец и матрос – персонажи памятника.</figcaption>
        </figure>
    </section>
    <hr>
    <h2>Улицы</h2>
    <section class="streets">
        <figure class="photo-content top-left">
            <img class="street-image" src="images/pushkinskaya.jpg" alt="Пушкинская улица">
            <figcaption>Пушкинская улица<br>Улица в центре Ростова-на-Дону. Имеет статус парковой зоны. Здесь расположено много старинных зданий, памятников, редких деревьев, искусно оформленных клумб.</figcaption>
        </figure>
        <figure class="photo-content top-right">
            <img class="street-image" src="images/sadovaya.jpg" alt="Большая Садовая">
            <figcaption>Большая Садовая<br>Центральная улица Ростова-на-Дону, одна из старейших и красивейших улиц города, в частности, на Большой Садовой находятся такие достопримечательности как Городской дом, Музыкальный театр, Дом Черновой, ЦУМ. Также на Большой Садовой размещены такие важные административные учреждения как городская, областная администрации и администрация полномочного представителя президента Российской Федерации в Южном федеральном округе.
            </figcaption>
        </figure>
        <figure class="photo-content bottom-left">
            <img class="street-image" src="images/theatral-square.jpg" alt="Театральная площадь">
            <figcaption>Театральная площадь<br>Главная площадь города Ростова-на-Дону. На площади находятся Главное управление СКЖД и Ростовский академический театр драмы им. М. Горького. Именно на этой площади находится Стела «Освободителям Ростова».</figcaption>
        </figure>
        <figure class="photo-content bottom-right">
            <img class="street-image" src="images/naberezhnaya.jpg" alt="Береговая улица">
            <figcaption>Береговая улица<br>Улица в центральной части Ростова-на-Дону. Одна из самых красивых улиц города, лицо города со стороны Дона. Вдоль неё расположены несколько памятников, красивые здания, благоустроенная набережная и Парамоновские склады, относящиеся к памятникам истории и культуры федерального значения.</figcaption>
        </figure>
    </section>
    <hr>
</main>
<footer class="site_footer">
    <a href="javascript:scroll(0,0)" class="top_button">Наверх</a>
    <ul class="contacts">
        <li><a href="mailto:andrey.shkolyar.studiofact@gmail.com"><img src="images/mail-icon.png" alt="Электронная почта"> </a></li>
        <li><a href="https://vk.com/comradeosmolovsky" target="_blank"><img src="images/vk-icon.png" alt="VK" title="VK"></a></li>
        <li><a href="https://t.me/ashkolyar" target="_blank"><img src="images/telegram-icon.png" alt="Telegram" title="Telegram"></a></li>
    </ul>
</footer>
</body>
</html>