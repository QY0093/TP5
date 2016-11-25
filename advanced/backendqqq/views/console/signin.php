<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
  <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
  <title>Kode - Premium Bootstrap Admin Template</title>

  <!-- ========== Css Files ========== -->
  <?php echo HTML::cssFile("@web/css/root.css", ['type' => 'text/css', 'rel' => 'stylesheet']); ?>
  <style type="text/css">
    body{background: #F5F5F5;}
  </style>
  </head>
  <body>

    <div class="login-form">
      <?php $form = ActiveForm::begin(); ?>
        <div class="top">
          <img src="img/kode-icon.png" alt="icon" class="icon">
          <h1>用户登录</h1>
        </div>
        <div class="form-area">
          <div class="group">
            <?= $form->field($model, 'user_name')->textInput(); ?>
            <i class="fa fa-user"></i>
          </div>
          <div class="group">
            <?= $form->field($model, 'password')->passwordInput();?>
            <i class="fa fa-key"></i>
          </div>
          <div class="checkbox checkbox-primary">
            <input id="checkbox101" type="checkbox" checked>
            <label for="checkbox101"> Remember Me</label>
          </div>
          <?= Html::submitButton('登录', ['class' => 'btn btn-default btn-block'])?>
          
        </div>
      <?php ActiveForm::end(); ?>
      <div class="footer-links row">
        <div class="col-xs-6"><a href="#"><i class="fa fa-external-link"></i> Register Now</a></div>
        <div class="col-xs-6 text-right"><a href="#"><i class="fa fa-lock"></i> Forgot password</a></div>
      </div>
    </div>

</body>
</html>