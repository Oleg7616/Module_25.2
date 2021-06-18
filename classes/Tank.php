<?php 

class Tank extends Vehicles {
    private $weaponType;
    private $ammunitionCount;

    public function movementForward() {
        //...
    }

    public function movementBackward() {
        //...
    }

    public function shoot() {
        //...
    }

    private function getAmmunitionCount() {
        return $this->ammunitionCount;
    }
}