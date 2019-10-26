<?php
namespace SevenTrackers\View;
use SevenTrackers\View\View;

class TerceirosView extends View
{
    public function ListTerceiros()
    {
        $this->render('','');
        $html = $this->replace('','');
        print_r($html);
    }

    public function ViewTerceiros($name)
    {
        $this->mostrar($name);
    }
}