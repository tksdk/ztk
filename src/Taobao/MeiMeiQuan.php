<?php

declare(strict_types=1);

namespace Tenet\Ztk\Taobao;

/**
 * 美美圈活动商品API接口
 *
 * 返回美美圈活动商品列表，返回佣金≥5%，动态描述分≥4.6的商品列表
 *
 * @link https://www.zhetaoke.com/user/extend/extend_lingquan_jingxuan.aspx
 */
class MeiMeiQuan extends ZtkAbstract
{
    /**
     * 接口名称
     *
     * @var string
     */
    public $api = 'api/api_jingxuan.ashx';

    /**
     * 是否启用sid
     * @var boolean
     */
    public $enableSid = false;
}
