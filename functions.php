<?php

function timesOfDay() {
    $serverHour = date('H');
    if ($serverHour >= 20 || $serverHour < 8) {
        echo '<link rel = "stylesheet" href = "styles/stylesNight.css">';
    }
}

function myBirthDate() {
    $myBirthDate = '04.10.1994';
    $serverTime = time();
    $myLifeDays = floor(($serverTime - strtotime($myBirthDate)) / 86400);
    return $myLifeDays;
}

function aboutMe() {
    $aboutMe = 'Мне 27 лет, живу в Ростове-на-Дону. Работаю в Факте с октября 2020 года.<br>Решил сменить сферу деятельности, поэтому принял участие в обучении в Факт.Школе.';
    $aboutMeArray = explode('. ',$aboutMe);
    $colors = ['red', 'blue', 'green', 'yellow', 'orange', 'aquamarine'];
    $colorIndex = array_rand($colors);
    $aboutMeArray[0] = "<span style=\"color:$colors[$colorIndex]\">$aboutMeArray[0]</span>";
    $aboutMe = implode('. ', $aboutMeArray);
    return $aboutMe;
}

function aboutSchool() {
    $aboutSchool = 'Обучение в школе нравится. Поначалу не всегда успевал за темпом занятия, сейчас влился в процесс.';
    $aboutSchoolArray = explode(' ', $aboutSchool);
    $colors = ['red', 'blue', 'green', 'yellow', 'orange', 'aquamarine'];
    $colorIndex = array_rand($colors);
    $colorIndex2 = array_rand($colors);
    foreach ($aboutSchoolArray as $key => &$value) {
        if (($key + 1) % 2 == 0) {
            $value = "<span style=\"color:$colors[$colorIndex]\">$value</span>";
        } else $value = "<span style=\"color:$colors[$colorIndex2]\">$value</span>";
    }
    $aboutSchool = implode(' ', $aboutSchoolArray);
    return $aboutSchool;
}

function pageCount($page, $whatToCount) {
    $siteContent = strip_tags($page); //убираем все теги
    $siteContent = preg_replace('/[^\w\s]/u', '', $siteContent); //убираем знаки препинания
    $siteContent = mb_strtolower($siteContent); //приводим весь текст страницы в нижний регистр
    if ($whatToCount == 'words') {
        $pageWordsCount = str_word_count($siteContent, 0, 'АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя');
        return $pageWordsCount;
    } elseif ($whatToCount == 'vowels') {
        $vowels = ['а', 'о', 'и', 'е', 'ё', 'э', 'ы', 'у', 'ю','я', 'a' , 'e', 'i', 'o', 'u', 'y'];
        $siteContentSymbols = mb_strlen($siteContent); //Считаем количество всех символов на странице
        $extraSymbols = mb_strlen(str_replace($vowels, '', $siteContent)); // Считаем все согласные
        $pageVowelsCount = $siteContentSymbols - $extraSymbols; //Отнимаем от всех символов согласные
        return $pageVowelsCount;
    } else return 0;
}

function authorization() {
    if (!empty($_POST['login']) || !empty($_POST['password'])) {
        $_POST['login'] = htmlspecialchars($_POST['login']);
        include $_SERVER['DOCUMENT_ROOT'] . '/users.php';
        if (in_array($_POST['login'], $users) && $_POST['password'] == $passwords[array_search($_POST['login'], $users)]) {
            $_POST['password'] = md5($_POST['password']);
            return true;
        } else return false;
    }
}