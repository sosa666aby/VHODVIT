<?php

namespace App;

class Developer extends Worker{
    use HasRest;
    public function work(){
        print_r("im developing");
    }
}