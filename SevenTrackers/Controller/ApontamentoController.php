<?php

namespace SevenTrackers\Controller;
use SevenTrackers\Controller\Controller;
use SevenTrackers\View\ApontamentoView;
use SevenTrackers\Model\ApontamentoModel;

Class ApontamentoController extends Controller{
    public function index(){
        
        $apt = new ApontamentoModel();
        $stmt = $apt->getAll('Itens', '*');
        $dados = $apt->Getresult($stmt);
        
        
        print_r($dados);
        die("oioioio");
        $aptView = new ApontamentoView();
        $aptView->renderApt($dados);
        

    }
}