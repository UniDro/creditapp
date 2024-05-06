<?php
//require_once 'vendor/autoload.php';
use Carbon\Carbon;
class Plano
{


    public function calculaPlano($credito, $numPrestacoes)
    {
        $despesasCredito = 50;
        $valorPrestacao = $credito/$numPrestacoes;
        for($linhas = 0; $linhas < $numPrestacoes; $linhas++){
            $data = Carbon::now();
            $planoPagamento[$linhas][0] = $data->addMonths($linhas)->format('Y-m-d');
            $planoPagamento[$linhas][1] = $valorPrestacao;
            $planoPagamento[$linhas][2] = $credito - ($valorPrestacao * ($linhas + 1));
        }
        $planoPagamento[0][1] += $despesasCredito;
        return $planoPagamento;
    }
}