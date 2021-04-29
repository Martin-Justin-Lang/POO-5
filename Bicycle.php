<?php

require_once  'vehicule.php';
require_once 'LightableInterface.php';


class Bicycle extends vehicule implements LightableInterface
{
    public function switchOn(): string
    {
        if($this->getCurrentSpeed() >10)
        {
            return 'Oui';
        } else {
            return 'Non' ;
        }
    }

    public function switchOff(): string
    {
        return 'Non' ;
    }
}