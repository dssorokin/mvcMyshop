<?php

/**
 * Created by PhpStorm.
 * User: proJS
 * Date: 16.06.2016
 * Time: 13:38
 */
class Category
{
    public static function getCategories(){
        $pdo = Db::getConnection();

        $categories = array();

        $query = "SELECT * FROM categories ORDER BY sort_order ASC;";

        $categories = $pdo->query($query, PDO::FETCH_ASSOC)->fetchAll();
        return $categories;
    }
}