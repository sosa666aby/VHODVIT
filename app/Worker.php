<?php

namespace App;
abstract class Worker implements WorkerInterface
{
    private string $name;
    private int $age;

    private string $position;

    private array $hours;

    private float $experience;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }   
  

    public function setPosition($position){
        $this->position=$position;
    }

    public function getPosition():string{
        return $this->position;
    }
    public function getName():string{
        return $this->name;
    }

    public function setHours($hours){
        $this->hours=$hours;
    }

    public function getHours():array{
        return $this->hours;
    }
}