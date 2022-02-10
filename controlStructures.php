<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
?>
<main style="text-align: center">
    <h1>Задание 1</h1>
    <section>
        <?
        $i = 5;
        do {
            echo $i . '<br>';
            $i++;
        } while ($i <= 13);
        ?>
    </section>
    <hr>
    <h1>Задание 2</h1>
    <section style="display: flex; justify-content: space-around">
        <div>
            <h4>Часть 1. Цикл "while"</h4>
            <?
            $num = 1000;
            $i = 0;
            while ($num > 50) {
                $num /= 2;
                $i++;
            }
            echo 'Количество итераций - ' . $i;
            ?>
        </div>
        <div>
            <h4>Часть 2. Цикл "for"</h4>
            <?
            $num = 1000;
            for ($i = 0; ; $i++) {
                $num /= 2;
                if ($num < 50) {
                    break;
                }
            }
            echo 'Количество итераций - ' . $i;
            ?>
        </div>
    </section>
    <hr>
    <h1>Задание 3</h1>
    <section>
        <?
        $i = mt_rand(0,10);
        echo '$i = ' . $i . '<br>';
        for ($count = 0; $count <= (10 -$i); $count++) {
            if ($count < (10 - $i)) {
                echo $count . ', ';
            } else echo $count;
        }
        ?>
    </section>
    <hr>
</main>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>