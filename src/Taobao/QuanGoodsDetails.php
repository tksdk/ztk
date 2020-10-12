<?php

declare(strict_types=1);

namespace Tenet\Ztk\Taobao;

/**
 * 全网商品详情API接口
 *
 * 返回全网商品详情信息，包含优惠券信息，可用来开发全网搜索等超级功能。
 *
 * @link https://www.zhetaoke.com/user/extend/extend_lingquan_detail.aspx
 */
class QuanGoodsDetails extends ZtkAbstract
{
    /**
     * 接口名称
     *
     * @var string
     */
    public $api = 'api/api_detail.ashx';

    /**
     * 是否启用sid
     * @var boolean
     */
    public $enableSid = false;
}
