<?php
require_once "./models/Plano.php";
require_once "./models/Auth.php";
class PlanoController {

    public function __construct()
    {
        $auth = new Auth();
        if(!$auth->isLoggedIn()){
            header("Location: index.php?c=auth&a=index");
        }
    }

    public function index()
    {
        require_once "views/plano/index.php";
    }

    public function show(){
        $credito = $_POST['credito'];
        $numPrestacao = $_POST['numPrestacao'];
        $plano = new Plano();

        $planoPagamento = $plano->calculaPlano($credito, $numPrestacao);

        require_once './views/plano/show.php';
    }
}