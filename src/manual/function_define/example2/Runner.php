<?php

namespace vitaliyviznyuk\phpnetexamples\manual\function_define\example2;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        var_dump(defined('__LINE__'));
        var_dump(define('__LINE__', 'test'));
        var_dump(constant('__LINE__'));
        var_dump(__LINE__);
    }
}
