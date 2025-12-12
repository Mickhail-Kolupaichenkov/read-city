<?php

require_once '../vendor/autoload.php';

define("ROOT", dirname(__DIR__));

define("CONTROLLERS", ROOT . '/app/controllers/'); 
define("MODEL", ROOT . '/app/model/');
define("VIEWS", ROOT . '/app/views/');
define("CORE", ROOT . '/core/');
define("PUBLIC_DIR", ROOT . '/public/'); 
define("ROUTER", ROOT . '/router/');
define("PATH", 'http://localhost:8888');



use Core\DataBase;
return $db = new DataBase();