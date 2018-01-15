<?php

namespace Sarder;


class FizzBuzz
{

    protected $n;

    public function __construct($n) {
        $this->n = $n;
    }

    public function run(){
        $output = [];
        for($i = 1; $i <= $this->n; $i++){
            if($this->isPrime($i)){
                $output[] = $i;

            }elseif($this->isDivisible($i, 3) && $this->isDivisible($i, 5)){
                $output[] = 'FizzBuzz';

            }
            elseif($this->isDivisible($i, 3)){
                $output[] = 'Fizz';

            }elseif($this->isDivisible($i, 5)){
                $output[] = 'Buzz';
            }
            else{
                $output[] = $i;
            }
        }
        return $output;
    }

    public function isDivisible($n, $divider){
        return $n % $divider == 0;
    }

    public function isPrime($num){
        //1 is not prime. See: http://en.wikipedia.org/wiki/Prime_number#Primality_of_one
        if($num == 1)
            return false;

        //2 is prime (the only even number that is prime)
        if($num == 2)
            return true;

        /**
         * if the number is divisible by two, then it's not prime and it's no longer
         * needed to check other even numbers
         */
        if($num % 2 == 0) {
            return false;
        }

        /**
         * Checks the odd numbers. If any of them is a factor, then it returns false.
         * The sqrt can be an aproximation, hence just for the sake of
         * security, one rounds it to the next highest integer value.
         */
        $ceil = ceil(sqrt($num));
        for($i = 3; $i <= $ceil; $i = $i + 2) {
            if($num % $i == 0)
                return false;
        }

        return true;
    }
}