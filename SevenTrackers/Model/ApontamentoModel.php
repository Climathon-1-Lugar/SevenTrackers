<?php

namespace SevenTrackers\Model;
use SevenTrackers\Model\Model;

Class ApontamentoModel extends Model{
    public function teste(){
        $stmt = $this->getAll('Itens', '*');
        $dados = $this->getResult($stmt);
        
        //$this->ver($dados);
        return $dados;
        
    }
}