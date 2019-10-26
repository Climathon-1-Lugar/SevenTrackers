<?php

namespace SevenTrackers\Controller;
use SevenTrackers\Controller\Controller;
use SevenTrackers\Model\ItensModel;
use SevenTrackers\View\ItensView;

class ItensController extends Controller
{
    public function cadastrar()
    {
        $POST = $this->getPost();

        $Codigo = $POST['Codigo']; 
        $Descricao = $POST['Descricao'];
        $data_saida = $POST['datasaida'];
        $data_entrada = $POST['dataentrada'];
        $metodo_tratamento = $POST['tratamento'];
        $Interno = $POST['interno'];
        $Terceiro = $POST['terceiro'];
        $Quantidade_entrada = $POST['entrada'];
        $Quantidade_saida = $POST['saida'];
        $Periculosidade_Residuo = $POST['residuo'];
        $Comprovante = $POST['comprovante'];

        $empresaModel = new ItensModel($Codigo, $Descricao, $data_saida, $data_entrada, $metodo_tratamento, $Interno, $Terceiro, $Quantidade_entrada, $Quantidade_saida, $Periculosidade_Residuo, $Comprovante);
        $empresaModel->InsertItens();

        $empresaView = new ItensView();
        $empresaView->ViewItens('Itens');

    }
}