<?php

use PHPUnit\Framework\TestCase;

final class FunctionsTest extends TestCase
{
    protected $fizzBuzz;

    public function setUp() {
        parent::setUp();
        $this->fizzBuzz = new \Sarder\FizzBuzz(0);
    }

    public function testIsDivisible() {
        //Test divisible by 5
        //positive
        $this->assertTrue($this->fizzBuzz->isDivisible(100, 5));
        $this->assertTrue($this->fizzBuzz->isDivisible(10, 5));
        $this->assertTrue($this->fizzBuzz->isDivisible(35, 5));
        //negative
        $this->assertFalse($this->fizzBuzz->isDivisible(1, 5));
        $this->assertFalse($this->fizzBuzz->isDivisible(21, 5));
        $this->assertFalse($this->fizzBuzz->isDivisible(99, 5));

        //Test divisible by 3
        //positive
        $this->assertTrue($this->fizzBuzz->isDivisible(9, 3));
        $this->assertTrue($this->fizzBuzz->isDivisible(33, 3));
        $this->assertTrue($this->fizzBuzz->isDivisible(15, 3));
        //negative
        $this->assertFalse($this->fizzBuzz->isDivisible(10, 3));
        $this->assertFalse($this->fizzBuzz->isDivisible(31, 3));
        $this->assertFalse($this->fizzBuzz->isDivisible(35, 3));
    }

    public function testIsPrime() {
        //positive
        $this->assertTrue($this->fizzBuzz->isPrime(7));
        $this->assertTrue($this->fizzBuzz->isPrime(11));
        $this->assertTrue($this->fizzBuzz->isPrime(13));
        //negative
        $this->assertFalse($this->fizzBuzz->isPrime(9));
        $this->assertFalse($this->fizzBuzz->isPrime(20));
        $this->assertFalse($this->fizzBuzz->isPrime(21));
    }
}