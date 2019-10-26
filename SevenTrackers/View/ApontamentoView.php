<?php
namespace SevenTrackers\View;
use SevenTrackers\View\View;


class ApontamentoView extends View{
    public function renderApt($dados)
    {
        $files = $this->render('','apontamento');
        $html = $this->replace($files, $dados);

        print_r($html);

    }
}