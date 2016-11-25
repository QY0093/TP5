<?php

namespace app\controllers;

class AdminController extends \yii\web\Controller
{
    public function actionIndex()
    {
        echo "hello world";
        return $this->render('index');
    }

}
