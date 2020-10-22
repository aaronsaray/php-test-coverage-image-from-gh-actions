<?php

declare(strict_types=1);

namespace Tests;

use Demo\Decorator;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    public function testYellDefaultsToCapital(): void
    {
        self::assertEquals('I LIKE TURTLES.', Decorator::shout('I like turtles.'));
    }

    public function testYellExplicitlyRequestedTrueConvertsToCapital(): void
    {
        self::assertEquals('THINGS', Decorator::shout('tHiNGs'));
    }
}