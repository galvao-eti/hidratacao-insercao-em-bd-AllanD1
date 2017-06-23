<?php

namespace Trabalho\Traits;

trait Hidratacao {
    public function test() {
        $arr = get_object_vars($this);
        foreach ($arr as $campo => $val  ) {
            echo $campo." = ".$val."\n";
        }
    }
}