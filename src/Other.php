<?php

declare(strict_types=1);

namespace Demo;

class Other
{
    public static function thing(): string
    {
        return 'stuff';
    }

    public static function stuff(): string
    {
        return 'thing';
    }
}