<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php if(Yii::$app->user->isGuest):?>
<div class="row">
	<div class="col-md-12">
		<div class="kode-alert kode-alert-icon alert11">
			<i class="fa fa-warning"></i> <a href="#" class="closed">×</a>
			您还没有登录!登陆后购物车的商品将会保存到您的账号中。 <a
				href="<?php echo Url::to(["user/signin"]);?>"
				class="btn btn-rounded btn-rounded">立即登录</a>
		</div>
	</div>
</div>
<?php endif;?>
<style>
.cart-index-list input {
	position: relative;
	top: -7px;
}
</style>
<?php 
$form = ActiveForm::begin([
    'action'=>[  
        'cart/checkout'        
    ], 
    'method' => 'post',
    'id' => 'form-cart-checkout'
]); 
?>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-title">购物车</div>
			<div class="panel-body table-responsive">
				<table class="table table-hover cart-index-list">
					<thead>
						<tr>
							<td>商品</td>
							<td>数量</td>
							<td>金额</td>
							<td>状态</td>
							<td>操作</td>
						</tr>
					</thead>
					<tbody>
					<?php if(!empty($query)): foreach ($query as $key=>$val):?>
						<tr>
							<td><b><?php echo $val['goods_name'];?></b></td>
							<td><?php echo $val['goods_number']?></td>
							<td><?php echo sprintf("%.2f", $val['goods_number']*$val['market_price']);?></td>
							<td>
							<?php 
    							echo $messagep; 
    							echo $messages; 
    							echo $messageo;
							?>
							</td>
							<td><a href="">删除</a><a href="">支付</a></td>
						</tr>
					<?php endforeach; endif;?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php ActiveForm::end(); ?>