<?php

class Car
{

    private $nbWheels;

    private $currentSpeed;

    private $color;

    private $nbSeats;

    private $typeOfEnergy;
    
    private $fuelLevel;

    // Function construct

    private function getColor(): string
    {
        return $this->setColor;
    }
    private function setColor(string $color) : void
    {
        $this->color = $color;
    }

    private function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    private function setNbSeats(int $nbSeats) : int
    {
        $this->nbSeats = $nbSeats;
    }

    private function getTypeOfEnergy(): string
    {
        return $this->typeOfEnergy;
    }

    private function setTypeOfEnergy(string $typeOfEnergy) : int
    {
        $this->typeOfEnergy = $typeOfEnergy;
    }

    private function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    private function setCurrentSpeed(int $currentSpeed) : int
    {
        $this->currentSpeed = $currentSpeed;
    }
    private function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    private function setNbWheels(int $nbWheels) : int
    {
        $this->nbWheels = $nbWheels;
    }

    public function __construct(
        string $color,
        int $nbSeats,
        string $typeOfEnergy
    )
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->typeOfEnergy = $typeOfEnergy;
    }

    public function forward($currentSpeed)
    { 
        $this->currentSpeed = $currentSpeed;

        return "Go !";
    }

    public function brake($currentSpeed)
    {
    $this->currentSpeed = $currentSpeed;

        return "La voiture avance";
    }
    public function curb($currentSpeed)
    {
    $this->currentSpeed = $currentSpeed;

        return "La voiture freine";
    }
}
