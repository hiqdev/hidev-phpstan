<?php
/**
 * HiDev plugin for PHPStan
 *
 * @link      https://github.com/hiqdev/hidev-phpstan
 * @package   hidev-phpstan
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2018, HiQDev (http://hiqdev.com/)
 */

namespace hidev\phpstan\console;

/**
 * PHPStan.
 */
class PhpstanController extends \hidev\base\Controller
{
    public $level = 1;

    public function getComponent()
    {
        return $this->take('phpstan');
    }

    /**
     * Generates `tests/_bootstrap.php` and runs tests.
     */
    public function actionIndex()
    {
        return $this->doRun();
    }

    protected function doRun()
    {
        return $this->passthru('phpstan', ['analyze', '--level', $this->level, 'src']);
    }
}
