<?php

require_once 'Animal.php';

class Frog extends Animal
{
    // Constructor
    public function __construct($name)
    {
        parent::__construct($name);
        $this->legs = 4; // Frogs have 4 legs
    }

    // Function specific to Frog
    public function jump()
    {
        echo "Jump : Hop Hop!<br>";
    }
}
