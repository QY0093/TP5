<?php

namespace app\controllers;

use yii\web\Controller;
use yii;

class HomeController extends Controller {
    
    public function actions()
    {
        return [
            'page' => [
                'class' => 'yii\web\ViewAction',
            ],
        ];
    }

    public function actionIndex($message = "") {
//        echo 'Hello World!';

        return $this->render("index", [
                    'message' => $message
        ]);
    }

    public function actionEntry() {
        $model = new \app\models\EntryForm();
        /*
          $model = new \app\models\EntryForm();
          $model->name = "Qiang";
          $model->email = "bad";
          //        $model->email = "good@126.com";
          $row = $model->validate();
          var_dump($row, $model->getErrors());
         */

        $get["EntryForm"] = Yii::$app->request->get();
        $model->load($get);
        var_dump($get);
        $row = $model->validate();
        var_dump($row, $model->getErrors());
    }
    
    public function actionGoods() {
        
        $Customer = new \app\models\Customer();
        $Customer->name = "张三";
        $Customer->save();
        
    }

}
