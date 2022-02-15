<pre>
<?php

//Задание 1
function randomNumbersArray($array) {
    $numbersCount = mt_rand(10, 20);
    for ($i = 0; $i < $numbersCount; $i++) {
        $array[] = mt_rand(0,100);
    }
    return $array;
}

//Задание 2
function wordsCount($string = 'HTML, CSS, PHP, BITRIX') {
    $wordsCount = str_word_count($string);
    return $wordsCount;
}

//Задание 3
function reverse($string = 'HTML, CSS, PHP, BITRIX') {
    $result = '';
    for ($i = mb_strlen($string); $i >= 0; $i--) {
        $result .= mb_substr($string, $i, 1);
    }
    return $result;
}

//Задание 4
function stringLength($string = 'HTML, CSS, PHP, BITRIX') {
//    $count = strlen($string);
    $count = 0;
    for ($i = 0; $i <= strlen($string); $i++) {
        $count = $i;
    }
    return $count;
}

//Задание 5
function toNewLine($string = 'HTML, CSS, PHP, BITRIX') {
    $array = str_split($string);
    foreach ($array as $value) {
        echo $value . '<br>';
    }
}
?>
</pre>
