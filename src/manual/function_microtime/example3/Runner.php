<?php
/**
 * https://www.php.net/manual/en/function.microtime.php
 */

namespace vitaliyviznyuk\phpnetexamples\manual\function_microtime\example3;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        // Randomize sleeping time
        usleep(mt_rand(100, 10000));

        // As of PHP 5.4.0, REQUEST_TIME_FLOAT is available in the $_SERVER superglobal array.
        // It contains the timestamp of the start of the request with microsecond precision.
        $time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];

        echo "Did nothing in $time seconds\n";
    }
}
