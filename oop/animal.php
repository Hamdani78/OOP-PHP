<?php

class Animal
{
    // Properties
    public $name;
    public $legs = 4;
    public $cold_blooded = 'no';

    // Constructor
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function displayInfo()
    {
        echo "Name: {$this->name}<br>";
        echo "Legs: {$this->legs}<br>";
        echo "Cold Blooded: {$this->cold_blooded}<br>";
    }
}
