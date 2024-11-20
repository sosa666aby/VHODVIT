<?php

namespace App;

class Salary{

    static public int $hoursAmount;
    static public function count($hours): int{
        self::$hoursAmount = count ($hours);
        return self::$hoursAmount * 1500;
    }
}