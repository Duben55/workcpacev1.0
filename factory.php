<?php
require_once '../factory/EconomicalCar.php';
require_once '../factory/SportCar.php';
require_once '../factory/BusinessCar.php';

class  CarFactory
{
    protected static array $vseCars;
    protected string $name;
    protected string $color;
    protected float $weight;
    protected float $length;
    public function __construct(array $carsArray)
    {
        foreach ($carsArray as $key => $value) {
            if (is_array($carsArray)) {
                if (property_exists($this, $key)) {
                    $this->$key = $value;
                }
            }
        }
    }

    public function sayHello(): void
    {
        echo 'Меня зовут ' . $this->name . '.' . PHP_EOL;
//        echo 'Я машина класса ' . get_class($object) . '.' . PHP_EOL;
        echo 'Мой цвет - ' . $this->color . '.' . PHP_EOL;
        echo 'Мой вес равен ' . $this->weight . ' тонны.' . PHP_EOL;
        echo 'Моя длина составляет ' . $this->length . ' метра.' . PHP_EOL;
    }

    public static function addCars($instance): void
    {
        self::$vseCars[] = $instance;
    }
    public static function getCars(): array
    {
        return self::$vseCars;
    }

    function createByCount($carCount)
    {
//        for ($i = 1; $i <= $carCount; $i++) {

    }
}

$carsArray = [
    'name' => 'mazeratti',
    'color' => 'white',
    'weight' => 3,
    'length' => 4.5,
];

$car1 = new EconomicalCar($carsArray);
$car1->makeFromArray($carsArray);

$instances = CarFactory::getCars();
//var_dump($instances);

echo 'Я машина класса ' . get_class($car1) . '.' . PHP_EOL;
$car1->sayHello();
