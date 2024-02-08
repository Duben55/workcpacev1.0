<?php
final class Cat
{
    private string $name;
    private string $color;
    private float $weight;
    public function __construct(string $name, string $color, float $weight)
    {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }
    public function sayHello(): void
    {
        echo 'Привет! Меня зовут ' . $this->name . '.' . PHP_EOL;
        echo 'Мой цвет - ' . $this->color . '.' . PHP_EOL;
        echo 'Мой вес равен ' . $this->weight . ' килограмм.' . PHP_EOL;
    }
    public function setCatData(string $name, string $color, float $weight) : void
    {
        $this->name = $name;                    //сеттер
        $this->color = $color;
        $this->weight = $weight;
    }
    public function getName(): string                    //геттер
    {
        return $this->name;
    }
    public function getColor(): string                    //геттер
    {
        return $this->color;
    }
    public function getWeight(): string                    //геттер
    {
        return $this->weight;
    }
}

$cat1 = new Cat('Снежок', 'Белый', 3.5);
$cat1->sayHello();

$cat1->setCatData('Черт', 'Рыжий', 4.6);
$cat1->sayHello();
//echo $cat1->getName() . PHP_EOL;
//echo $cat1->getColor() . PHP_EOL;
//echo $cat1->getWeight() . PHP_EOL;
