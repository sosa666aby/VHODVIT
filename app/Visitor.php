<?php

namespace App;
class Visitor
{
    public string $name;
    public int $age;

    public function visit()
    {
        print_r('visit process');    
    }
}