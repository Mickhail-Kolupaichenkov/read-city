<?php

namespace App\models;

use Core\DataBase;

class User extends DataBase 
{   
    public function logout() 
    {
        session_destroy();
        header('Location: /login');
        exit;
    }
}