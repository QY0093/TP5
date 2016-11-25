<?php
namespace frontend\controllers;

use yii\web\Controller;
use Yii;

class IndexController extends Controller
{
    public function actionIndex() {
       return $this->render('index');
    }
    
    public function actionAboutus() {
        return $this->render('aboutus');
    }
    
    public function actionContact() {
        return $this->render('contact');
    }
    
    public function actionSetcache() {
        \Yii::$app->cache->set("hello", "hello world", 60);
        \Yii::$app->cache->set("hel", "hello world", 60);
        \Yii::$app->cache->set("qyj", "hello world", 60);
    }
    
    public function actionGetcache() {
        $var = Yii::$app->cache->get("hello");
        var_dump($var);
    }
}

?>