<?php

use App\Kernel;

echo dirname(__DIR__);

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

/*return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};*/

echo 'test';
