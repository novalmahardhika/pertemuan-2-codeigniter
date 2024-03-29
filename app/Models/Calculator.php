<?php

namespace App\Models;



class Calculator
{
   public $value1,$value2,$result;

   public function sum($val1,$val2){
    $this->value1 = $val1;
    $this->value2 = $val2;
    $this->result = $this->value1 + $this->value2;

    return $this->result;
   }
}
