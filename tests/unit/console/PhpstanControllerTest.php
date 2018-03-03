<?php
/**
 * HiDev plugin for PHPStan
 *
 * @link      https://github.com/hiqdev/hidev-phpstan
 * @package   hidev-phpstan
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2018, HiQDev (http://hiqdev.com/)
 */

namespace hidev\phpstan\tests\stan\console;

use hidev\phpstan\console\PhpstanController;

class PhpstanControllerTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @var PhpstanController
     */
    protected $object;

    protected function setUp()
    {
        $this->object = new PhpstanController('phpstan', null);
    }

    public function testInit()
    {
        $this->assertNull($this->object->init());
    }
}
