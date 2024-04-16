<?php
// PHP 8
class produto{
    
    // métodos construtor por parametro
    public function __construct(private string $nome = "", private string $descricao = "",
    private float $preco= 0.00, private array $fornecedor = array()){}



    //métodos gets 

    /* 
    Este é o método que podemos enviar um número limitado de informações 
    para o servidor.  Como este método utiliza os campos de endereço,  você 
    pode  enviar  no máximo 1024 caracteres de informação.  As  informações 
    podem ser visíveis para o usuário, porque ficam  presentes na endereço. 
    */

    public function getNome()
    {
        return $this->nome;
    }

    public function getDescricao()
    {
       return $this->descricao;
    }

    public function getPreco()
    {
    
       return $this->preco;
    }

    public function getFornecedor()
    {
    
       return $this->fornecedor;
    }
   

    /* métodos sets*/

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    } 

    /* $endereco é um parametro*/
    public function setPreco($preco)
    {
        /*enderenco atributo */
        $this->preco= $preco;
    }

    public function setFornecedor($fornecedor)
    {
        /*enderenco atributo */
        $this->fornecedor[] = $fornecedor;
    }

    
}
?>