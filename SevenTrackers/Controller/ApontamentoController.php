<?php

namespace SevenTrackers\Controller;
use SevenTrackers\Controller\Controller;
use SevenTrackers\View\ApontamentoView;
use SevenTrackers\Model\ApontamentoModel;
Class ApontamentoController extends Controller{
    public function index(){
        
        $apt = new ApontamentoModel();
        $dados = $apt->teste();
        
        $aptView = new ApontamentoView();
        $aptView->renderApt($dados);
        

    }
}