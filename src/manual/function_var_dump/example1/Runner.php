<?php
/**
 * https://www.php.net/manual/en/function.var-dump.php
 */

namespace vitaliyviznyuk\phpnetexamples\manual\function_var_dump\example1;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        $a = array(1, 2, array("a", "b", "c"));
        var_dump($a);

        $b = 3.1;
        $c = true;
        var_dump($b, $c);

        echo PHP_EOL;
    }
}
