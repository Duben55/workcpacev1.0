<?php

namespace MyProject;

require_once 'vendor/autoload.php';

abstract class Factory
{
    protected string $name;
    protected string $color;
    protected float $weight;
    protected float $length;
    protected static $instances = [];

    public static function createInstance(): void
    {
        $jsonContent = file_get_contents('jsonContent.json');
        $carsArray = json_decode($jsonContent, true);
        foreach ($carsArray as $value) {
            switch ($value["types"]) {
                case 'economical':
                    $instance = new EconomicalCar();
                    $instance->makeFromArray($value);
                    self::addInstance($instance);
                    break;
                case 'business':
                    $instance = new BusinessCar();
                    $instance->makeFromArray($value);
                    self::addInstance($instance);
                    break;
                case 'sport':
                    $instance = new SportCar();
                    $instance->makeFromArray($value);
                    self::addInstance($instance);
                    break;
                default:
                    echo 'Invalid class type';
            }
        }
    }

    public static function addInstance($instance): void
    {
        static::$instances[] = $instance;
    }

    public static function getInstances(): array
    {
        return static::$instances;
    }

    public function makeFromArray(array $carsArray): void
    {
        foreach ($carsArray as $key => $value) {
            if (property_exists($this, $key)) {
                $this->$key = $value;
            }
        }
    }
}

Factory::createInstance();
var_dump(Factory::getInstances());
