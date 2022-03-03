<?php

namespace src\Enum\Dogs;

class DogEnum
{
    public const DOG_BREEDS = [
        self::BREED_DACHSHUND,
        self::BREED_JACK_RUSSEL,
    ];

    public const BREED_DACHSHUND   = 'dachshund';
    public const BREED_JACK_RUSSEL = 'jack-russell_terrier';

    public const COMMANDS = [
        self::COMMAND_SIT,
        self::COMMAND_SPEAK,
    ];

    public const COMMAND_SIT   = 'sit';
    public const COMMAND_SPEAK = 'speak';
}