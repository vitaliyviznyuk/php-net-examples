<?php
/**
 * https://www.php.net/manual/en/function.microtime.php
 */

namespace vitaliyviznyuk\phpnetexamples\manual\function_microtime\example2;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        $time_start = microtime(true);

        // Sleep for a while
        usleep(100);

        $time_end = microtime(true);
        $time = $time_end - $time_start;

        echo "Did nothing in $time seconds\n";
    }
}
