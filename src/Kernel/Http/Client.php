<?php

<<<<<<< HEAD
<<<<<<< HEAD
declare(strict_types=1);
=======
declare(strict_types = 1);
>>>>>>> 53a3e9c... feat: add phpstan configuartion file
=======
declare(strict_types=1);
>>>>>>> af00a2c... refactor: 移除tbk依赖库

namespace Tenet\Kernel\Http;

use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\ClientInterface;
<<<<<<< HEAD
<<<<<<< HEAD
use Tenet\Kernel\Application;

class Client
{

    protected const STATUS_SUCCESS = 'success';

    protected const STATUS_FAILURE = 'failure';

    /**
     * http client 客户端
     * @var \GuzzleHttp\ClientInterface $httpClient
=======
use Psr\Http\Client\ClientInterface as ClientClientInterface;
=======
>>>>>>> af00a2c... refactor: 移除tbk依赖库
use Tenet\Kernel\Application;

class Client
{

    protected const STATUS_SUCCESS = 'success';

    protected const STATUS_FAILURE = 'failure';

    /**
     * http client 客户端
<<<<<<< HEAD
     * @var \Psr\http\Client\ClientInterface
>>>>>>> 53a3e9c... feat: add phpstan configuartion file
=======
     * @var \GuzzleHttp\ClientInterface $httpClient
>>>>>>> af00a2c... refactor: 移除tbk依赖库
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
<<<<<<< HEAD
<<<<<<< HEAD
     * @return \GuzzleHttp\ClientInterface
     */
    public function getHttpClient(): ClientInterface
=======
     * @return ClientInterface
     */
    public function getHttpClient() : ClientInterface
>>>>>>> 53a3e9c... feat: add phpstan configuartion file
=======
     * @return \GuzzleHttp\ClientInterface
     */
    public function getHttpClient(): ClientInterface
>>>>>>> af00a2c... refactor: 移除tbk依赖库
    {
        if (!($this->httpClient instanceof ClientInterface)) {
            $this->httpClient = new GuzzleHttpClient();
        }

        return $this->httpClient;
    }


    /**
     * Make a http request
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @param string $endpoint
     * @param array $args
     * @param array $options
     * @param string $method
     *
     * @return array
     *
     * @throws \Exception
=======
     * @param string $endpoints 
     * @param array $params
=======
     * @param string $endpoint
     * @param array $args
>>>>>>> af00a2c... refactor: 移除tbk依赖库
     * @param array $options
     * @param string $method
     *
     * @return array
<<<<<<< HEAD
     * 
     * @throws Exception
>>>>>>> 53a3e9c... feat: add phpstan configuartion file
=======
     *
     * @throws \Exception
>>>>>>> af00a2c... refactor: 移除tbk依赖库
     */
    public function request(string $endpoint, array $args, array $options, string $method = 'get')
    {
        $method = strtoupper($method);
        $options = array_merge($options, ['query' => $args]);
        $isSuccessful = false;
<<<<<<< HEAD
<<<<<<< HEAD
        $results = [];
        try {
            foreach ($this->gateways as $gateway) {
=======
        foreach ($this->gateways as $gateway) {
            try {
>>>>>>> 53a3e9c... feat: add phpstan configuartion file
=======
        $results = [];
        try {
            foreach ($this->gateways as $gateway) {
>>>>>>> af00a2c... refactor: 移除tbk依赖库
                $options['base_uri'] = $gateway;
                $results[$gateway] = [
                    'data' => $this->getHttpClient()->request($method, $endpoint, $options),
                    'succeed_at' => time(),
                    'status' => self::STATUS_SUCCESS,
                ];
                $isSuccessful = true;
<<<<<<< HEAD
<<<<<<< HEAD

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
=======
                
=======

>>>>>>> af00a2c... refactor: 移除tbk依赖库
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
<<<<<<< HEAD

}
>>>>>>> 53a3e9c... feat: add phpstan configuartion file
=======
}
>>>>>>> af00a2c... refactor: 移除tbk依赖库
