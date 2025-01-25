<?php

use GaryDavisonOs\ConditionalHelpers\ConditionalHelpers;
use PHPUnit\Framework\TestCase;

class ConditionalHelpersTest extends TestCase
{
    public function testIsArrayHasLength()
    {
        $array = [1, 2, 3];
        $this->assertTrue(ConditionalHelpers::isArrayHasLength($array));

        $emptyArray = [];
        $this->assertFalse(ConditionalHelpers::isArrayHasLength($emptyArray));
    }

    public function testIsStringHasLength()
    {
        $string = "Hello, World!";
        $this->assertTrue(ConditionalHelpers::isStringHasLength($string));

        $emptyString = "";
        $this->assertFalse(ConditionalHelpers::isStringHasLength($emptyString));
    }

    public function testIsBooleanTrue()
    {
        $this->assertTrue(ConditionalHelpers::isBooleanTrue(true));
        $this->assertFalse(ConditionalHelpers::isBooleanTrue(false));
    }

    public function testIsBooleanFalse()
    {
        $this->assertTrue(ConditionalHelpers::isBooleanFalse(false));
        $this->assertFalse(ConditionalHelpers::isBooleanFalse(true));
    }
}