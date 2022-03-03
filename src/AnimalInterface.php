<?php

namespace src;

interface AnimalInterface
{
    public function getName(): string;

    public function setName(string $name): self;

    public function getAge(): int;

    public function setAge(int $age): self;

    public function getBreed(): string;

    public function setBreed(string $breed): self;
}
