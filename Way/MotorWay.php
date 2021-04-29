<?php
/**
 * Created by PhpStorm.
 * User: lang
 * Date: 10/04/21
 * Time: 11:22
 */

require_once 'HighWay.php';

final class MotorWay extends HighWay
{

    public function __construct($nbLane = 4, $maxSpeed = 130)
    {
        parent::__construct($nbLane, $maxSpeed);

    }


    public function addVehicule(object $Vehicle)
    {
        if ($Vehicle instanceof Car || $Vehicle instanceof Camion) {
            $this->currentVehicles[] = $Vehicle;
        }
    }


}