<?php

require_once '../vehicule.php';
require_once 'LightableInterface.php';

class Car extends Vehicule implements LightableInterface
{

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

private string $energy;

private int $energyLevel;

private bool $hasParkBrake = true;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }


    public function switchOn(): bool
    {
        return true ;
    }

    public function switchOff(): bool
    {
        return false ;
    }

    public function setParkBrake(bool $hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;
        return $this;
    }
    public function getParkBrake()
    {
        return $this->hasParkBrake;
    }

    public function start() 
    {
        $ParkBrake = $this->getParkBrake();
        if ($ParkBrake != false) {
            throw new Exception("Le frein à main est bloqué wesh! t'es con ou quoi ?.");
        }
        return "Fonce jacky !";
    }





    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }


    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }


   
}