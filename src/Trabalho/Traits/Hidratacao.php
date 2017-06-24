<?php

namespace Trabalho\Traits;

trait Hidratacao {
    public function salvarBanco(\PDO $conn) {
        $cl = get_class($this);
        $cl = explode("\\" , $cl);
        $tabela = strtolower($cl[1]);
        $arr = get_object_vars($this);
        $campos  = "";
        $valores = "";
        

        foreach ($arr as $campo => $val  ) {
            $campos .= ",".$campo;
            $valores .= ",'".$val."'";
        } 
            $campos =  substr($campos,1);
            $valores = substr($valores,1);
            
           
        try {
        
            $sql = "INSERT INTO ".$tabela." (".$campos.") VALUES (".$valores.")";
            echo $sql;
            $stmt = $conn->prepare($sql);
            // $stmt->bindParam(":descricao", $descricao);
            // $stmt->bindParam(":valor", $valor);
            $stmt->execute();
        } catch (\Exception $ex) {
            die("<pre>" . __FILE__ . " - " . __LINE__ . "\n" . print_r($ex, true) . "</pre>");
        }
    }
    
}