<?php

// Bicycle.php

class Bicycle
{
    private $color;

    private $currentSpeed;

    private $nbSeats = 1;

    private $nbWheels = 2;

   public function forward($currentSpeed)
    { 
        $this->currentSpeed =$currentSpeed;

        return "Go !";
    }

    public function brake($currentSpeed): string
    {
    $sentence = "";
    while ($this->currentSpeed > $currentSpeed) 
    {
        $this->currentSpeed--;
        $sentence .= "Brake !!!";
    }
    $sentence .= "I'm stopped !";
    return $sentence;  
    }

    public function dump()
    {
        var_dump($this);  
    }

    public function getColor($color): string
    {
        return $this->color = $color;
    }
    public function setColor(string $color) : void
    {
        $this->color = $color;
    }
    
    public function getCurrentSpeed($currentSpeed): string
    {
        return $this->currentSpeed = $currentSpeed;
    }
    public function getNbSeats(string $nbSeats) : void
    {
        $this->nbSeats = $nbSeats;
    }
    public function getnbWheels(string $nbWheels) : void
    {
        $this->nbWheels = $nbWheels;
    }

    public function __construct(string $color)
    {
        $this->color = $color;
    }
    
    

}
