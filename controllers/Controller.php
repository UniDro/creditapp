<?php

class Controller{
    protected function redirectToRoute($controllerPrefix, $action, $params = []): void
    {

        $url = 'index.php?c=' . urlencode($controllerPrefix) . '&a=' . urlencode($action);

        foreach($params as $key => $value){
            $url .= '&' . urlencode($key) . '=' . urlencode($value);
        }

        header('Location: ' . $url);
    }

    protected function renderView($controllerPrefix, $viewName, $data = [], $layout = 'default'): void
    {
        extract($data);
        $viewPath = 'views/' . $controllerPrefix . '/' . $viewName . '.php';
        $layoutPath = 'layout/' . $layout . '.php';
        require_once ($layoutPath);
    }

    protected function getHTTPPostParam($key){
        return $_POST[$key] ?? '';
    }

    protected function getHTTPGetParam($key){
        return $_GET[$key] ?? '';
    }

    protected function hasHTTPPostParam($key) : bool{
        return isset($_POST[$key]);
    }

    protected function hasHTTPGetParam($key) : bool{
        return isset($_GET[$key]);
    }

    protected function authenticationFilter(){
        $auth = new Auth();
        if(! $auth->isLoggedIn()){
            echo "<script>
            alert('Tentativa de acesso inválida!\\nPor favor, inicie sessão primeiro!');
            window.location.href='" . INVALID_ACCESS_ROUTE . "';
            </script>";

        }
    }
}