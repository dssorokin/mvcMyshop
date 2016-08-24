<?php

/**
 * Created by PhpStorm.
 * User: proJS
 * Date: 16.06.2016
 * Time: 15:33
 */

class CatalogController
{
    public function actionIndex()
    {
        $categories = [];
        $categories = Category::getCategories();

        $products = array();
        $products = Product::getProducts(4);

        $recomProducts = array();
        $recomProducts = Product::getRecommendedProducts();

        require_once(ROOT . '/views/site/index.php');

        return true;
    }
}