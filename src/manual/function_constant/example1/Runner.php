<?php
/**
 * https://www.php.net/manual/en/function.constant
 */

namespace vitaliyviznyuk\phpnetexamples\manual\function_constant\example1;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        define("MAXSIZE", 100);

        echo MAXSIZE;
        echo constant("MAXSIZE"); // same thing as the previous line

        $const = 'test';

        var_dump(constant('vitaliyviznyuk\phpnetexamples\manual\function_constant\example1\Bar::'. $const)); // string(7) "foobar!"
        var_dump(constant('vitaliyviznyuk\phpnetexamples\manual\function_constant\example1\Bar::'. $const)); // string(7) "foobar!"
    }
}
