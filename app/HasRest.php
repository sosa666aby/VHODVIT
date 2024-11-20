<?php

namespace App;
trait HasRest
{
   public function rest(){
      echo($this->getName() . ' has rest');
   }
}