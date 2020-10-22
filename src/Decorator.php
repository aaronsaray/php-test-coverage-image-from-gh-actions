<?php

declare(strict_types=1);

namespace Demo;

class Decorator
{
    public static function shout(string $statement, bool $shouldYell = true): string
    {
        if ($shouldYell) {
            $statement = strtoupper($statement);
        }

        return $statement;
    }
}