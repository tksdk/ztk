<?php

declare (strict_types = 1);

namespace Tenet\Ztk\Taobao;


/**
 * 品牌列表
 *
 * 返回前100名品牌名列表
 *
 * @link https://www.zhetaoke.com/user/extend/extend_lingquan_pinpai.aspx
 */
class Brands extends ZtkAbstract
{
	/**
	 * @var string $api 接口名称
	 */
    public $api = 'api/api_pinpai_name.ashx';

    /**
     * @var boolean 是否启用sid
     */
    public $enableSid = false;
}