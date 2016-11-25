<?php
use yii\widgets\LinkPager;
use yii\helpers\Url;
?>
<div class="row">
<div class="col-md-12">
      <div class="panel panel-default">

        <div class="panel-title">
          我的订单
        </div>

        <div class="panel-body">

          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <td>订单编号</td>
                <td>商品名称</td>
                <td>单价</td>
                <td>数量</td>
                <td>总价</td>
                <td>订单状态</td>
                <td>操作</td>
              </tr>
            </thead>
            <tbody>
            <?php $status =[
                0 => "未付款",
                1 => '已付款',
                2 => '已确认',
                3 => '无效',
                4 => '取消'
            ];?>
              <?php foreach ($list as $key => $val):?>
              <tr>
                <td># <b><?php echo $val['goods_sn'];?></b></td>
                <td><?php echo $val['goods_name'];?></td>
                <td><?php echo $val['goods_price'];?></td>
                <td><?php echo $val['goods_number'];?></td>
                <td><?php echo $val['goods_amount'];?></td>
                <td><?php echo $status[$val['order_status']];?></td>
                <td>
                <a href="<?php echo Url::to(['/goods/item']).'&id'.'='.$val['goods_id'];?>" class="btn btn-rounded btn-success">详情</a>
                <?php if($val['order_status']==0):?>
                <a href="#" class="btn btn-rounded btn-warning">付款</a>
                <?php endif;?>
                <?php if(in_array($val['order_status'], [0, 1])):?>
                <a data-id=<?php echo $val['rec_id'];?> data-type="RemoveProduct" href="javascript:void(0);" class="btn btn-rounded btn-default">取消</a>
                <?php endif;?>
                </td>
              </tr>
              <?php endforeach;?>
            </tbody>
          </table>
        </div>

      </div>
    </div>
    <div class="content-pagenation">
	<?php echo LinkPager::widget(['pagination'=>$pages]);?>
</div>
    </div>
<script type="text/javascript">
var isGuest = <?php echo intval(Yii::$app->user->isGuest);?>;	
$(".btn-default").on("click", function(){
	if(isGuest) {
		alert("请登录");
		//省略弹出层细节，可参考网络
		return false;
	}
	var id = $(this).data('id');
	var url = "<?php echo Url::to(["order/cancel"]);?>";
	$.post(url, {'id':id}, function(data){
    	console.log(data);
    	alert(data.message);
	});
});

/**
 * 取消订单
 */
	function CancelOrder(that) {
// 		console.log($(that).data());
		var id = $(that).data('id');
    	var url = "<?php echo Url::to(["order/cancel"]);?>";
    	$.post(url, {'id':id}, function(data){
        	console.log(data);
        	alert(data.message);
    	});
	}
</script>
    