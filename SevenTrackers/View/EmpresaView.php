<?php
namespace SevenTrackers\View;
use SevenTrackers\View\View;

class EmpresaView extends View
{
    public function ListEmpresa()
    {
        $this->render('','');
        $html = $this->replace('','');
        print_r($html);
    }

    public function ViewEmpresa($name)
    {
        $this->mostrar($name);
    }
}