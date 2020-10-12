<?php

namespace Tenet\Ztk\Taobao;

use Tenet\Kernel\Application;

abstract class ZtkAbstract
{
    protected $app;

    public function __construct(Application $app)
    {
        $this->app = $app;
    }

    public function __call($name, $arguments)
    {
        $classVars = get_class_vars(static::class);
        $base = [
            'api' => $classVars['api'],
            'enableSid' => $classVars['enableSid']
        ];
        $arguments[0] = array_merge($base, $arguments[0]);
        $arguments[1] = $arguments[1] ?? [];

        return call_user_func_array([$this->app['base'], $name], $arguments);
    }
}
