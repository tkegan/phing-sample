<?php

declare(strict_types=1);

namespace Tests\PhingSample;

use PhingSample\HelloWorld;
use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase {
    public function testGetGreeting() {
        $greeter = new HelloWorld();

        self::assertSame('Hello World', $greeter->getGreeting());
    }
}
