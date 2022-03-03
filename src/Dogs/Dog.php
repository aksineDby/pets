<?php

declare(strict_types=1);

namespace src\Dogs;

use RuntimeException;
use src\AnimalAbstract;
use src\Enum\Dogs\DogEnum;

class Dog extends AnimalAbstract implements DogInterface
{
    protected array $commands;

    public function setBreed(string $breed): AnimalAbstract
    {
        if (!in_array($breed, DogEnum::DOG_BREEDS, true)) {
            throw new RuntimeException("Неизвестная порода $breed. Ожидается значение из "
                . print_r(DogEnum::DOG_BREEDS, true));
        }

        $this->breed = $breed;

        return $this;
    }

    public function getCommands(): array
    {
        return $this->commands;
    }

    public function setCommands(array $commands): DogInterface
    {
        $diffCommands = array_diff($commands, DogEnum::COMMANDS);

        if (!empty($diffCommands)) {
            throw new RuntimeException('Найдены неизвестные команды: '
                . print_r($diffCommands, true));
        }

        $this->commands = $commands;

        return $this;
    }

    public function appendCommand(string $command): DogInterface
    {
        if (!in_array($command, DogEnum::COMMANDS, true)) {
            throw new RuntimeException("Неизвестная команда $command. Ожидается значение из "
                . print_r(DogEnum::COMMANDS, true));
        }

        $this->commands[] = $command;

        return $this;
    }
}