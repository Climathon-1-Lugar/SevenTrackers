<?php

namespace SevenTrackers\Controller;
use SevenTrackers\Controller\Controller;

class ItensController extends Controller
{
    public function cadastrar()
    {
        $POST = $this->getPost();

        $Codigo = $POST['Codigo']; 
        $Descricao = $POST['Descricao'];
        $data_saida = $POST['datasaida'];
        $data_entrada = $POST['NomeF'];
        $metodo_tratamento = $POST['NomeF'];
        $Interno = $POST['NomeF'];
        $Terceiro = $POST['NomeF'];
        $Quantidade_entrada = $POST['NomeF'];
        $Quantidade_saida = $POST['NomeF'];
        $Periculosidade_Residuo = $POST['NomeF'];
        $Comprovante = $POST['NomeF'];

        $empresaModel = new ItensModel($Codigo, $Descricao, $data_saida, $data_entrada, $metodo_tratamento, $Interno, $Terceiro, $Quantidade_entrada, $Quantidade_saida, $Periculosidade_Residuo, $Comprovante);
        $empresaModel->InsertItens();

        $empresaView = new ItensView();
        $empresaView->ViewItens('Itens');

    }
}