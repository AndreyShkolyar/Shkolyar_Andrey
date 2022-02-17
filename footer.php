<footer class="site_footer">
    <?php if (isset($siteContent)) { ?>
    <ul>
        <li>Количество гласных букв на странице - <?= pageCount($siteContent, 'vowels') ?></li>
        <li>Количество слов на странице - <?= pageCount($siteContent, 'words') ?></li>
    </ul>
    <?php } ?>
    <ul class="contacts">
        <li><a href="mailto:andrey.shkolyar.studiofact@gmail.com"><img src="images/mail-icon.png" alt="Электронная почта"> </a></li>
        <li><a href="https://vk.com/comradeosmolovsky" target="_blank"><img src="images/vk-icon.png" alt="VK" title="VK"></a></li>
        <li><a href="https://t.me/ashkolyar" target="_blank"><img src="images/telegram-icon.png" alt="Telegram" title="Telegram"></a></li>
    </ul>
</footer>
</body>
</html>