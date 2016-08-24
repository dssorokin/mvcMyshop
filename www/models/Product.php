<?php
/**
 * Created by PhpStorm.
 * User: proJS
 * Date: 31.05.2016
 * Time: 4:55
 */
class Product
{
    const limit = 10;

    public static function getProducts($count = self::limit){
        $pdo = Db::getConnection();

        $products = array();

        $query = "SELECT * FROM products WHERE status = 1 LIMIT $count;";

        $products = $pdo->query($query, PDO::FETCH_ASSOC)->fetchAll();
        return $products;
    }

    public static function getRecommendedProducts($count = self::limit){
        $pdo = Db::getConnection();

        $result = array();

        $query = "SELECT * FROM products WHERE status = 1 AND is_recommended = 1 LIMIT $count";

        $result = $pdo->query($query, PDO::FETCH_ASSOC)->fetchAll();
        return $result;
    }

    public static function getProductsWithCategory($idCategory){
        $pdo = Db::getConnection();

        $result = array();

        $query = "SELECT * FROM products WHERE category_id = $idCategory;";

        $result = $pdo->query($query, PDO::FETCH_ASSOC)->fetchAll();
        return $result;
    }

    public static function getProductById($id){
        $pdo = Db::getConnection();

        $result = array();

        $query = "SELECT * FROM products WHERE id = $id;";

        $result = $pdo->query($query, PDO::FETCH_ASSOC)->fetch();
        return $result;
    }

    public static function insertProduct($opt){
        $pdo = Db::getConnection();

        $query = "INSERT INTO products (name, category_id, code, price, availability, brand, image, description, is_new, is_recommended, status)" .
                "VALUES (:name, :category_id, :code, :price, :avail, :brand, :image, :description, :is_new, :is_recommended, :status)";

        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":name", $opt['name']);
        $stmt->bindParam(":category_id", $opt['category']);
        $stmt->bindParam(":code", $opt['code']);
        $stmt->bindParam(":price", $opt['price']);
        $stmt->bindParam(":avail", $opt['avail']);
        $stmt->bindParam(":brand", $opt['brand']);
        $stmt->bindParam(":image", $opt['image']);
        $stmt->bindParam(":description", $opt['descr']);
        $stmt->bindParam(":is_new", $opt['isNew']);
        $stmt->bindParam(":is_recommended", $opt['isRec']);
        $stmt->bindParam(":status", $opt['status']);

        if($stmt->execute()){
            return $pdo->lastInsertId();
        }

        return 0;
    }


    public static function updateProduct($opt){
        $pdo = Db::getConnection();

        $query = "UPDATE products SET name=:name, category_id=:category_id, code=:code, price=:price,
                  availability=:avail, brand=:brand, description=:descr, is_new=:is_new, is_recommended=:is_recommended, status=:status WHERE id = :id;";

        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":id", $opt['id']);
        $stmt->bindParam(":name", $opt['name']);
        $stmt->bindParam(":category_id", $opt['category_id']);
        $stmt->bindParam(":code", $opt['code']);
        $stmt->bindParam(":price", $opt['price']);
        $stmt->bindParam(":brand", $opt['brand']);
        $stmt->bindParam(":avail", $opt['availability']);
        $stmt->bindParam(":descr", $opt['description']);
        $stmt->bindParam(":is_new", $opt['is_new']);
        $stmt->bindParam(":is_recommended", $opt['is_recommended']);
        $stmt->bindParam(":status", $opt['status']);

        return $stmt->execute();
    }
}