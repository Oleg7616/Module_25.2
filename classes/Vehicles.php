<?php 

abstract class Vehicles() {

    private $model;
    private $weight;

    abstract public function movementForward();
    abstract public function movementBackward();
}