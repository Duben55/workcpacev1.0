<?php
//создали класс котиков с тремя свойствами и 2 объекта класса (рыжий и белый),
//конструктор, что бы при создании котика указвать его свойства,
//применил $this, изучил геттеры и сеттеры, модификаторы доступа.
//кот рассказывает о себе методом sayHello()

final class Cat
{
    public function __construct(
        private string $name,
        private string $color,
        private float  $weight
    ) {
    }

    public function sayHello(): void
    {
        echo 'Привет! Меня зовут ' . $this->name . '.' . PHP_EOL;
        echo 'Мой цвет - ' . $this->color . '.' . PHP_EOL;
        echo 'Мой вес равен ' . $this->weight . ' килограмм.' . PHP_EOL;
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

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function setWeight(float $weight): void
    {
        $this->weight = $weight;
    }
}

$cat1 = new Cat('Снежок', 'Белый', 3.5);
$cat1->sayHello();

$cat2 = new Cat('Черт', 'Рыжий', 4.6);
$cat2->sayHello();
