<?php

namespace src\Dogs;

interface DogInterface
{
    public function getCommands(): array;

    public function setCommands(array $commands): self;

    public function appendCommand(string $command): self;
}