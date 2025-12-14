<?php
session_start();

use App\models\User;

$User = new User();

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action']) && $_GET['action'] === 'logout') {
    $User->logout();
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
$login = $_POST['login'];
$password = $_POST['password'];

    if(!$login){
        echo 'Вы не заполнили поле логина';
        die;
    }
    if(!$password){
        echo 'Вы не заполнили поле пароля';
        die;
    }

    $user = $User->find("SELECT * FROM users WHERE login = ?", [$login]);
    $user_id = $User->find("SELECT id FROM users WHERE login= ?", [$user_id]);

    if(!$user){
        echo 'Нет такого пользователя!';
        die;
    }
    $pass = $user['password'];
    
    if(password_verify($password, $pass)){
        $_SESSION['user'] = $user; 
        $_SESSION['user_id'] = $user['id']; 

        header('Location: /profile?id=' . $user['id']);
        exit;
    } else {
        echo 'Пароль не верный';
    }
}


require VIEWS.'login.tpl.php';