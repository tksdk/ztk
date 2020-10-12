<?php

declare(strict_types=1);

namespace Tenet\Ztk\Base;

use Tenet\Kernel\Application;
use Tenet\Kernel\Http\Client as HttpClient;
use Tenet\Ztk\Gateways\ZtkGateway;

class Client extends HttpClient
{
    use ClientTrait;

    public function __construct(Application $app)
    {
        $this->gateways = ZtkGateway::$gateways;
        parent::__construct($app);
    }


    /**
     * 发送请求
     * @param array $args
     * @param array $options
     * @return array
     *
     * @throws \Exception
     */
    public function send($args, $options)
    {
        $this->buildRequest($args, $options);
        return $this->doRequest();
    }
}
