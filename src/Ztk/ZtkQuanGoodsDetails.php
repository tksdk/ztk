<?php

namespace Tenet\Ztk;

/**
 * 全网商品详情API接口
 *
 * 返回全网商品详情信息，包含优惠券信息，可用来开发全网搜索等超级功能。
 *
 * @link https://www.zhetaoke.com/user/extend/extend_lingquan_detail.aspx
 */
class ZtkQuanGoodsDetails
{

    /**
     * 接口名称
     *
     * @var string
     */
    private $api = 'api_detail.ashx';
    /**
     * @var string $code 折淘客编号，输入非折淘客商品编号，此参数无作用。code值可通过其它领券API接口结果获得。code值必须与tao_id值对应
     */
    private $code;

    /**
     * @var string|array 商品id
     */
    private $goodsId;

    /**
     * @var string $type 是否返回S券和G券全部数据。type=0表示返回全部两条数据，type=1表示返回S券单条数据（如无S券数据返回G券单条数据），默认type=0。
     */
    private $type;


    public function setCode($code)
    {
        $this->code = $code;
    }

    public function setGoodsId($goodsId)
    {
        $this->goodsId = $goodsId;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
}
