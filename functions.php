<?php

function nightStyles() {
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

/*function databaseConnect() {
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'users';
    $db_con = mysqli_connect($hostname, $username, $password, $dbname);
    mysqli_set_charset($db_con, 'UTF-8');
    return $db_con;
}*/

/*function registration() {
    $_POST['login'] = htmlspecialchars($_POST['login']);
    $login = $_POST['login'];
    $db_con = databaseConnect();
    $query = "SELECT login FROM users WHERE login = '$login'";
    $loginDetails = mysqli_fetch_array(mysqli_query($db_con, $query));
    if (isset($loginDetails['login'])) {
        return false;
    } else {
        $_POST['password'] = md5($_POST['password']);
        $password = $_POST['password'];
        $query = "INSERT INTO users (ID_user, login, password) VALUES (NULL ,'$login','$password')";
        mysqli_query($db_con, $query);
        return true;
    }
}*/

/*function authorization() {
    if (!empty($_POST['login']) || !empty($_POST['password'])) {
        $_POST['login'] = htmlspecialchars($_POST['login']);
        $login = $_POST['login'];
        $db_con = databaseConnect();
        $query = "SELECT login, password FROM users WHERE login = '$login'";
        $loginDetails = mysqli_fetch_array(mysqli_query($db_con, $query));
        if ($loginDetails) {
            $_POST['password'] = md5($_POST['password']);
            if ($_POST['password'] == $loginDetails['password']) {
                $_SESSION['login'] = $_POST['login'];
                $_SESSION['password'] = $_POST['password'];
                $_SESSION['isAuthorized'] = true;
                return true;
            } else {
                $_SESSION['isAuthorized'] = false;
                return false;
            }
        } else {
            $_SESSION['isAuthorized'] = false;
            return false;
        }
    }
}*/

function userBackgroundColorCookie() {
    if (isset($_POST['colorSelected'])) {
        switch ($_POST['userBGColor']) {
            case 'default':
                setcookie('bgColor', 'default');
                break;
            case 'blue':
                setcookie('bgColor', 'blue');
                break;
            case 'violet':
                setcookie('bgColor', 'violet');
                break;
            case 'red':
                setcookie('bgColor', 'red');
        }
        header("Refresh: 0");
    }
}

function setUserBackgroundColor() {
    if (isset($_COOKIE['bgColor'])) {
        switch ($_COOKIE['bgColor']) {
            case 'default':
                return '';
                break;
            case 'blue':
                return 'style="background-color: #00BFFF;"';
                break;
            case 'violet':
                return 'style="background-color: blueviolet;"';
                break;
            case 'red':
                return 'style="background-color: crimson;"';
        }
    } else return '';
}
