<?php

namespace SevenTrackers\Controller;
use SevenTrackers\Controller\Controller;
use SevenTrackers\Model\TerceirosModel;
use SevenTrackers\View\TerceirosView;

class TerceirosController extends Controller
{
    public function cadastrar()
    {
        $POST = $this->getPost();
        $NomeF = $POST['NomeF'];
        $CNPJ = $POST['CNPJ'];
        $cnae = $POST['cnae'];
        $RazaoSocial = $POST['RazaoSocial'];
        $DataAbertura = $POST['dataabertura'];
        $Tipo = $POST['tipo'];
        $NatuJuridica = $POST['juridica'];



        $empresaModel = new TerceirosModel($NomeF,$CNPJ,$cnae,$RazaoSocial,$DataAbertura,$Tipo,$NatuJuridica);
        $empresaModel->InsertTerceiros();

        $empresaView = new TerceirosView();
        $empresaView->ViewTerceiros('Terceiros');

    }
}