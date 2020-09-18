<?php
/**
 * https://www.php.net/manual/en/function.define
 */

namespace vitaliyviznyuk\phpnetexamples\manual\function_define\example1;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        define("CONSTANT", "Hello world.");
        echo CONSTANT; // outputs "Hello world."
        echo Constant; // outputs "Constant" and issues a notice.

        define("GREETING", "Hello you.", true);
        echo GREETING; // outputs "Hello you."
        echo Greeting; // outputs "Hello you."

        // Works as of PHP 7
        define('ANIMALS', array(
            'dog',
            'cat',
            'bird'
        ));
        echo ANIMALS[1]; // outputs "cat"

        echo PHP_EOL;
    }
}
