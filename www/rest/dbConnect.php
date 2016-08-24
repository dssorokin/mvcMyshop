<?php
class Db
{


    public static function getConnection()
    {
    
        $host = 'localhost';
        $dbname = 'restexample';
        $user = 'root';
        $pass = 'kosmos92';
//        "mysql:host=$host;dbname=$dbname"
        $dsn = "mysql:host=$host;dbname=$dbname;charset=UTF8";
        $opt = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        $pdo = new PDO($dsn, $user, $pass, $opt);
        return $pdo;
    }
}