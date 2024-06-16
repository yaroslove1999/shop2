<?php

/** @var yii\web\View $this */

$this->title = 'Магазин экстримального вида спорта';

if (!empty($_POST['password']) and !empty($_POST['login'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $query = "'SELECT * FROM users WHERE login='$login' AND password='$password'";
    $res = mysqli_query($link, $query);
    $user = mysqli_fetch_assoc($res);

    if (!empty($user)) {

    } else {

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css>">
    <title></title>
    <link rel="stylesheet" href="web/css/login.css">

</head>
<body>
<div class="align">

    <div class="zation">
        <div class="head">
            <div></div>
            <a id="usines" class="selected" href="#usines">Логин</a>
            <a id="version" href="#version">Регистрация</a>
            <div></div>
        </div>
        <div class="tabs">
            <form>
                <div class="inputs">
                    <div class="input">
                        <input placeholder="Имя пользователя" type="text">

                    </div>
                    <div class="input">
                        <input placeholder="Пароль" type="password">

                    </div>
                    <label class="checkbox">
                        <input type="checkbox">
                        <span>Запомните меня</span>
                    </label>
                </div>
                <button>войти</button>
            </form>
            <form>
                <div class="inputs">
                    <div class="input">
                        <input placeholder="Email" type="text">

                    </div>
                    <div class="input">
                        <input placeholder="Имя пользователя" type="text">

                    </div>
                    <div class="input">
                        <input placeholder="Пароль" type="password">

                    </div>
                </div>
                <button>версия</button>
            </form>
        </div>
    </div>
</div>


