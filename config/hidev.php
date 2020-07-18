<?php
/**
 * HiDev plugin for PHPStan
 *
 * @link      https://github.com/hiqdev/hidev-phpstan
 * @package   hidev-phpstan
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2018-2020, HiQDev (http://hiqdev.com/)
 */

return [
    'controllerMap' =>  [
        'phpstan' => [
            'class' => \hidev\phpstan\console\PhpstanController::class,
        ],
    ],
    'components' => [
        'phpstan' => [
            'class' => \hidev\phpstan\components\Phpstan::class,
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@hidev/views' => [dirname(__DIR__) . '/src/views'],
                ],
            ],
        ],
        'binaries' => [
            'phpstan' => [
                'package'  => 'phpstan/phpstan',
                'version'  => '^0.10',
                'download' => 'https://github.com/phpstan/phpstan/releases/download/0.12.32/phpstan.phar',
            ],
        ],
    ],
];
