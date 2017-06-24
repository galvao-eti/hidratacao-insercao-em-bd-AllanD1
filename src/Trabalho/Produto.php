<?php
namespace Trabalho;
/**
 *
 * @author Allan da Silva
 */
class Produto {
    private $nome;
    private $valor;


    function getNome() {
        return $this->nome;
    }

    function getValor() {
        return $this->valor;
    }
    function setNome($nome) {
        if (strlen(trim($nome)) < 6) {
            throw new \Exception("Nome deve ter no mínimo 6 digitos");
            return;
        }
        $this->nome = $nome;
    }


    function setValor($valor) {
        if ($valor <= 0) {
            throw new \Exception("Valor deve ser maior que Zero");
            return;
        }
        $this->valor = $valor;
    }

    use Traits\Hidratacao;


   
}