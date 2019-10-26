<?php

namespace SevenTrackers\Controller;

use SevenTrackers\View\IndexView;

class Controller {

    public $allPost;
    public $html;

    public function ver($v)
    {
        echo "<pre>";
        print_r($v);
        echo "</pre>";
        die();
    }

    public function view($p)
    {
        $view = new IndexView;
        $view->mostrar($p);
    }
    //Captura todos os posts, tornar a variavel $allPost Global.
    public function getPost()
    {
        foreach ($_POST as $key => $value) {
            $this->allPost[$key] = $value; 
        }
        return $this->allPost;
    }

}   
