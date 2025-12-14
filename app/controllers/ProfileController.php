<?php
session_start();

use App\models\Profile;

if (!isset($_SESSION['user'])) {
    header('Location: /login');
    exit;
}

$Profile = new Profile();

$user_id = $_GET['id'] ?? $_SESSION['user']['id'];
$user_profile = $Profile->find("SELECT name, lastname, login FROM users WHERE id = ?", [$user_id]);

if (!$user_profile) {
    die('Пользователь не найден');
}

$user_fullname = $user_profile['name'] . ' ' . $user_profile['lastname'];
$user_tag = $user_profile['login'];

require VIEWS.'header.tpl.php';
require VIEWS.'profile.tpl.php';