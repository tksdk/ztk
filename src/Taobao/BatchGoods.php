<?php

declare(strict_types=1);

namespace Tenet\Ztk\Taobao;

class BatchGoods extends ZtkAbstract
{
    /**
     * @var string $api 接口名称
     */
    public $api = 'api/api_detail_piliang.ashx';

    /**
     * @var boolean 是否启用sid
     */
    public $enableSid = false;
}
