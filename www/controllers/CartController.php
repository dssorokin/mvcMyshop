<?php

/**
 * Created by PhpStorm.
 * User: proJS
 * Date: 17.06.2016
 * Time: 0:36
 */
class CartController
{
    public function actionAddAjax($id){
        echo Cart::addProduct($id);
        return true;
    }

    public function actionIndex(){

        $cartProducts = Cart::getProducts();
        $quantity = $_SESSION['products'];


        require_once (ROOT . "/views/cart/index.php");
        return true;
    }
}