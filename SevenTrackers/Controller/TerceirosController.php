<?php

namespace SevenTrackers\Controller;
use SevenTrackers\Controller\Controller;

class TerceirosController extends Controller
{
    public function cadastrar()
    {
        $POST = $this->getPost();
        $NomeF = $POST['NomeF'];
        $CNPJ = $POST['CNPJ'];
        $cnae = $POST['cnae'];
        $RazaoSocial = $POST['RazaoSocial'];
        $DataAbertura = $POST['NomeF'];
        $Tipo = $POST['NomeF'];
        $NatuJuridica = $POST['NomeF'];



        $empresaModel = new EmpresaModel($NomeF,$CNPJ,$cnae,$RazaoSocial,$DataAbertura,$Tipo,$NatuJuridica);
        $empresaModel->InsertTerceiros();

        $empresaView = new EmpresaView();
        $empresaView->ViewTerceiros('Empresa');

    }
}