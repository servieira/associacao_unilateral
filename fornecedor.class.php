<?php
// PHP 8
class fornecedor{
    
    // métodos construtor por parametro
    public function __construct(private string $cnpj = "", 
    private string $razao_social = "",
    ){}



    //métodos gets 
    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function getRazao_social()
    {
       return $this->razao_social;
    }

   
    

    /* métodos sets*/

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    public function setRazaosocial($razao_social)
    {
        $this->razao_social = $razao_social;
    } 

    

   
    
}
?>