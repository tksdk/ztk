<?php

declare(strict_types=1);

namespace Tenet\Ztk\Taobao;

/**
 * 联想词API
 *
 * 根据搜索关键词返回联想词，完善您的搜索功能，建议用户停止输入时进行接口请求
 *
 * @link https://www.zhetaoke.com/user/extend/extend_lingquan_suggest.aspx
 */
class WordSuggest extends ZtkAbstract
{
    /**
     * @var string $api 接口名称
     */
    public $api = 'api/api_suggest.ashx';

    /**
     * @var boolean 是否启用sid
     */
    public $enableSid = false;
}
