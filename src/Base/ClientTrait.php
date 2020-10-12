<?php

declare(strict_types=1);

namespace Tenet\Ztk\Base;

trait ClientTrait
{
    /**
     * 构建请求参数
     *
     * @param array $args
     * @param array $options
     * @return void
     */
    public function buildRequest($args, $options)
    {
        [$this->args, $this->options] = [$args, $options];
    }


    /**
     * 设置base uri
     *
     * @return string
     *
     * @throws \Exception
     */
    public function getEndPoint()
    {
        if (isset($this->args['api'])) {
            $endpoint = $this->args['api'];
            unset($this->args['api']);
            return $endpoint;
        }

        throw new \Exception("base_uri is not found", 400);
    }


    /**
     * 是否启用sid参数
     * @return void
     */
    public function enableSid()
    {
        if (! empty($this->args['enableSid'])) {
            unset($this->args['enableSid']);
            $this->args['sid'] = $this->app->config->get('sid');
        }
    }


    public function doRequest()
    {
        $base = [
            "appkey" => $this->app->config->get('appkey')
        ];

        $this->args = array_merge($this->args, $base);
        $this->enableSid();
        $endpoint = $this->getEndPoint();
        $data = $this->request($endpoint, $this->args, $this->options);
        $data = array_pop($data);
        return $data['data']->getBody()->getContents();
    }
}
