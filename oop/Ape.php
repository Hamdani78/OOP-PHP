<?php

require_once 'Animal.php';

class Ape extends Animal
{
    // Constructor
    public function __construct($name)
    {
        parent::__construct($name);
        $this->legs = 2; // Apes have 2 legs
    }

    // Function specific to Ape
    public function yell()
    {
        echo "Yell : Auoooo<br>";
    }
}
