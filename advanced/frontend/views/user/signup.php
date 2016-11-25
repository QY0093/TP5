<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Users */
/* @var $form ActiveForm */
?>
<div class="user-signup">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'user_name') ?>
        <?= $form->field($model, 'password') ?>
        <?= $form->field($model, 'email') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- user-signup -->
