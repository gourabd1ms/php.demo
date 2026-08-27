<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Greeter.php';

final class GreeterTest extends TestCase
{
    public function testGreetReturnsExpectedMessage(): void
    {
        $this->assertSame('Hello from PHP demo!', Greeter::greet());
    }
}
