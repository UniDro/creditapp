<?php
require_once './models/Auth.php';
class AuthController
{
    public function index()
    {
        require_once './views/auth/index.php';
    }

    public function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $auth = new Auth();
        if ($auth->checkAuth($username, $password)) {
            header("Location: index.php?c=plano&a=index");
        }
        else{
            require_once './views/auth/index.php';
        }
    }

    public function show(){
        $credito = $_POST['credito'];
        $numPrest = $_POST['numPrest'];

        $despesa = 10;

        $plano = new Plano();

        $planoPagamento = $plano->calculaPlano($credito, $numPrest);
        require_once './views/plano/show.php';
    }

    public function logout(){
        $auth = new Auth();
        $auth->logout();
        header("Location: index.php?c=auth&a=index");
    }
}