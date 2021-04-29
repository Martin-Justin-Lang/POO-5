<?php
/**
 * Created by PhpStorm.
 * User: lang
 * Date: 10/04/21
 * Time: 11:37
 */


require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{

    public function __construct($nbLane = 2, $maxSpeed = 50)
    {
        parent::__construct($nbLane, $maxSpeed);

    }

    public function addVehicule(object $Vehicle)
    {
        if ($Vehicle instanceof Vehicule) {
            $this->currentVehicles[] = $Vehicle;

        }
    }
}