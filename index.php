<?php
    require_once "Produto.class.php";
    require_once "Fornecedor.class.php";

    $fornecedor = new Fornecedor("111.111.111/0001-21", "Pilot");
    $fornecedor2 = new Fornecedor("222.222.222/0001-22", "Bic");

    $produto = new Produto("Caneta Azul", "Caneta bic esferográfica", 2, array($fornecedor, $fornecedor2));

    /*echo "<pre>";
    var_dump($produto);
    echo "</pre>";*/

    echo "<h1>Produto</h1>";
    echo "Nome: {$produto->getNome()}<br>";
    echo "Descricao: {$produto->getDescricao()}<br>";
    echo "Preco: R$" . number_format($produto->getPreco(), 2, ",",".") . "<br>";
    foreach($produto->getFornecedor() as $objeto)
    {
        //item->nome
        echo "Cnpj: {objeto->getCnpj()}<br>";
        echo "Rasão Social: {objeto->getRazao_social()}<br>";
    }

?>