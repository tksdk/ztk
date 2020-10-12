<?php

declare (strict_types = 1);

namespace Tenet\Taobao\Ztk;

trait GoodsTrait 
{

	/**
	 * @var integer $page 页码
	 */
	protected $page;

	/**
	 * @var integer $pageSize 每页数据条数（默认每页20条），可自定义1-50之间
	 */
	protected $pageSize;

	/**
	 * new：按照两小时销量从高到低进行排序，
	 * total_sale_num_asc：按照总销量从小到大排序，total_sale_num_desc：按照总销量从大到小排序，
	 * sale_num_asc：按照月销量从小到大排序，sale_num_desc：按照月销量从大到小排序，
	 * commission_rate_asc：按照佣金比例从小到大排序，commission_rate_desc：按照佣金比例从大到小排序，
	 * price_asc：按照价格从小到大排序，price_desc：按照价格从大到小排序，
	 * coupon_info_money_asc：按照优惠券金额从小到大排序，coupon_info_money_desc：按照优惠券金额从大到小排序，
	 * shop_level_asc：按照店铺等级从低到高排序，shop_level_desc：按照店铺等级从高到低排序，
	 * tkfee_asc：按照返佣金额从低到高排序，tkfee_desc：按照返佣金额从高到低排序，
	 * code：按照code值从大到小排序，
	 * date_time：按照更新时间排序，
	 * random：按照随机排序
	 * @var string $sort 商品排序方式
	 */
	protected $sort;
}