<?php
namespace Trabalho;
/**
 *
 * @author Allan da Silva
 */
class Produto {
    private $descricao;
    private $valor;


    function getDescricao() {
        return $this->descricao;
    }

    function getValor() {
        return $this->valor;
    }
    function setDescricao($descricao) {
        if (strlen(trim($descricao)) < 6) {
            throw new \Exception("Descrição deve ter no mínimo 6 digitos");
            return;
        }
        $this->descricao = $descricao;
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