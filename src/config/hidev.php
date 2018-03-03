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
                    '@hidev/views' => ['@hidev/phpstan/views'],
                ],
            ],
        ],
        'binaries' => [
            'phpstan' => [
                'package'  => 'phpstan/phpstan',
                'version'  => '^4.8',
                'download' => 'https://phar.phpstan.de/phpstan-old.phar',
            ],
        ],
    ],
];
