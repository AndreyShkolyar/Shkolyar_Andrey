<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>
<main>
    <h1>Привет, <?= $_SESSION['login'] ?></h1>
    <form class="user-bg-color" action="hello.php" method="post">
        <label for="userBGColor">Выберите цвет фона сайта</label>
        <select name="userBGColor" id="userBGColor">
            <option value="default">По умолчанию (зависит от времени суток)</option>
            <option value="blue">Голубой</option>
            <option value="violet">Фиолетовый</option>
            <option value="red">Красный</option>
        </select>
        <input type="submit" name="colorSelected" value="Установить">
    </form>
    <table class="additional-pages">
        <tr>
            <th><h2>Для ознакомления</h2></th>
        </tr>
        <tr>
            <td>
                <a href="fact.php" title="Fact">Факт</a>
            </td>
        </tr>
        <tr>
            <td>
                <a href="bitrix.php" title="Bitrix">Битрикс</a>
            </td>
        </tr>
    </table>
    <?php if (isset($_COOKIE['lastVisitedPage'])) { ?>
    <h2>Последний раз вы посещали страницу <?= $_COOKIE['lastVisitedPage'] ?></h2>
    <?php } ?>
</main>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>
