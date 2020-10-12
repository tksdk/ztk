<?php

declare(strict_types=1);

namespace Tenet\Ztk\Taobao;

/**
 * 折淘客全网搜索
 *
 * 全网搜索商品API接口：根据关键字搜索商品，返回动态描述分≥4.6的商品列表，包含优惠券信息，可用来开发全网搜索等超级功能。
 *
 * @link https://www.zhetaoke.com/user/extend/extend_lingquan_keywords.aspx
 *
 */
class QuanGoodsSearch extends ZtkAbstract
{
    /**
     * 接口名称
     *
     * @var string
    */
    public $api = 'api/api_quanwang.ashx';

    /**
     * 是否启用sid
     * @var boolean
    */
    public $enableSid = false;
}
