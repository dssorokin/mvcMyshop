<?php

/**
 * Created by PhpStorm.
 * User: proJS
 * Date: 17.06.2016
 * Time: 0:38
 */
class Cart
{
    public static function addProduct($id){
        $cartProducts = array();

        if(isset($_SESSION['products'])){
            $cartProducts = $_SESSION['products'];
        }

        if(array_key_exists($id, $cartProducts)){
            $cartProducts[$id]++;
        }else{
            $cartProducts[$id] = 1;
        }

        $_SESSION['products'] = $cartProducts;

        return self::countAllProducts();
    }

    public static function countAllProducts(){
        $arrProducts = $_SESSION['products'];
        $result = 0;

        foreach($arrProducts as $number){
            $result += $number;
        }

        return $result;
    }

    public static function getProducts(){
        $arrProducts = $_SESSION['products'];
        $pdo = Db::getConnection();
        $query = "SELECT * FROM products WHERE id = :id;";
        $result = array();

        foreach($arrProducts as $key => $value){
            $id = $key;
            $stmp = $pdo->prepare($query);
            $stmp->bindParam(":id", $id, PDO::PARAM_INT);
            $stmp->execute();

            $result[] = $stmp->fetch();
        }

        return $result;
    }
}