<?php

/**
 * Created by PhpStorm.
 * User: proJS
 * Date: 16.06.2016
 * Time: 15:51
 */


class CategoryController
{
    public function actionView($id)
    {
        $categories = array();
        $categories = Category::getCategories();

        $products = array();
        $products = Product::getProductsWithCategory($id);



        require_once(ROOT . '/views/category/view.php');

        return true;
    }
}