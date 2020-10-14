<?php 

namespace Test;

use Tenet\Ztk\Factory;

class FactoryTest extends \Codeception\Test\Unit
{
    /**
     * @var \Test\UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // 正向测试
    public function testCreateApplication()
    {
        Factory::ztk([]);
    }

    /**
     * 反向测试
     *
     * @return void
     */
    public function testCreateApplicationException()
    {
        $this->expectException(\Exception::class);
        $this->expectDeprecationMessage('The third service is not existed!');
        Factory::jd([]);
    }
}

