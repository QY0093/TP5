<?php

namespace app\modules\admin\controllers;

class indexController extends \yii\web\Controller
{
//    public $defaultAction='index';
    
    public function actionIndex()
    {
        echo "hello";
        return $this->render('index');
    }

}
