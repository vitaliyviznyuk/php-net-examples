<?php
/**
 * https://www.php.net/manual/en/function.microtime.php
 */

namespace vitaliyviznyuk\phpnetexamples\manual\function_microtime\example1;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        $time_start = microtime_float();

        // Sleep for a while
        usleep(100);

        $time_end = microtime_float();
        $time = $time_end - $time_start;

        echo "Did nothing in $time seconds\n";
    }
}

/**
 * Simple function to replicate PHP 5 behaviour
 */
function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
