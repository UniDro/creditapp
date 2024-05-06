<?php
require_once "Controller.php";
require_once "./models/Plano.php";
require_once "./models/Auth.php";
class PlanoController extends Controller
{

    public function __construct()
    {
        $this->authenticationFilter();
    }

    public function index()
    {
        //require_once "views/plano/index.php";
        $this->renderView('plano', 'index');
    }

    public function show(): void
    {
        $credito = $this -> getHTTPPostParam('credito');
        $numPrestacao = $this -> getHTTPPostParam('numPrestacao');
        $plano = new Plano();

        $planoPagamento = $plano->calculaPlano($credito, $numPrestacao);

        $this->renderView('plano', 'show', ['planoPagamento' => $planoPagamento, 'numPrestacao' => $numPrestacao]);

    }
}