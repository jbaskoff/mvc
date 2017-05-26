<?php

// FRONT COTROLLER

// 1. Общие настройки

ini_set('display_errors', 1);
error_reporting(E_ALL);

// 2. Подключение файлов системы

//const ROOT = __DIR__;
define('ROOT', __FILE__);

require_once(ROOT.'/components/Router.php');

echo 'root is: ' . ROOT . '<br>';

echo 'dir  is: ' . __DIR__ . '<br>';
// 3. Установка соединения с БД


// 4. Вызор Router

$router = new Router();
$router->run();