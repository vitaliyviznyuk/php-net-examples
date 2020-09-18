<?php
/**
 * https://www.php.net/manual/en/function.defined
 */

namespace vitaliyviznyuk\phpnetexamples\manual\function_defined\example1;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        /* Note the use of quotes, this is important.  This example is checking
         * if the string 'TEST' is the name of a constant named TEST */
        if (defined('TEST')) {
            echo TEST;
        }
    }
}
