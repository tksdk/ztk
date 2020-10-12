<?php

declare (strict_types = 1);

namespace Tenet\Taobao;

use Tenet\Kernel\Application as KernelApplication;
use Tenet\Support\Config;
use Tenet\Taobao\Base\Client;
use Tenet\Taobao\Ztk\ZtkQuanGoodsDetails;

/**
 * @property \Tenet\Support\Config $config
 * @property \Tenet\Tbk\Union\Union $union
 */
class Application implements \ArrayAccess, KernelApplication
{

    protected $container = [];

    protected $providers = [
        "ztkQuan" => ZtkQuanGoodsDetails::class,
    ];

    protected $defaultProviders = [
        'base' => Client::class, 
        'config' => Config::class,
    ];

    protected $arrayConfig;

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
        if (! isset($this->container[$name]) || empty($this->container($name))) {
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