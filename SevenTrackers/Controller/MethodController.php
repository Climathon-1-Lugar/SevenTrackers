<?php

namespace SevenTrackers\Controller;
use SevenTrackers\Controller\Controller;
use SevenTrackers\Controller\ApontamentoController;
use SevenTrackers\Controller\EmpresaController;
use SevenTrackers\Controller\TerceirosController;

class MethodController extends Controller
{
    public function MethodController($m)
    {
        if ($m == 'empresa')
        {
			$mth = new EmpresaController();
			$mth->cadastrar();
        }

        if ($m == 'apontamento'){
            $mth = new ApontamentoController;
            $mth->index();
        }

        if ($m == 'itens')
        {
			$mth = new ItensController();
			$mth->cadastrar();
        }

        if ($m == 'terceiros')
        {
			$mth = new TerceirosController();
			$mth->cadastrar();
        }
    }   

}