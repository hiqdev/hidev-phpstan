<?php
/**
 * HiDev plugin for PHPStan
 *
 * @link      https://github.com/hiqdev/hidev-phpstan
 * @package   hidev-phpstan
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2018, HiQDev (http://hiqdev.com/)
 */

namespace hidev\phpstan\components;

/**
 * PHPStan.
 */
class Phpstan extends \hidev\base\Component
{
    protected $_version;

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
