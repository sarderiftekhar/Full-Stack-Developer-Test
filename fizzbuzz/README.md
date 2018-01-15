
 PHP, FizzBuzz
You should write a PHP library that uses composer to autoload and allows for the generation of a FizzBuzz 
to the nth number. This library should have  tests using PHP Unit to validate its results.

The rules of FizzBuzz are.

Write a script that counts from 1 to n and outputs the number, except in the following cases.

- If a number is divisible by 3 display "Fizz" instead.
- If a number is divisible by 5 display "Buzz" instead.
- If a number is divisible by 3 AND 5 display "FizzBuzz" instead.

An example run script might look like this. Obviously you're free to structure this library however 
you like and it doesn't need to match the example below unless you'd like it to.

```php
require "vendor/autoload.php";

$fizzbuzzer = new YourName\FizzBuzz(100); // fizzbuzz until 100
foreach ($fizzbuzzer->run() as $number) {
    print $number . EOL;
}
```

This task should be completed in the `fizzbuzz` folder. The library should be testable with the 
following command `$ ./vendor/bin/phpunit .`

modification to the 
FizzBuzz game above such that the game also follow this rule. 

- Ignore all fizzbuzz conditions if the number is prime, just display the number instead.

If you have time also look at a PHPUnit test for this condition. 
