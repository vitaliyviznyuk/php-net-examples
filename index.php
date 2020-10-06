<?php declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/

require __DIR__ . '/vendor/autoload.php';

if (!empty($argv[1])) {
    try {
        $runnerClassName = 'vitaliyviznyuk\phpnetexamples\\' . $argv[1] . '\Runner';
        $runner = new $runnerClassName();
        $runner->run();
    } catch (Throwable $exception) {
        echo 'Unable to run batch.' . PHP_EOL;
        echo 'Error: ' . $exception->getMessage() . PHP_EOL;
        echo 'File: ' . $exception->getFile() . PHP_EOL;
        echo 'Line: ' . $exception->getLine() . PHP_EOL;
    }
} else {
    echo 'Please, specify the path to the batch file as an argument, like "php index.php manual\\\function_define\\\example1"' . PHP_EOL;
}
