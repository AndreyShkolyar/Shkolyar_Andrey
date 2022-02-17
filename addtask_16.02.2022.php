<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';

if (!empty($_GET) && isset($_GET['name'])) {
    $points = 0;
    $resultYesArray = [3, 9, 10, 13, 14, 19];
    $resultNoArray = [1, 2, 4, 5, 6, 7, 8, 11, 12, 15, 16, 17, 18];

    $resultArray = $_GET;
    unset($resultArray['name'], $resultArray['email']);

    foreach ($_GET as $key => $value) {
        if (in_array($key, $resultYesArray) && $value == 'y') {
            $points++;
        } elseif (in_array($key, $resultNoArray) && $value == 'n') {
            $points++;
        }
    }

    $result = 'Ваш результат - ' . $points . ' баллов.<br>' . $_GET['name'];
    switch ($points) {
        case $points > 15:
            $result .= ', у Вас покладистый характер.';
            break;
        case $points >= 8 && $points <15:
            $result .= ', Вы не лишены недостатков, но с вами можно ладить.';
            break;
        default:
            $result .= ', Вашим друзьям можно посочувствовать.';
    }

    mail($_GET['email'], 'Результат тестирования', $result);

} else $questionsArray = [
    'Считаете ли Вы, что у многих ваших знакомых хороший характер?',
    'Раздражают ли Вас мелкие повседневные обязанности?',
    'Верите ли Вы, что ваши друзья преданы Вам?',
    'Неприятно ли Вам, когда незнакомый человек делает Вам замечание?',
    'Способны ли Вы ударить собаку или кошку?',
    'Часто ли Вы принимаете лекарства?',
    'Часто ли Вы меняете магазин, в который ходите за продуктами?',
    'Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись?',
    'Тяготят ли Вас общественные обязанности?',
    'Способны ли Вы ждать более 5 минут, не проявляя беспокойства?',
    'Часто ли Вам приходят в голову мысли о Вашей невезучести?',
    'Сохранилась ли у Вас фигура по сравнению с прошлым?',
    'Можете ли Вы с улыбкой воспринимать подтрунивание друзей?',
    'Нравится ли Вам семейная жизнь?',
    'Злопамятны ли Вы?',
    'Находите ли Вы, что стоит погода, типичная для данного времени года? ',
    'Случается ли Вам с утра быть в плохом настроении?',
    'Раздражает ли Вас современная живопись?',
    'Надоедает ли Вам присутствие чужих детей в доме более одного часа?'
];

if (isset($questionsArray)) { ?>
<form class="questionnaire" action="addtask_16.02.2022.php" method="get">
    <p>
        <label for="name">Ваше имя</label>
        <input type="text" name="name" id="name" required>
    </p>
    <p>
        <label for="email">Ваша почта</label>
        <input type="email" name="email" id="email" required>
    </p>
    <?php foreach ($questionsArray as $key => $value) {?>
    <p>
        <label for="question<?= $key + 1 ?>"><?= $key + 1 . '. ' .  $value ?></label>
        <input type="radio"  name="<?= $key + 1 ?>" id="question<?= $key + 1 ?>" value="y" checked>Да
        <input type="radio"  name="<?= $key + 1 ?>" id="question<?= $key + 1 ?>" value="n">Нет
    </p>
    <?php } ?>
    <p>
        <input type="submit" value="Показать результат">
    </p>
</form>
    <?php } elseif (isset($result)) { ?>
    <p class="questionnaire-result"><?= $result ?></p>
<?php
}
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>