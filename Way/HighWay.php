<?php


abstract class HighWay
{
    private array $currentVehicles ;
    private int $nbLane ;
    private int $maxSpeed ;

    public function __construct($nbLane, $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

      public function setCurrentVehicles(array $currentVehicles)
    {
            $this->currentVehicles = $currentVehicles;
        }


    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    public function setNbLane(int $nbLane)
    {
        $this->nbLane = $nbLane;
    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    public function setMaxSpeed(int $maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }

/* Numéro 4 : Ma méthode ou fonction addVehicule prend en paramètre Vehicle du type object*/
    abstract public function addVehicule(object $Vehicle);






}