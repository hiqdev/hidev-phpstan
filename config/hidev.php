<?php
/**
 * HiDev plugin for PHPStan
 *
 * @link      https://github.com/hiqdev/hidev-phpstan
 * @package   hidev-phpstan
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2018, HiQDev (http://hiqdev.com/)
 */

return [
    'app' => [
        'controllerMap' =>  [
            'phpstan' => [
                '__class' => \hidev\phpstan\console\PhpstanController::class,
            ],
        ],
    ],
    'phpstan' => [
        '__class' => \hidev\phpstan\components\Phpstan::class,
    ],
    'view' => [
        'theme' => [
            'pathMap' => [
                '@hidev/views' => ['@hidev/phpstan/views'],
            ],
        ],
    ],
    'binaries' => [
        'phpstan' => [
            'package'  => 'phpstan/phpstan',
            'version'  => '^0.10',
            'download' => 'https://github.com/phpstan/phpstan/releases/download/0.10/phpstan.phar',
        ],
    ],
];
