<?php
/**
 * HiDev plugin for PHPStan
 *
 * @link      https://github.com/hiqdev/hidev-phpstan
 * @package   hidev-phpstan
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2018-2020, HiQDev (http://hiqdev.com/)
 */

namespace hidev\phpstan\components;

/**
 * PHPStan.
 */
class Phpstan extends \hidev\base\Component
{
    public $command = 'analyze';

    public $colors = true;

    public $level = 1;

    public $dirs = ['src'];

    protected $_version;

    public function prepareArgs($args = [])
    {
        $args[] = $this->command;
        $args[] = '--level';
        $args[] = $this->level;

        if ($this->colors) {
            $args[] = '--ansi';
        }

        return array_merge($args, $this->dirs);
    }

    public function getVersion()
    {
        if ($this->_version === null) {
            $this->_version = $this->detectVersion();
        }

        return $this->_version;
    }

    public function detectVersion()
    {
        $lines = $this->exec('phpstan', ['--version']);

        return explode(' ', $lines[0], 3)[1];
    }
}
