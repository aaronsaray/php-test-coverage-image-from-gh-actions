<?php

declare(strict_types=1);

namespace Tests;

use Demo\Other;
use PHPUnit\Framework\TestCase;

class OtherTest extends TestCase
{
    public function testThing(): void
    {
        self::assertEquals('stuff', Other::thing());
    }
}