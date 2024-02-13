<?php

class BusinessCar extends CarFactory
{
    public function __construct(array $carsArray)
    {
        parent::__construct($carsArray);
    }
    public static function makeFromArray(array $carsArray): void
    {
        $newCar = new self($carsArray);
        self::addCars($newCar);
    }
}