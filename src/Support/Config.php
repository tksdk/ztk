<?php

declare (strict_types=1);

namespace Tenet\Support;

use ArrayAccess;
use Tenet\Kernel\Application;

/**
 * Class Config.
 */
class Config implements ArrayAccess
{
   
    protected $config;

    protected $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function setConfig(array $config)
    {
        $this->config = $config;
    }

    
    public function get($key, $default = null)
    {
        $config = $this->config;

        if (isset($config[$key])) {
            return $config[$key];
        }

        if (false === \strpos($key, '.')) {
            return $default;
        }

        foreach (explode('.', $key) as $segment) {
            if (!\is_array($config) || !\array_key_exists($segment, $config)) {
                return $default;
            }
            $config = $config[$segment];
        }

        return $config;
    }

   
    public function offsetExists($offset)
    {
        return \array_key_exists($offset, $this->config);
    }

   
    public function offsetGet($offset)
    {
        return $this->get($offset);
    }

   
    public function offsetSet($offset, $value)
    {
        if (isset($this->config[$offset])) {
            $this->config[$offset] = $value;
        }
    }

   
    public function offsetUnset($offset)
    {
        if (isset($this->config[$offset])) {
            unset($this->config[$offset]);
        }
    }
}
