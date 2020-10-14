<?php

declare (strict_types = 1);

namespace Tenet\Ztk\Taobao;


/**
 * 视频(抖货)商品API接口
 * 
 * 返回全网视频商品列表，返回佣金≥15%，动态描述分≥4.6的商品列表
 *
 * @link https://www.zhetaoke.com/user/extend/extend_lingquan_videos.aspx
 */
class Videos extends ZtkAbstract
{
	/**
	 * @var string $api 接口名称
	 */
    public $api = 'api/api_videos.ashx';

    /**
     * @var boolean 是否启用sid
     */
    public $enableSid = false;
}