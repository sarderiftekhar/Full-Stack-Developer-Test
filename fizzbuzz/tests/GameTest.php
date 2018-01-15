<?php

use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{
    public function testGame(){
        $fizzBuzz = new \Sarder\FizzBuzz(15);

        $counter = [];
        foreach ($fizzBuzz->run() as $number){
            if(in_array($number, ['Fizz', 'Buzz', 'FizzBuzz'])){
                $counter[$number] = isset($counter[$number]) ? $counter[$number]+1 : 1;
            }
        }

        $this->assertEquals(3, $counter['Fizz']);
        $this->assertEquals(1, $counter['Buzz']);
        $this->assertEquals(1, $counter['FizzBuzz']);
    }
}