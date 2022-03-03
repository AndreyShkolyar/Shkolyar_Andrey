<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/auth.php';
if (!empty($_POST)) {
    $authorization = new auth($_POST['login'], $_POST['password']);
    $authorizationSuccess = $authorization->authorization();
    if ($authorizationSuccess) {
        header('Location: hello.php');
    }
}
?>
<main>
    <? if (isset($authorizationSuccess) && $authorizationSuccess == true) {?>
    <p class="success-auth">
        Добрый день, <?= $_POST['login'] ?>
    </p>
    <? } else { ?>
    <form action="authorization.php" method="post">
        <table class="auth-table">
            <tr>
                <td>
                    <label for="login" style="display: block">Введите логин</label>
                    <input type="text" id="login" name="login" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password" style="display: block">Введите пароль</label>
                    <input type="password" id="password" name="password" required>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Войти" name="submit-auth">
                </td>
            </tr>
            <?php if (isset($authorizationSuccess) && $authorizationSuccess == false) {?>
            <tr>
                <td>
                    <p class="auth-error-message">Неверный логин или пароль</p>
                </td>
            </tr>
            <?php } ?>
            <tr>
                <td>
                    <a href="registration.php" title="Регистрация" style="text-decoration: none">Регистрация</a>
                </td>
            </tr>
        </table>
    </form>
    <? } ?>
</main>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>
