<?php

/**
 * Created by PhpStorm.
 * User: proJS
 * Date: 16.06.2016
 * Time: 20:19
 */
class UserController
{
    public function actionRegister(){
        $result = false;
        $arrData = array();
        if(isset($_POST['submit'])){
            $arrData[] = $_POST['name'];
            $arrData[] = $_POST['email'];
            $arrData[] = $_POST['password'];

            $result = User::insertUser($arrData);


        }

        require_once (ROOT . "/views/user/register.php");

        return true;

    }

    public function actionLogin(){


        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $userId = User::checkUser($email, $password);


            if($userId){
                User::Auth($userId);

                header("Location: /cabinet/");
            }else{

            }


        }
        require_once (ROOT . "/views/user/login.php");
        return true;
    }

    public function actionLogout(){
        unset($_SESSION['userId']);
        header("Location: /");
    }
}