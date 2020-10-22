<?php

declare(strict_types=1);

namespace Demo;

class Utility
{
    public static function rot13(string $statement): string
    {
        return str_rot13($statement);
    }
}