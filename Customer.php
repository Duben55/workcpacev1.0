<?php

namespace MyProject;

class Customer
{
    private $history = [];

    public function __construct(
        private string $name,
        private int    $age,
        private string $email,
    )
    {
    }

    public function addPurchase(Strain $strain, float $quantity, float $cost)
    {
        $this->history[] = [
            'strain' => $strain,
            'quantity' => $quantity,
            'cost' => $cost,
            'date' => date('Y-m-d H:i:s'),
        ];
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setAge($age): void
    {
        $this->age = $age;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPurchaseHistory()
    {
        return $this->history;
    }
}
