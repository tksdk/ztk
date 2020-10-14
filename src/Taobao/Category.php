<?php

declare(strict_types=1);

namespace Tenet\Ztk\Taobao;

/**
 * 一级和二级分类及分类图片
 *
 * 返回一级和二级分类列表，包括分类图片
 *
 * @link https://www.zhetaoke.com/user/extend/extend_lingquan_type.aspx
 */
class Category extends ZtkAbstract
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
