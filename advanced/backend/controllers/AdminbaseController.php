<?php

namespace backend\controllers;

class AdminbaseController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
