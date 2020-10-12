<?php

declare(strict_types=1);

namespace Tenet\Ztk;

use Tenet\Kernel\Application as KernelApplication;
use Tenet\Support\Config;
use Tenet\Ztk\Base\Client;
use Tenet\Ztk\Taobao\DongDong;
use Tenet\Ztk\Taobao\Hours;
use Tenet\Ztk\Taobao\MeiMeiQuan;
use Tenet\Ztk\Taobao\QuanGoodsDetails;
use Tenet\Ztk\Taobao\QuanGoodsSearch;
use Tenet\Ztk\Taobao\QuanZi;
use Tenet\Ztk\Taobao\ShouDan;
use Tenet\Ztk\Taobao\XianBao;

/**
 * @property \Tenet\Support\Config $config
 * @property $this $app
 */
class Application implements \ArrayAccess, KernelApplication
{

    protected $container = [];

    protected $arrayConfig;

    protected $providers = [
        "search" => QuanGoodsSearch::class,
        "meiQuan" => MeiMeiQuan::class,
        "details" => QuanGoodsDetails::class,
        "xianBao" => XianBao::class,
        "hours" => Hours::class,
        "ddg" => DongDong::class,
        'pyq' => QuanZi::class,
        "shoudan" => ShouDan::class,
    ];

    protected $defaultProviders = [
        'base' => Client::class,
        'config' => Config::class,
    ];

    public function __construct(array $config)
    {
        $this->arrayConfig = $config;
        $this->container['app'] = $this;

        $this->bootStrap();

        $this->initialize();
    }

    private function allProviders()
    {
        return array_merge($this->providers, $this->defaultProviders);
    }

    private function bootStrap()
    {
        $providers = $this->allProviders();
        foreach ($providers as $alias => $provider) {
            if (isset($providers[$alias])) {
                $this->container[$alias] = new $provider($this->app);
            }
        }
    }


    public function initialize()
    {
        $this->config->setConfig($this->arrayConfig);
    }

    public function __get($name)
    {
        return $this->offsetGet($name);
    }

    public function __set($name, $value)
    {
        $this->offsetSet($name, $value);
    }

    public function __isset($name)
    {
        return $this->offsetExists($name);
    }

    public function __unset($name)
    {
        $this->offsetUnset($name);
    }

    public function offsetExists($name)
    {
        return isset($this->container[$name]);
    }

    public function offsetGet($name)
    {
        return $this->container[$name];
    }


    public function offsetSet($name, $value)
    {
        if (! isset($this->container[$name]) || empty($this->container[$name])) {
            $this->container[$name] = $value;
        }
    }

    public function offsetUnset($name)
    {
        if (isset($this->container[$name])) {
            unset($this->container[$name]);
        }
    }

    public function __call($name, array $arguments)
    {
        call_user_func_array([$this['base'], $name], $arguments);
    }
}
