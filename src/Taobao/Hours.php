<?php

declare(strict_types=1);

namespace Tenet\Ztk\Taobao;

/**
 * 两小时销量榜API
 *
 * 返回两小时内销量榜单商品列表（前600个），返回佣金≥15%，动态描述分≥4.6的商品列表。
 *
 * @link https://www.zhetaoke.com/user/extend/extend_lingquan_xiaoshi.aspx
 */
class Hours extends ZtkAbstract
{
    /**
     * @var string $api 接口名称
     */
    public $api = 'api/api_xiaoshi.ashx';

    /**
     * @var boolean 是否启用sid
     */
    public $enableSid = false;
}
