<?php

use PHPUnit\Framework\TestCase;
include(__DIR__.'/../src/Arithmetic.php');

class ArithmeticTest extends TestCase {

    public function testing()
    {
        $testArithmetic = new Arithmetic();

        $testArithmetic->setEquals(1+2);
        $testArithmetic->setMinus(6-2);
        $testArithmetic->setMultiplied(3*3);
        $testArithmetic->setDevided(24/8);

        $this->assertEquals(3, $testArithmetic->getEquals());
        $this->assertEquals(4, $testArithmetic->getMinus());
        $this->assertEquals(9, $testArithmetic->getMultiplied());
        $this->assertEquals(3, $testArithmetic->getDevided());
    }
}