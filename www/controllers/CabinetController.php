<?php

/**
 * Created by PhpStorm.
 * User: proJS
 * Date: 16.06.2016
 * Time: 23:20
 */
class CabinetController
{
    public function actionIndex(){

        $userId = User::isLogged();

        if($userId){

            $user = User::getUserById($userId);


            require_once (ROOT . "/views/cabinet/index.php");
            return true;
        }else{
            header("Location: /php_learn/user/login");
        }





    }
}