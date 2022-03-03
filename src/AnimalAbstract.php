<?php

namespace src;

abstract class AnimalAbstract implements AnimalInterface
{
    protected string $name;

    protected int $age;

    protected string $breed;

    abstract public function setBreed(string $breed): AnimalInterface;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): AnimalInterface
    {
        $this->name = $name;

        return $this;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): AnimalInterface
    {
        $this->age = $age;

        return $this;
    }

    public function getBreed(): string
    {
        return $this->breed;
    }
}