<?php

namespace MyProject;

class Strain
{

    public function __construct(
        private string $name,
        private string $type,
        private float  $prise,
    ) {
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setType($type): void
    {
        $this->type = $type;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setPrise($prise): void
    {
        $this->prise = $prise;
    }

    public function getPrise(): float
    {
        return $this->prise;
    }
}
