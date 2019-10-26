<?php

namespace SevenTrackers\Controller;
use SevenTrackers\Controller\Controller;

class MethodController extends Controller
{
    public function MethodController($m)
    {
        if ($m == 'empresa')
        {
			$mth = new EmpresaController();
			$mth->cadastrar();
        }

        if ($m == 'testando'){
            echo "esta funcionando";
        }

        if ($m == 'cadastro')
        {
			$mth = new UserController();
			$mth->cadastro();
        }

        if ($m == 'index'){
            $mth = new TreinoController();
            $mth->index();
        }

        if ($m == 'Logout'){
            $Session = new SessionController();
            $Session->logout();
            header("refresh: 0");
            header("Location: /");
        }
    }   

}