<?php
    require 'autoload.php';
    use Trabalho\Usuario;
    use Trabalho\Produto;
    $config = file_get_contents("config.json");
    $config = json_decode($config);
    $conn = \Trabalho\BancoDeDados::connectDb($config->usuario, $config->senha, $config->host, $config->db);

    $prod =  new Produto();
    $user =  new Usuario();
    
    $prod->setNome("Bala Juquinha");
    $prod->setValor(2.5);
    $prod->salvarBanco($conn);

    $user->setEmail("allanweb019@gmail.com");
    $user->setSenha("123213213");
    $user->salvarBanco($conn);

?>