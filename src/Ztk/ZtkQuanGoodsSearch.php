<?php

namespace Tenet\Ztk;

/**
 * Undocumented class
 */
class ZtkQuanGoodsSearch
{

    /**
     * 接口名称
     *
     * @var string
     */
    private $api = 'api_quanwang.ashx';
    /**
     * @var int $page 页码
     */
    private $page;

    /**
     * @var int $pageSize 页项条数
     */
    private $pageSize;

    /**
     * @var string $sort 排序条件
     */
    private $sort;

    /**
     * @var string $keyword 关键词
     */
    private $keyword;

    /**
     * @var string  $materialId 官方的物料Id，默认为空表示全网商品；
     */
    private $materialId;

    /**
     * @var string $youQuan 否有券，1为有券，其它值为全部商品
     */
    private $youQuan;

    /**
     * @var string $HaiWai 是否海外商品，1为海外，其它值为全部商品
     */
    private $HaiWai;

    /**
     * @var string $tj 是否天猫商品，值为空：全部商品，tmall：天猫商品
     */
    private $tj;

    /**
     * @var string $itemLoc 商品所在地，值为空：全部商品，其它值：北京、上海、广州、深圳、重庆、杭州等。必须是城市名称，不能带省份。
     */
    private $itemLoc;

    /**
     * @var string $cat 商品筛选-后台类目ID(category_id)。用,分割，最大10个，该ID可以加入折淘客开放平台API群来获取。
     */
    private $cat;

    /**
     * @var string $startTkRate 淘客佣金比率下限。如：输入20，表示大于等于20%
     */
    private $startTkRate;

    /**
     * @var string $endTkRate 淘客佣金比率上限。如：输入50，表示小于等于50%
     */
    private $endTkRate;

    /**
     * @var string $startPrice 折扣价格下限。如：输入100，表示大于等于100元
     */
    private $startPrice;

    /**
     * @var string $endPrice 折扣价格上限。如：输入200，表示小于等于200元
     */
    private $endPrice;

    /**
     * @var string 过滤值 值为0：不过滤，值为1：轻度过滤，值为2：中度过滤，强烈推荐值为2。
     */
    private $type;
}
