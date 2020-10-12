<?php

declare(strict_types=1);

namespace Tenet\Ztk;

class Factory
{
    public static function make(string $name, array $config)
    {
        $namespace = \Tenet\Support\Str::studly($name);
        $application = "\\Tenet\\{$namespace}\\Application";

        if (! \class_exists($application)) {
            throw new \Exception('The third service is not existed!');
        }

        return new $application($config);
    }

    public static function __callStatic(string $name, array $arguments)
    {
        return self::make($name, ...$arguments);
    }
}
