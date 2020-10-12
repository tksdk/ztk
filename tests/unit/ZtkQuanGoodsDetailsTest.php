<?php namespace Test;

use Tenet\Ztk\Taobao;
use Tenet\Ztk\Taobao\QuanGoodsDetails;

class ZtkQuanGoodsDetailsTest extends \Codeception\Test\Unit
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

    // tests
    public function testGetClassVars()
    {
        $this->assertArrayHasKey('api', get_class_vars(QuanGoodsDetails::class));
        $this->assertArrayHasKey('enableSid', get_class_vars(QuanGoodsDetails::class));
        $this->assertNotEmpty(get_class_vars(QuanGoodsDetails::class));
        $data = get_class_vars(QuanGoodsDetails::class);
        $this->assertIsBool($data['enableSid']);
    }
}