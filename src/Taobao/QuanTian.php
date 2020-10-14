<?php

declare(strict_types=1);

namespace Tenet\Ztk\Taobao;

/**
 * 全天销量榜API
 *
 * 返回24小时内销量榜单商品列表（前600个），返回佣金≥15%，动态描述分≥4.6的商品列表
 *
 * @link https://www.zhetaoke.com/user/extend/extend_lingquan_quantian.aspx
 */
class QuanTian extends ZtkAbstract
{
    /**
     * @var string $api 接口名称
     */
    public $api = 'api/api_quantian.ashx';

    /**
     * @var boolean 是否启用sid
     */
    public $enableSid = false;
}
