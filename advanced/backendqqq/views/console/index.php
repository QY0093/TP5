<?php 
    use yii\bootstrap\Html;
?>
<div class="row">
	<div class="col-md-6 col-lg-8">
      <div class="panel panel-default">

        <div class="panel-title">
          	基本信息
        </div>

        <div class="panel-body">
          <p>昵称：<?= Yii::$app->user->identity->user_name?></p>
          <p>邮箱：<?php echo $userInfo->email;?></p>
        </div>

      </div>
      <div class="panel-footer">
      	<?= Html::a('详细信息', ['console/detail'], ['class' => 'btn btn-success']) ?>
      </div>
    </div>
</div>