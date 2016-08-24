<?php

/**
 * Created by PhpStorm.
 * User: projs
 * Date: 20.06.16
 * Time: 10:46
 */
abstract class AdminBase
{
    public static function checkAdmin(){
        $userId = User::isLogged();

        $user = User::getUserById($userId);

        if($user['role'] === 'admin'){
            return true;
        }
        
        die('WHAT THE FUCK IS THIS?');
    }

}