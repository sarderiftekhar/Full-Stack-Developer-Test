<?php
require "vendor/autoload.php";
require "src/Sarder/FizzBuzz.php";

// require_once __DIR__ . '/Sarder/FizzBuzz.php';



$fizzbuzzer = new FizzBuzz(100); // fizzbuzz until 100
foreach ($fizzbuzzer->run() as $number) {
   
       print $number . '</br>';
}


