<?php
require_once '../vendor/autoload.php';

use lampol\pc\service\AlipayTradeService;
use lampol\pc\buildermodel\AlipayTradeCloseContentBuilder;

require_once dirname(dirname(__FILE__)).'/config.php';
//require_once dirname(__FILE__).'/service/AlipayTradeService.php';
//require_once dirname(__FILE__).'/buildermodel/AlipayTradeCloseContentBuilder.php';

    //商户订单号，商户网站订单系统中唯一订单号
    $out_trade_no = trim($_POST['WIDTCout_trade_no']);

    //支付宝交易号
    $trade_no = trim($_POST['WIDTCtrade_no']);
    //请二选一设置

	//构造参数
	$RequestBuilder=new AlipayTradeCloseContentBuilder();
	$RequestBuilder->setOutTradeNo($out_trade_no);
	$RequestBuilder->setTradeNo($trade_no);

	$aop = new AlipayTradeService($config);

	/**
	 * alipay.trade.close (统一收单交易关闭接口)
	 * @param $builder 业务参数，使用buildmodel中的对象生成。
	 * @return $response 支付宝返回的信息
	 */
	$response = $aop->Close($RequestBuilder);
	var_dump($response);
?>
</body>
</html>
