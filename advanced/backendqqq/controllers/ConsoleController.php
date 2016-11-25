<?php

namespace backend\controllers;
use app\components\MyBehavior;
use \yii\web\Controller;
use backend\models\AdminUser;
use Yii;
use yii\helpers\Url;

class ConsoleController extends Controller
{
    public $layout = false;
    
    public function actionIndex()
    {
        if(\Yii::$app->user->isGuest) {
            $this->redirect(Url::to([
                "/console/signin"
            ]));
            return;
        }
        //获取ID
        $userid = Yii::$app->user->identity->user_id;
        //单人用户信息
        $AdminUsers = new AdminUser();
        $userInfo = $AdminUsers::find()->where([
            'user_id' => $userid
        ])->one();
//         $userInfo->last_login = date("Y-m-d H:i:s", time());
        return $this->render('index', [
            'userInfo' => $userInfo
        ]);
    }
    
    /**
     * 登录
     */
    public function actionSignin() 
    {
        /*
        $this->attachBehavior("myBehavior1", new MyBehavior());
        $this->setProp2("我是行为");
        echo $this->getProp2();
        
        //1.最古老的调用方式
        $MyBehavior  = new MyBehavior();
        $method = "foo";
        //         $MyBehavior->$method(" PHP ");
        
        //2.先进的方式
        call_user_func([$MyBehavior, $method], " PHP ", "aaa");
        call_user_func_array([$MyBehavior, $method], [" PHP ", "aaa"]);
//         call_user_func_array([$object, $name], $params);
        die();
        */
        
        if(!Yii::$app->user->isGuest) {
            $this->redirect(Url::to([
                "/console/index"
            ]));
            return;
        }
        $beforeLoginUrl = \Yii::$app->session->get("beforeLoginUrl");
//         var_dump($beforeLoginUrl);
//         die();
    
        $model = new AdminUser();
        
        if (\Yii::$app->request->getIsPost()) {
            $post = \Yii::$app->request->post();
            
            // 模型里验证登录状态
            $row = $model->login($post['AdminUser']);
            
            //如果登录成功，跳转到用户登录中心
            if ($row) {
                \Yii::$app->session->remove("beforeLoginUrl");
                if(!empty($beforeLoginUrl)) {
                    header("Location:".$beforeLoginUrl);
                    exit();
                } else {
                    $this->redirect([
                        '/console/index'
                    ]);
                }
        
            }
        }
        return $this->render('signin', [
            'model' => $model
        ]);
    }
    
    /**
     * 退出
     */
    public function actionSignup() 
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }

}
