<?php

/**
 * Created by PhpStorm.
 * User: proJS
 * Date: 16.06.2016
 * Time: 20:19
 */
class User
{
    public static function insertUser($arrData){
        $pdo = Db::getConnection();

        $query = "INSERT INTO USER (name, email, password) VALUES (?, ?, ?);";
        $stmt = $pdo->prepare($query);
        return $stmt->execute($arrData);
    }

    public static function checkUser($email, $password){
        $pdo = Db::getConnection();

        $query = "SELECT * FROM USER WHERE email = :email AND password = :password;";
        $stmt = $pdo->prepare($query);
        $stmt->bindValue(":email", $email, PDO::PARAM_INT);
        $stmt->bindValue(":password", $password, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetch();
        if($result){
            return $result['id'];
        }else{
            return false;
        }
    }

    public static function Auth($id){
        $_SESSION['userId'] = $id;
    }

    public static function getUserById($id){
        $pdo = Db::getConnection();

        $query = "SELECT * FROM USER WHERE id = :id;";
        $stmt = $pdo->prepare($query);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetch();

        return $result;
    }

    public static function isLogged(){
        if(isset($_SESSION['userId'])){
            return $_SESSION['userId'];
        }
        return false;
    }
}