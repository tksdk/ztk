<?php

declare(strict_types=1);

namespace Tenet\Ztk\Taobao;

/**
 * 实时支出佣金榜API
 *
 * 实时返回支出佣金榜单商品列表（前600个），返回佣金≥15%，动态描述分≥4.6的商品列表
 *
 * @link https://www.zhetaoke.com/user/extend/extend_lingquan_yongjin.aspx
 */
class CouponsGoods extends ZtkAbstract
{
    /**
     * @var string $api 接口名称
     */
    public $api = 'api/api_yongjin.ashx';

    /**
     * @var boolean 是否启用sid
     */
    public $enableSid = false;
}
