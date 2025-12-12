<?php

//Режим отладки
ini_set("error_reporting", E_ALL);
ini_set("display_errors", 1);

function dump($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

function dd($data)
{
    dump($data);
    die;
}