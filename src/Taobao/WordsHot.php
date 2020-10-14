<?php

declare(strict_types=1);

namespace Tenet\Ztk\Taobao;

/**
 * 热搜词词典API
 *
 * 返回热搜词词典表，搜索量极大，曝光量极高的词（适合用来优化标题和了解买家实时需求），分淘客热搜词和买家热搜词
 *
 * @link https://www.zhetaoke.com/user/extend/extend_lingquan_guanjianci.aspx
 */
class WordsHot extends ZtkAbstract
{
    /**
     * @var string $api 接口名称
     */
    public $api = 'api/api_guanjianci.ashx';

    /**
     * @var boolean 是否启用sid
     */
    public $enableSid = false;
}
