<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */
use Hyperf\View\Engine\ThinkEngine;
use Hyperf\View\Mode;

return [
    'engine' => ThinkEngine::class,
    'mode' => Mode::TASK,
    'config' => [
        'view_path' => BASE_PATH . '/storage/view/',
        'cache_path' => BASE_PATH . '/runtime/view/',
    ],
];
