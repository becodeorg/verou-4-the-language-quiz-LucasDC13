<?php

class Player
{   
    // Properties
    private string $name;
    private int $score;

    // Constructor
    public function __construct(string $name)
    {
        $this->name = "👤 " . $name;
        $this->score = 0; 
    }

    // Methods
    public function getName() {
        return $this->name;
    }
    public function getScore() {
        return $this->score;
    }
    public function raiseScore() {
        $this->score += 1;
    }
}