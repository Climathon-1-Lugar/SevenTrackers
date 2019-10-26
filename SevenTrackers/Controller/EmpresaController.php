<?php

namespace SevenTrackers\Controller;
use SevenTrackers\Controller\Controller;
use SevenTrackers\Model\EmpresaModel;
use SevenTrackers\View\EmpresaView;

class EmpresaController extends Controller
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



        $empresaModel = new EmpresaModel($NomeF,$CNPJ,$cnae,$RazaoSocial,$DataAbertura,$Tipo,$NatuJuridica);
        $empresaModel->InsertEmpresa();

        $empresaView = new EmpresaView();
        $empresaView->ViewEmpresa('Empresa');

    }
}