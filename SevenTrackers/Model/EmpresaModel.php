<?php
namespace SevenTrackers\Model;
use SevenTrackers\Model\Model;

class EmpresaModel extends Model
{
    private $NomeF;
    private $CNPJ;
    private $cnae;
    private $RazaoSocial;
    private $DataAbertura;
    private $Tipo;
    private $NatuJuridica;
    
    public function __construct($NomeF,$CNPJ,$cnae,$RazaoSocial,$DataAbertura,$Tipo,$NatuJuridica)
    {
        $this->NomeF = $NomeF;
        $this->CNPJ = $CNPJ;
        $this->cnae = $cnae;
        $this->RazaoSocial = $RazaoSocial;
        $this->DataAbertura = $DataAbertura;
        $this->Tipo = $Tipo;
        $this->NatuJuridica = $NatuJuridica;
    }
    
    public function InsertEmpresa()
    {
        $NomeF = $this->NomeF;
        $CNPJ = $this->CNPJ;
        $cnae = $this->cnae;
        $RazaoSocial = $this->RazaoSocial;
        $DataAbertura = $this->DataAbertura;
        $Tipo = $this->Tipo;
        $NatuJuridica = $this->NatuJuridica;
        
        $Columns = array('NomeFantasia, CNPJ, Cnae, RazaoSocial, Data_Abertura, Tipo, NaturezaJuridica');
        $Values = array("$NomeF","$CNPJ","$cnae","$RazaoSocial","$DataAbertura","$Tipo","$NatuJuridica");
        $this->dbInsert('Empresa', $Columns, $Values);
    }
}