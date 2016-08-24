<?php
/**
 * Created by PhpStorm.
 * User: proJS
 * Date: 31.05.2016
 * Time: 1:25
 */



// 1.Общие настройки

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
function vd($item){
    echo "<pre>";
    var_dump($item);
    echo "</pre>";
}
session_start();


// 2.Подключение файлов системы
define('ROOT',dirname(__FILE__));
//require_once(ROOT.'/components/Router.php');
//require_once(ROOT.'/components/Db.php');
require_once(ROOT.'/components/autoload.php');



// 3.Установка соединения с БД

// 4.Вызов Router
$router = new Router();
$router->run();


?>

