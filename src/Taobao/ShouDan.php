<?php

declare(strict_types=1);

namespace Tenet\Ztk\Taobao;

/**
 * 首单礼金商品API
 *
 * 返回首单礼金商品列表
 *
 * @link https://www.zhetaoke.com/user/extend/extend_lingquan_hongbao.aspx
 */
class ShouDan extends ZtkAbstract
{
    /**
     * 接口名称
     *
     * @var string
     */
    public $api = 'api/api_shoudan';

    /**
     * 是否启用sid
     * @var boolean
     */
    public $enableSid = false;
}
