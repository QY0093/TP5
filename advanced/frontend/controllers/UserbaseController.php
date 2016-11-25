<?php

namespace frontend\controllers;
use Yii;
use yii\helpers\Url;

class UserbaseController extends \yii\web\Controller
{
    public function init() {
        $this->verify();
    }
    public function verify()
    {
        if(Yii::$app->user->isGuest) {
            $url = Url::to(['/user/signin']);
            $beforeLoginUrl = \Yii::$app->request->getUrl();
            \Yii::$app->session->set("beforeLoginUrl", $beforeLoginUrl);
//             var_dump($beforeLoginUrl);
//             die();
            header("Location:". $url);
            exit();
        }
    }
    
    

}
