<?php

declare(strict_types=1);

namespace Tenet\Ztk\Taobao;

/**
 * 线报商品API接口
 *
 * 返回指定群编号的线报商品信息
 *
 * @link https://www.zhetaoke.com/user/extend/extend_lingquan_xianbao.aspx
 */
class XianBao extends ZtkAbstract
{
    /**
     * 接口名称
     *
     * @var string
     */
    public $api = 'api/api_xianbao.ashx';

    /**
     * 是否启用sid
     * @var boolean
     */
    public $enableSid = false;
}
