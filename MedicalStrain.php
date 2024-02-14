<?php

namespace MyProject;
class MedicalStrain extends Strain
{
    private float $healPower;

    public function __construct(string $name, string $type, float $prise, float $healPower)
    {
        parent::__construct($name, $type, $prise);
        $this->healPower = $healPower;
    }

    public function getHealPower(): float
    {
        return $this->healPower;
    }

    public function setHealPower(float $healPower): void
    {
        $this->healPower = $healPower;
    }
}
