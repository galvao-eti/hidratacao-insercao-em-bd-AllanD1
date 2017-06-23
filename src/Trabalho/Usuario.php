<?php
namespace Trabalho;
/**
 *
 * @author Allan da Silva
 */

class  Usuario  {
    private $login;
    private $senha;

    
    public function getLogin(){
        return $this->login;
    }
    public function setLogin(){
        if (strlen(trim($login)) < 4) {
            throw new \Exception("Login deve ter no mínimo 4 digitos");
            return;
        }
        $this->login = $login;
    }

    public function getSenha(){
        return $this->senha;
    }
    
    public function setSenha(){
       if (strlen(trim($senha)) < 6) {
            throw new \Exception("Senha deve ter no mínimo 6 digitos");
            return;
        }
        $this->senha = $senha;
    }



}