<?php
namespace SevenTrackers\Model;
use SevenTrackers\Model\Model;

class ItensModel extends Model
{
    private $Codigo;
    private $Descricao;
    private $data_saida;
    private $data_entrada;
    private $metodo_tratamento;
    private $Interno;
    private $Quantidade_entrada;
    private $Quantidade_saida;
    private $Periculosidade_Residuo;
    private $Comprovante;
    private $Terceiro;
    
    public function __construct($Codigo, $Descricao, $data_saida, $data_entrada, $metodo_tratamento, $Interno, $Terceiro, $Quantidade_entrada, $Quantidade_saida, $Periculosidade_Residuo, $Comprovante)
    {
        $this->Codigo = $Codigo;
        $this->Descricao = $Descricao;
        $this->data_saida = $data_saida;
        $this->Terceiro = $Terceiro;
        $this->data_entrada = $data_entrada;
        $this->metodo_tratamento = $metodo_tratamento;
        $this->Interno = $Interno;
        $this->Quantidade_entrada = $Quantidade_entrada;
        $this->Quantidade_saida = $Quantidade_saida;
        $this->Periculosidade_Residuo = $Periculosidade_Residuo;
        $this->Comprovante = $Comprovante;
    }
    
    public function InsertItens()
    {

        $Codigo = $this->Codigo;
        $Descricao = $this->Descricao;
        $Terceiro = $this->Terceiro;
        $data_saida = $this->data_saida;
        $data_entrada = $this->data_entrada;
        $metodo_tratamento = $this->metodo_tratamento;
        $Interno = $this->Interno;
        $Quantidade_entrada = $this->Quantidade_entrada;
        $Quantidade_saida = $this->Quantidade_saida;
        $Periculosidade_Residuo = $this->Periculosidade_Residuo;
        $Comprovante            =  $this->Comprovante;
        
        $Columns = array('codigo, Descricao, data_saida, data_entrada,metodo_tratamento,Interno, Terceiro, Quantidade_entrada, Quantidade_saida, Periculosidade_Residuo, Comprovante');
        $Values = array("$Codigo","$Descricao","$data_saida","$data_entrada","$metodo_tratamento","$Interno","$Terceiro","$Quantidade_entrada","$Quantidade_saida","$Periculosidade_Residuo", "$Comprovante" );
        $this->dbInsert('Itens', $Columns, $Values);
    }
}