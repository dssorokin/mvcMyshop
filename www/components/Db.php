<?php

/**
 * Created by PhpStorm.
 * User: proJS
 * Date: 31.05.2016
 * Time: 8:08
 */
class Db
{


    public static function getConnection()
    {
        $arr = include(ROOT . "/config/dbParams.php");

        $host = $arr['host'];
        $dbname = $arr['dbname'];
        $user = $arr['user'];
        $pass = $arr['password'];
//        "mysql:host=$host;dbname=$dbname"
        $dsn = "mysql:host=$host;dbname=$dbname;charset=UTF8";
        $opt = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        $pdo = new PDO($dsn, $user, $pass, $opt);
        return $pdo;
    }
}