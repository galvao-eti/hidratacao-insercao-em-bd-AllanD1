<?php
namespace Trabalho;
/**
 *
 * @author Allan da Silva
 */

class  Usuario  {
    private $email;
    private $senha;

    
    public function getEmail(){
        return $this->email;
    }

    public function getSenha(){
        return $this->senha;
    }
    
     function setEmail($email) {
        if (strlen(trim($email)) < 6) {
            throw new \Exception("email deve ter no mínimo 6 digitos");
            return;
        }
        $this->email = $email;
    }
    function setSenha($senha) {
        if (strlen(trim($senha)) < 6) {
            throw new \Exception("senha deve ter no mínimo 6 digitos");
            return;
        }
        $this->senha = $senha;
    }

    use Traits\Hidratacao;

}