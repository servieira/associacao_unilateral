<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<img src="associações-uml.jpg" />
<img src="quadrado.jpg" />
<img src="cachorro.jpg" style="height: 200px;"/>
<img src="carro.jpg" style="height: 200px;"/>
<img src="casa.jpg" style="height: 200px;"/>



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
</body>
</html>