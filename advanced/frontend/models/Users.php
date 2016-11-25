<?php
namespace frontend\models;

use Yii;
use yii\web\Session;
use yii\web\IdentityInterface;
use yii\web\NotFoundHttpException;
use yii\web\Link;
use yii\helpers\Url;
use yii\web\Linkable;

/**
 * This is the model class for table "{{%users}}".
 *
 * @property string $user_id
 * @property string $email
 * @property string $user_name
 * @property string $password
 * @property string $question
 * @property string $answer
 * @property integer $sex
 * @property string $birthday
 * @property string $user_money
 * @property string $frozen_money
 * @property string $pay_points
 * @property string $rank_points
 * @property string $address_id
 * @property string $reg_time
 * @property string $last_login
 * @property string $last_time
 * @property string $last_ip
 * @property integer $visit_count
 * @property integer $user_rank
 * @property integer $is_special
 * @property string $ec_salt
 * @property string $salt
 * @property integer $parent_id
 * @property integer $flag
 * @property string $alias
 * @property string $msn
 * @property string $qq
 * @property string $office_phone
 * @property string $home_phone
 * @property string $mobile_phone
 * @property integer $is_validated
 * @property string $credit_line
 * @property string $passwd_question
 * @property string $passwd_answer
 */
class Users extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface, Linkable
{
//     public $authKey;
//     public $user_id;
//     public $user_name;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%users}}';
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
            // [['password_compare'], 'required', 'message'=>'密码不能为空'],
            [['email'],'required', 'message' => '邮箱不能为空'],
            [['user_name'],'unique','message' => '用户名已存在'],
            [['password'],'string','min' => 6,'message' => '密码最少需要6位'],
            // [['email', 'user_name'], 'string', 'max' => 60],
            [['email'],'email','message' => '必须为Email格式']];
        // [['password_compare'], 'compare', 'compareAttribute'=>'password']
        /*
         * [['sex', 'pay_points', 'rank_points', 'address_id', 'reg_time', 'last_login', 'visit_count', 'user_rank', 'is_special', 'parent_id', 'flag', 'is_validated'], 'integer'],
         * [['birthday', 'last_time'], 'safe'],
         * [['user_money', 'frozen_money', 'credit_line'], 'number'],
         * [['alias', 'msn', 'qq', 'office_phone', 'home_phone', 'mobile_phone', 'credit_line'], 'required'],
         * [['email', 'user_name', 'alias', 'msn'], 'string', 'max' => 60],
         * [['password'], 'string', 'max' => 32],
         * [['question', 'answer', 'passwd_answer'], 'string', 'max' => 255],
         * [['last_ip'], 'string', 'max' => 15],
         * [['ec_salt', 'salt'], 'string', 'max' => 10],
         * [['qq', 'office_phone', 'home_phone', 'mobile_phone'], 'string', 'max' => 20],
         * [['passwd_question'], 'string', 'max' => 50],
         *
         * [['user_name'], 'unique'],
         */
        
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'email' => '邮箱',
            'user_name' => '用户名',
            'password' => '密码',
            // 'password_compare' => '重复密码',
            'question' => 'Question',
            'answer' => 'Answer',
            'sex' => 'Sex',
            'birthday' => 'Birthday',
            'user_money' => 'User Money',
            'frozen_money' => 'Frozen Money',
            'pay_points' => 'Pay Points',
            'rank_points' => 'Rank Points',
            'address_id' => 'Address ID',
            'reg_time' => 'Reg Time',
            'last_login' => 'Last Login',
            'last_time' => 'Last Time',
            'last_ip' => 'Last Ip',
            'visit_count' => 'Visit Count',
            'user_rank' => 'User Rank',
            'is_special' => 'Is Special',
            'ec_salt' => 'Ec Salt',
            'salt' => 'Salt',
            'parent_id' => 'Parent ID',
            'flag' => 'Flag',
            'alias' => 'Alias',
            'msn' => 'Msn',
            'qq' => 'Qq',
            'office_phone' => 'Office Phone',
            'home_phone' => 'Home Phone',
            'mobile_phone' => 'Mobile Phone',
            'is_validated' => 'Is Validated',
            'credit_line' => 'Credit Line',
            'passwd_question' => 'Passwd Question',
            'passwd_answer' => 'Passwd Answer'
        ];
    }
    
    /**
     * 删除敏感字段
     * 不显示用户密码
     * 
     * {@inheritDoc}
     * @see \yii\db\BaseActiveRecord::fields()
     */
    public function fields()
    {
        $fields = parent::fields(); 
        //返回指定字段
        return [
            'email' => function($fields){
                $oemail = $fields['email'];
                $pos = strpos($oemail, "@");
                //1.取出前两个字符
                //2.用*号填充到@符号之前的字符
                //3.再拼接@符号之后的字符串
                $nemail = str_pad(substr($oemail, 0, 2), $pos, "*").substr($oemail, $pos);
                return $nemail;
            }, 
            'user_name'
            
        ];
        //先从父类获取所有字段，然后再删除指定字段
        
//         !empty($fields)&&($fields['password']="");
       if(!empty($fields)) {
           unset($fields['password']);
       }
        return $fields;
    }
    
    /**
     * 显示额外的数据
     * 
     * {@inheritDoc}
     * @see \yii\db\BaseActiveRecord::extraFields()
     */
    public function extraFields()
    {
        return ['birthday','pay_points'];
    }

    public function getLinks()
    {
        //true将接口变成绝对接口，添加链接，href,记得要继承接口Linkable
        return [
            Link::REL_SELF => Url::to(['/members/'.$this->id], true)  
        ];
    }
    
    /**
     * 登录
     *
     * @param unknown $user_arr            
     */
    public function login($user_arr)
    {
        $username = $user_arr['user_name'];
        $password = $user_arr['password'];
        $row = $this::find()->where([
            'user_name' => $username
        ])->one();
        if (! $row) {
            return false;
        }
        if ($row['password'] != md5($password)) {
            return false;
        }
//         Yii::$app->session->set("token", $row['user_name']);
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
        if (($model = Users::findOne($id)) !== null) {
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
