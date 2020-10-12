<?php

declare(strict_types=1);

namespace Tenet\Kernel\Http;

use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\ClientInterface;
use Tenet\Kernel\Application;

class Client
{

    protected const STATUS_SUCCESS = 'success';

    protected const STATUS_FAILURE = 'failure';

    /**
     * http client 客户端
     * @var \GuzzleHttp\ClientInterface $httpClient
     */
    protected $httpClient;

    /**
     * 网关
     * @var array $gateways
     */
    protected $gateways = [];

    /**
     * @var array GuzzleHttp options
     */
    protected $options = [];

    /**
     * @var array 接口所需要参数
     */
    protected $args = [];

    /**
     * @var \Tenet\Kernel\Application $app
     */
    protected $app;

    public function __construct(Application $app)
    {
        $this->httpClient = $this->getHttpClient();
        $this->app = $app;
    }

    /**
     * Get a Guzzle Client
     *
     * @return \GuzzleHttp\ClientInterface
     */
    public function getHttpClient(): ClientInterface
    {
        if (!($this->httpClient instanceof ClientInterface)) {
            $this->httpClient = new GuzzleHttpClient();
        }

        return $this->httpClient;
    }


    /**
     * Make a http request
     *
     * @param string $endpoint
     * @param array $args
     * @param array $options
     * @param string $method
     *
     * @return array
     *
     * @throws \Exception
     */
    public function request(string $endpoint, array $args, array $options, string $method = 'get')
    {
        $method = strtoupper($method);
        $options = array_merge($options, ['query' => $args]);
        $isSuccessful = false;
        $results = [];
        try {
            foreach ($this->gateways as $gateway) {
                $options['base_uri'] = $gateway;
                $results[$gateway] = [
                    'data' => $this->getHttpClient()->request($method, $endpoint, $options),
                    'succeed_at' => time(),
                    'status' => self::STATUS_SUCCESS,
                ];
                $isSuccessful = true;

                break;
            }
        } catch (\Exception $e) {
            $results['error'] = [
                'exception' => $e->getMessage(),
                'failed_at' => \time(),
                'status' => self::STATUS_FAILURE,
            ];
        } finally {
            if (!$isSuccessful) {
                throw new \Exception('There is not available gateway');
            }
            return $results;
        }
    }
}
