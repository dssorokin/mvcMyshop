<?php
/**
 * Created by PhpStorm.
 * User: proJS
 * Date: 31.05.2016
 * Time: 4:53
 */

class Router
{
    private $routes;

    public function __construct()
    {
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }


    /**
     * @return uri;
     */
    private function getURI()
    {
        if(!empty($_SERVER['REQUEST_URI'])){
            return  trim($_SERVER['REQUEST_URI'],'/');
        }
    }

    public function run()
    {
        // Получить строку запроса
        $uri = $this->getURI();

        // Проверить наличие такого запроса в routes.php

        foreach($this->routes as $uriPattern => $path){
            // Если есть совпадение, определить какой контроллер
            // и action обрабатывает

            if(preg_match("~$uriPattern~",$uri)){
                $internalRoute = preg_replace("~$uriPattern~",$path,$uri);


                $segments = explode('/',$internalRoute);



                $controllerName = array_shift($segments).'Controller';
                $controllerName = ucfirst($controllerName);


                $actionName = 'action'.ucfirst(array_shift($segments));



                $params = $segments;




                $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';

                if(file_exists($controllerFile)){
                    include_once($controllerFile);
                }

                // Создать объект, вызвать метод (т.е action)

                $controllerObject = new $controllerName;

                $result = call_user_func_array(array($controllerObject,$actionName),$params);
                if($result != null){
                    break;
                }
            }

        }



        // Подключить файл контроллера


    }
}