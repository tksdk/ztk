<?php namespace Test;

use Tenet\Ztk\Factory;

class MethodsUnitTest extends \Codeception\Test\Unit
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
    public function testProvider()
    {
        $providers = [
            "search",
            "meiQuan",
            "details",
            "xianBao",
            "hours",
            "ddg",
            "shoudan",
            "brands",
            "all",
            "brands",
            "carousel",
            "category",
            "couponsGoods",
            "expiredGoods",
            "gifts",
            "quanTian",
            "recommend",
            "realTime",
            "videos",
            "wordsSuggest",
            "wordsHot",
            "wxTwit",
        ];

        $application = Factory::ztk([]);

        foreach ($providers as $provider) {
            $application->$provider;
        }
    }


    // tests
    public function testProviderException()
    {
        $providers = [
            "mama"
        ];

        $application = Factory::ztk([]);

        foreach ($providers as $provider) {
            $application->$provider;
        }
    }
}