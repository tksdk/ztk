<?php

declare (strict_types = 1);

namespace Tenet\Ztk\Taobao;


/**
 * 猜你喜欢API（相似商品API）
 *
 * 传入用户设备信息，即可返回个性化的推荐结果，实现千人千面效果。返回佣金≥15%，动态描述分≥4.6的商品列表
 *
 * @link https://www.zhetaoke.com/user/extend/extend_lingquan_pinpai.aspx
 */
class Recommends extends ZtkAbstract
{
	/**
	 * @var string $api 接口名称
	 */
    public $api = 'api/open_item_guess_like.ashx';

    /**
     * @var boolean 是否启用sid
     */
    public $enableSid = false;
}