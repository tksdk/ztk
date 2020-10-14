<?php

declare(strict_types=1);

namespace Tenet\Ztk\Taobao;

/**
 * 轮播图API
 *
 * 返回轮播图列表和相应的专题商品请求地址
 *
 * @link https://www.zhetaoke.com/user/extend/extend_lingquan_lunbo.aspx
 */
class Carousel extends ZtkAbstract
{
    /**
     * @var string $api 接口名称
     */
    public $api = 'api/api_lunbo.ashx';

    /**
     * @var boolean 是否启用sid
     */
    public $enableSid = false;
}
