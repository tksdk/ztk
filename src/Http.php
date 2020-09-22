<?php

namespace Tenet;

use Psr\Http\Client\ClientInterface;

class Http
{
    /**
     * guzzle
     *
     * @var ClientInterface $hanler
     */
    protected $hanler;

    /**
     * 配置
     *
     * @var array $config
     */
    protected $config = [];

    /**
     * 网关
     *
     * @var string
     */
    protected $gateway;

    /**
     * 初始化
     *
     * @param ClientInterface $hanler
     * @param array $config
     */
    public function __construct(ClientInterface $hanler, array $config)
    {
        $this->hanler = $hanler;
        $this->config = $config;
    }

    public function setConfig(array $config)
    {
        $this->config = \array_merge($this->config, $config);
    }

    public function execute()
    {
        // $this->hanler->request();
    }
}
