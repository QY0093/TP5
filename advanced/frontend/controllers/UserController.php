<?php
namespace frontend\controllers;

use yii\web\Controller;
use yii\base\Model;
use frontend\models\Users;
use Yii;
use yii\helpers\Url;
use yii\web\User;
use yii\base\Request;
use frontend\models\UsersSearch;

class UserController extends Controller
{
    public function actionIndex()
    {
//         $searchModel = new UsersSearch();
//         $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
//         var_dump(\Yii::$app->user->identity);
//         die();
        if(\Yii::$app->user->isGuest) {
            $this->redirect(Url::to([
                "/user/signin"
            ]));
            return;
        }
        //获取ID
        $userid = Yii::$app->user->identity->user_id;
        //单人用户信息
        $Users = new Users();
        $userInfo = $Users::find()->where([
            'user_id' => $userid
        ])->one();
        
        return $this->render('index', [
             'userInfo' => $userInfo
        ]);
//         return $this->render('index');
    }

    /**
     * 注册
     */
    public function actionSignup()
    {
        if(!\Yii::$app->user->isGuest) {
            $this->redirect(Url::to([
                "/user/idnex"
            ]));
            return;
        }
        // return $this->render('signup');
        $model = new Users();
        // var_dump(Yii::$app->request->getIsPost());
        if (Yii::$app->request->getIsPost()) {
            $post = Yii::$app->request->post();
            $post['Users']['password'] = md5($post["Users"]['password']);
            // var_dump($post);
            if ($model->load($post)) {
                if ($model->validate()) {
                    // form inputs are valid, do something here
                    $model->save();
                    $this->redirect(Url::to([
                        "/user/signin"
                    ]));
                    return;
                }
            }
        }
        
        return $this->render('signup', [
            'model' => $model
        ]);
    }

    /**
     * 登录
     */
    public function actionSignin()
    {
        if(!Yii::$app->user->isGuest) {
            $this->redirect(Url::to([
                "/user/index"
            ]));
            return;
        }
//         $referrer = \Yii::$app->request->getReferrer();
//         var_dump($referrer);
        $beforeLoginUrl = \Yii::$app->session->get("beforeLoginUrl");
        // return $this->render('signin');
        $model = new Users();
        if (Yii::$app->request->getIsPost()) {
            $post = Yii::$app->request->post();
            // 模型里验证登录状态
            $row = $model->login($post['Users']);
//             exit();
            //如果登录成功，跳转到用户登录中心
            if ($row) {
                \Yii::$app->session->remove("beforeLoginUrl");
                if(!empty($beforeLoginUrl)) {
                    header("Location:".$beforeLoginUrl);
                    exit();
                } else {
                    $this->redirect([
                        '/user/index'
//                         $beforeLoginUrl
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
    public function actionSignout()
    {
        Yii::$app->user->logout();
    
        return $this->goHome();
    }
    
    
}
