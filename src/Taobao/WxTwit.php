<?php

declare(strict_types=1);

namespace Tenet\Ztk\Taobao;

/**
 * 二维码发单图API（朋友圈文案）
 *
 * 支持淘口令文案，可返回二维码发单图url、中间页url和朋友圈文案，完全防封
 *
 * @link https://www.zhetaoke.com/user/open/open_qrpic.aspx
 */
class WxTwit extends ZtkAbstract
{
    /**
     * @var string $api 接口名称
     */
    public $api = 'api/open_qrpic.ashx';

    /**
     * @var boolean 是否启用sid
     */
    public $enableSid = true;
}
