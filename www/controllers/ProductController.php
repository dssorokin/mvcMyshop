<?php
/**
 * Created by PhpStorm.
 * User: proJS
 * Date: 31.05.2016
 * Time: 4:54
 */


class ProductController
{

    public function actionView($id){

        $categories = array();
        $product = [];

        $categories = Category::getCategories();

        $product = Product::getProductById($id);

        require_once (ROOT . "/views/product/view.php");

        return true;
    }
}