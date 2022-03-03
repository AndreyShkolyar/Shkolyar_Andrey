<?php

class auth
{
    public $login;
    public $password;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function databaseConnect()
    {
        $hostname = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'users';
        $db_con = mysqli_connect($hostname, $username, $password, $dbname);
        mysqli_set_charset($db_con, 'UTF-8');
        return $db_con;
    }

    public function registration()
    {
        $db_con = $this->databaseConnect();
        $query = "SELECT login FROM users WHERE login = '$this->login'";
        $loginDetails = mysqli_fetch_array(mysqli_query($db_con, $query));
        if (isset($loginDetails['login'])) {
            return false;
        } else {
            $_POST['password'] = md5($_POST['password']);
            $this->password = $_POST['password'];
            $query = "INSERT INTO users (ID_user, login, password) VALUES (NULL ,'$this->login','$this->password')";
            mysqli_query($db_con, $query);
            return true;
        }
    }

    public function authorization()
    {
        if (!empty($_POST['login']) || !empty($_POST['password'])) {
            $_POST['login'] = htmlspecialchars($_POST['login']);
            $login = $_POST['login'];
            $db_con = $this->databaseConnect();
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
    }
}