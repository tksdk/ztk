<?php

declare (strict_types = 1);

namespace Tenet\Ztk\Taobao;


/**
 * 精选礼物专题API
 *
 * 返回精选礼物专题列表和相应的专题商品请求地址
 *
 * @link https://www.zhetaoke.com/user/extend/extend_lingquan_liwu_zhuanti.aspx
 */
class Gifts extends ZtkAbstract
{
	/**
	 * @var string $api 接口名称
	 */
    public $api = 'api/api_liwu_zhuanti.ashx.ashx';

    /**
     * @var boolean 是否启用sid
     */
    public $enableSid = false;
}