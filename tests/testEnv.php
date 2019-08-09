<?php

declare(strict_types=1);

namespace tests;

require __DIR__ . '/../vendor/autoload.php';

use Lqf\Env;

try {
    // CLI 模式下抛出异常
    $env = new Env($_SERVER);

    var_dump($env->REQUEST_METHOD);
    var_dump($env->REQUEST_URI);

    var_dump($env);
} catch (\RuntimeException $e) {
    var_dump($e->getMessage());
}