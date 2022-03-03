<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/header.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/auth.php';
if (!empty($_POST)) {
    $_POST['login'] = htmlspecialchars($_POST['login']);
    $registration = new auth($_POST['login'], $_POST['password']);
    $registrationSuccess = $registration->registration();
    if ($registrationSuccess) {
        header('Refresh:5; url=authorization.php');
    }
}
?>
<main>
    <?php if (isset($registrationSuccess) && $registrationSuccess == true) { ?>
        <p>Вы успешно зарегистрировались. Переход на страницу авторизации...</p>
    <?php } else { ?>
    <form action="registration.php" method="post">
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
                    <input type="submit" value="Зарегистрироваться" name="submit-auth">
                </td>
            </tr>
            <?php if (isset($registrationSuccess) && $registrationSuccess == false) { ?>
            <tr>
                <td>
                    <p class="auth-error-message">Пользователь с таким логином уже существует</p>
                </td>
            </tr>
            <?php } ?>
        </table>
        <?php } ?>
</main>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>