<?php

namespace frontend\controllers;
use yii\rest\ActiveController;
use yii\web\Response;
use yii\helpers\Url;
use yii\web\ServerErrorHttpException;
use Yii;
use yii\base\Model;

class MemberController extends ActiveController
{
    public $modelClass = 'frontend\models\Users';
    public $scenario = Model::SCENARIO_DEFAULT;
    public $viewAction = 'view';
     
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];
    
    public function actions()
    {
        $actions = parent::actions();
//         var_dump($actions);
//      删除unset($action['index'])父类的index函数，则可在本控制器类调用该控制器的actionIndex
       //actionIndex()控制器里的方法以及父类的actions里的index方法两个只能有一个
//         unset($actions['index']);
        unset($actions['create']);
//         return [];
        return $actions;
    }
    
//     public function actionIndex()
//     {
//         return $this->render('index');
//     }
    
    
    //行为，一定要继承父类的behaviours
    public function behaviors(){
        $behaviors = parent::behaviors();
        $behaviors['contentNegotiator']['formats']['text/html'] = Response::FORMAT_JSON;
        $behaviors['contentNegotiator']['formats']['application/json'] = Response::FORMAT_JSON;
        return $behaviors;
    }
    
    public function actionIndex() {
        echo "这是Index";
        die();
    }
    
    /**
     * 注册用户
     * @throws ServerErrorHttpException
     */
    public function actionCreate()
    {
        if (!empty($this->checkAccess)) {
            call_user_func($this->checkAccess, $this->id);
        }
        $data = \Yii::$app->getRequest()->getBodyParams();
        $model = new $this->modelClass([
           'scenario' => $this->scenario, 
        ]);
        $data['password'] = md5($data['password']);
        $model->load($data, '');
        if($model->save()){
            //工厂模式
            $response = Yii::$app->getResponse();
            $response->setStatusCode(201);
            $id = implode(',', array_values($model->getPrimaryKey(true)));
            $response->getHeaders()->set("Location", Url::toRoute([
                $this->viewAction,
                'id' => $id
            ], true));
        } elseif(!$model->hasErrors()) {
            //错误提示
            var_dump($model);
            throw new ServerErrorHttpException('Failed to create the object for unknown reason');
        }
        return $model;
    }

}
