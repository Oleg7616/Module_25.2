<?php 
 
class Car extends Vehicles implements Interior, NitrousOxide, Signal, Wipers {
    private $bodyType;
    private $seatsCount;

    public function getSeatsCount() {
        return $this->seatsCount;
    }
 
    public function movementForward() {
        //...
    }

    public function movementBackward() {
        //...
    }

    public function interior()
    {
        //...
    }
    

    public function speedUp()
    {
        //...
    }

    public function beep()
    {
        //...
    }

    public function wipersOn()
    {
        //...
    }

}