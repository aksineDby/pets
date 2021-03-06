<?php

spl_autoload_register(static function (string $class): bool {
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $class).'.php';

    if (file_exists($file)) {
        require_once $file;

        return true;
    }

    return false;
});
