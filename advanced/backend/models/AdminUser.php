<?php

namespace backend\models;

use Yii;
use yii\web\IdentityInterface;
use yii\web\NotFoundHttpException;

/**
 * This is the model class for table "{{%admin_user}}".
 *
 * @property integer $user_id
 * @property string $user_name
 * @property string $email
 * @property string $password
 * @property string $ec_salt
 * @property integer $add_time
 * @property integer $last_login
 * @property string $last_ip
 * @property string $action_list
 * @property string $nav_list
 * @property string $lang_type
 * @property integer $agency_id
 * @property integer $suppliers_id
 * @property string $todolist
 * @property integer $role_id
 */
class AdminUser extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%admin_user}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [
            [
                'user_name'
            ],
            'required',
            'message' => '用户名不能为空'
                ],
                [
                    [
                        'password'
                    ],
                    'required',
                    'message' => '密码不能为空'
                ],
            /*
            [['add_time', 'last_login', 'agency_id', 'suppliers_id', 'role_id'], 'integer'],
            [['action_list', 'nav_list', 'agency_id'], 'required'],
            [['action_list', 'nav_list', 'todolist'], 'string'],
            [['user_name', 'email'], 'string', 'max' => 60],
            [['password'], 'string', 'max' => 32],
            [['ec_salt'], 'string', 'max' => 10],
            [['last_ip'], 'string', 'max' => 15],
            [['lang_type'], 'string', 'max' => 50],
            */
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'user_name' => 'User Name',
            'email' => 'Email',
            'password' => 'Password',
            'ec_salt' => 'Ec Salt',
            'add_time' => 'Add Time',
            'last_login' => 'Last Login',
            'last_ip' => 'Last Ip',
            'action_list' => 'Action List',
            'nav_list' => 'Nav List',
            'lang_type' => 'Lang Type',
            'agency_id' => 'Agency ID',
            'suppliers_id' => 'Suppliers ID',
            'todolist' => 'Todolist',
            'role_id' => 'Role ID',
        ];
    }
    
    public function login($user_arr)
    {
        $username = $user_arr['user_name'];
        $password = $user_arr['password'];
        $row = $this::find()->where([
            'user_name' => $username
        ])->one();
        if (!$row) {
            return false;
        }
        if ($row['password'] != md5($password)) {
            return false;
        }
//           Yii::$app->session->set("token", $row['user_name']);
        Yii::$app->user->login($row, 3600);
        return true;
    }
    /**
     * Finds the Users model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Users the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AdminUser::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    public static function findIdentity($id)
    {
        return static::findOne([
            'user_id' => $id
        ]);
    }
    
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return false;
    }
    
    public function getId()
    {
        return $this->getPrimaryKey();
    }
    
    public function getAuthKey()
    {
        return false;
    }
    
    public function validateAuthKey($authKey)
    {
        return false;
    }
}


