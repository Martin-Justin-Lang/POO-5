<?php


require_once  '../vehicule.php';
require_once 'LightableInterface.php';


class Camion extends vehicule implements LightableInterface
{

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

private string $energy;
private int $storageCapacity;
private int $load = 0;


    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->setStorageCapacity($storageCapacity);
    }

    public function switchOn(): bool
    {
        return true ;
    }

    public function switchOff(): bool
    {
        return false ;
    }


    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
    }

    public function Camionisfull()
    {
        if ($this->getStorageCapacity() <= $this->load) {
            return "Capacity full.";
        } else {
            return "Filling.";
        }
        return $this;
    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity ($storageCapacity): void
    {
            $this->storageCapacity=$storageCapacity;

    }

    public function getLoad(): int
    {
        return $this->load;
    }

    public function setLoad ($load) : void
    {
            $this->load=$load;
    }

}