<?php

use App\Kernel;

require_once 'D:\M2III\project_master\Checkboar\API\symfonyApiCheckboar\vendor\autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};