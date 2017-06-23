<?php

namespace Trabalho\Traits;

trait Hidratacao {
    public function test() {
        
        var_dump(get_object_vars($this));
    }
}