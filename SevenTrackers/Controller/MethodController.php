<?php

namespace SevenTrackers\Controller;
use SevenTrackers\Controller\Controller;
use SevenTrackers\Controller\ApontamentoController;

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

        if ($m == 'cadastro')
        {
			$mth = new UserController();
			$mth->cadastro();
        }

        if ($m == 'Logout'){
            $Session = new SessionController();
            $Session->logout();
            header("refresh: 0");
            header("Location: /");
        }
    }   

}