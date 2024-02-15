<?php
//3 класса геометрических фигур, у каждого класса есть метод "вычислить площадь",
//классы реализует интерфейс "вычислить площадь", кроме кроме квадрата,
//Выводит: имя класса, реализует ли класс интерфес и результат посчитанный методом "вычислить площадь"
interface CalculateSquare
{
    public function calculateSquare(): float;
}
final class Rectangle implements CalculateSquare
{
    private float $x;
    private float $y;
    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function calculateSquare(): float
    {
        return $this->x * $this->y;
    }
}
final class Square
{
    private float $x;
    public function __construct(float $x)
    {
        $this->x = $x;
    }
    public function calculateSquare(): float
    {
        return $this->x ** 2;
    }
}
final class Circle implements CalculateSquare
{
    const float PI = 3.1415926535898;
    private float $r;
    public function __construct(float $r)
    {
        $this->r = $r;
    }
    public function calculateSquare(): float
    {
        return self::PI * ($this->r ** 2);
    }
}

$objects = [
    new Square(5),
    new Rectangle(2, 4),
    new Circle(5),
];

foreach ($objects as $object) {
    if ($object instanceof CalculateSquare) {
        echo get_class($object) . ' реализует интерфейс CalculateSquare. Площадь: ' . round($object->calculateSquare(), 2) . PHP_EOL;
    } else {
        echo get_class($object) . ' не реализует интерфейс CalculateSquare.' . PHP_EOL;
    }
}
