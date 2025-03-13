<?php

namespace Tests;

use Billtsarnas\PackageTemplate\Example;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testGreetingIsFormal(): void
    {
        $example = new Example();

        $this->assertEquals('Greetings', $example->greet());
    }

    public function testGreetingIsNotInformal(): void
    {
        $example = new Example();

        $this->assertNotEquals('Hey bro', $example->greet());
    }
}
