<?php

class Bootstrap {

    function __construct() {
        $url = isset($_GET['url']) ? htmlentities(filter_input(
                                INPUT_GET, 'url', FILTER_SANITIZE_URL), ENT_QUOTES) : null;
        $url = rtrim($url, '/ .php');
        $url = explode('/', $url);

        if (empty($url[0])) {
            require 'controllers/index.php';
            $controller = new Index();
            $controller->loadModel('index');
            $controller->index();
            return false;
        }

        $file = 'controllers/' . $url[0] . '.php';

        if (file_exists($file)) {
            require $file;
        } else {
            $this->errorpage();
            return false;
        }

        $controller = new $url[0];
        $controller->loadModel($url[0]);

        if (isset($url[1])) {
            if (method_exists($controller, $url[1])) {
                if (isset($url[2])) {
                    //TRY CATCH!!!???
                    $controller->{$url[1]}($url[2]);
                } else {
                    $controller->{$url[1]}();
                }
            } else {
                $this->errorpage();
                return false;
            }
        } else {
            $controller->index();
        }
    }

    function errorpage() {
        require 'controllers/errorpage.php';
        $controller = new Errorpage();
        $controller->index();
    }

}
