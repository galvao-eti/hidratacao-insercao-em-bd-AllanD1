<?php
    require 'autoload.php';
    use Trabalho\Usuario;
    use Trabalho\Produto;
    $prod =  new Produto();
    $prod->setDescricao("sadsasadas");
    $prod->setValor(1);
    $prod->test();

?>