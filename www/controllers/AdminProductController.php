<?php

/**
 * Created by PhpStorm.
 * User: projs
 * Date: 20.06.16
 * Time: 11:13
 */
class AdminProductController extends AdminBase
{
    public function actionIndex(){
        self::checkAdmin();

        $productsList = Product::getProducts(100);

        require_once (ROOT . "/views/admin_product/index.php");
        return true;
    }

    public function actionCreate(){
        self::checkAdmin();

        $categoriesList = Category::getCategories();

        if(isset($_POST['submit'])){
            $opt = array();
            $opt['name'] = $_POST['name'];
            $opt['code'] = $_POST['code'];
            $opt['price'] = $_POST['price'];
            $opt['brand'] = $_POST['brand'];
            $opt['category'] = $_POST['category_id'];
            $opt['descr'] = $_POST['description'];
            $opt['image'] = $_FILES['image']['name'];
            $opt['avail'] = $_POST['availability'];
            $opt['isNew'] = $_POST['is_new'];
            $opt['isRec'] = $_POST['is_recommended'];
            $opt['status'] = $_POST['status'];


            if(is_uploaded_file($_FILES['image']['tmp_name'])){
                move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "images/");
            }

            $id = Product::insertProduct($opt);

            if($id){
                header("Location: /admin/product");
            }
        }

        require_once (ROOT . "/views/admin_product/create.php");
        return true;
    }

    public function actionUpdate($id){

        $product = Product::getProductById($id);
        $categoriesList = Category::getCategories();

        if(isset($_POST['submit'])){
            $opt = array();
            $opt['id'] = $id;
            $opt['name'] = $_POST['name'];
            $opt['code'] = $_POST['code'];
            $opt['price'] = $_POST['price'];
            $opt['category_id'] = $_POST['category_id'];
            $opt['brand'] = $_POST['brand'];
            $opt['description'] = $_POST['description'];
            $opt['is_new'] = $_POST['is_new'];
            $opt['is_recommended'] = $_POST['is_recommended'];
            $opt['status'] = $_POST['status'];

            Product::updateProduct($opt);

            header("Location: /admin/product");
        }



        require_once (ROOT . "/views/admin_product/update.php");
        return true;
    }
}