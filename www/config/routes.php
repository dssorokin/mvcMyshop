<?php
/**
 * Created by PhpStorm.
 * User: proJS
 * Date: 31.05.2016
 * Time: 5:00
 */
return array(


    "admin/product/update/([0-9]+)" => "adminProduct/update/$1",
    "admin/product/create" => "adminProduct/create",
    "admin/product" => "adminProduct/index",
    "admin" => "admin/index",
    
    "catalog" => "catalog/index",
    "cabinet" => "cabinet/index",

    "user/login" => "user/login",
    "cart/addAjax/([0-9]+)" => "cart/addAjax/$1",
    "cart" => "cart/index",

    "user/logout" => "user/logout",
    "user/register" => "user/register",
    "category/([0-9]+)" => "category/view/$1",
    "product/([0-9]+)" => "product/view/$1",
    "" => 'site/index'
);