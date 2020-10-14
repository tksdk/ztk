<?php

declare(strict_types=1);

namespace Tenet\Ztk\Taobao;

/**
 * 失效商品API
 *
 * 返回站内失效商品列表，按照失效时间倒序排序
 *
 * @link https://www.zhetaoke.com/user/extend/extend_lingquan_shixiao.aspx
 */
class ExpiredGoods extends ZtkAbstract
{
    /**
     * @var string $api 接口名称
     */
    public $api = 'api/api_shixiao.ashx';

    /**
     * @var boolean 是否启用sid
     */
    public $enableSid = false;
}
