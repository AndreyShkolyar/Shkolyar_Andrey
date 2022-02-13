<?php
$siteContent = strip_tags($siteContent); //убираем все теги
$siteContent = preg_replace('/[^\w\s]/u', '',$siteContent); //убираем знаки препинания
$siteContent = mb_strtolower($siteContent); //приводим весь текст страницы в нижний регистр

//Подсчет гласных на текущей странице
$vowels = ['а', 'о', 'и', 'е', 'ё', 'э', 'ы', 'у', 'ю','я', 'a' , 'e', 'i', 'o', 'u', 'y'];
$siteContentSymbols = mb_strlen($siteContent); //Считаем количество всех символов на странице
$extraSymbols = mb_strlen(str_replace($vowels, '', $siteContent)); // Считаем все согласные
$pageVowelsCount = $siteContentSymbols - $extraSymbols; //Отнимаем от всех символов согласные

//Подсчет слов на текущей странице
$pageWordsCount = str_word_count($siteContent, 0, 'АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя');
?>
<footer class="site_footer">
    <ul>
        <li>Количество гласных букв на странице - <?= $pageVowelsCount;?></li>
        <li>Количество слов на странице - <?= $pageWordsCount; ?></li>
    </ul>
    <ul class="contacts">
        <li><a href="mailto:andrey.shkolyar.studiofact@gmail.com"><img src="images/mail-icon.png" alt="Электронная почта"> </a></li>
        <li><a href="https://vk.com/comradeosmolovsky" target="_blank"><img src="images/vk-icon.png" alt="VK" title="VK"></a></li>
        <li><a href="https://t.me/ashkolyar" target="_blank"><img src="images/telegram-icon.png" alt="Telegram" title="Telegram"></a></li>
    </ul>
</footer>
</body>
</html>