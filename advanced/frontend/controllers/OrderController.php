<?php

namespace frontend\controllers;

use frontend\models\OrderGoods;
use Yii;
use frontend\models\OrderInfo;
use yii\db\Query;
use yii\data\Pagination;
class OrderController extends UserbaseController
{
    public function actionIndex()
    {
        $this->verify();
        //以user_id显示
//         $uid = \Yii::$app->session->get("__id");
//         $count = (new Query())->from(\Yii::$app->db->tablePrefix.'order_goods')->count();
        
        //订单列表
        $query = (new Query())
        ->from(Yii::$app->db->tablePrefix . 'order_goods og')
        ->leftJoin(Yii::$app->db->tablePrefix . 'order_info oi', 'og.order_id = oi.order_id')
        ->where([
            'user_id' => \Yii::$app->user->identity->user_id
        ])
        ->orderBy("oi.order_id DESC");
        //总的订单数
        $count = $query->count();
//         var_dump($count);
        $row = $query->all();
        
        $pages = new Pagination(['totalCount'=>$count, 'pageSize' => '3']);
        
        $list = $query->offset($pages->offset)->limit($pages->limit)->all();
//         var_dump($list);
//         die();
        
        return $this->render('index', [
            'list' => $list,
            'pages' => $pages,
        ]);
        
        
        
        /**
        $OrderGoodsModel = new OrderGoods();
//         $goodsList = $OrderGoodsModel->find()->all();
        $OrderInfoModel = new OrderInfo();
        $query = (new Query())
        ->select("g.*, i.shipping_status, i.order_status, i.pay_status")
        ->from(\Yii::$app->db->tablePrefix.'order_goods g')
        ->leftJoin(\Yii::$app->db->tablePrefix.'order_info i', 'g.order_id = i.order_id')
        ->all();
        if(!$query) {
            return; 
        }
        switch($query[0]['shipping_status']) {
            case 0:
                $messages = "未发货";
                break;
            case 1:
                $messages = "已发货";
                break;
            case 2:
                $messages = "已取消";
                break;
            case 3:
                $messages = "备货中";
                break;
            default:
                break;    
        }
        switch($query[0]['order_status']) {
            case 0:
                $messageo = "未确认";
                break;
            case 1:
                $messageo = "已确认";
                break;
            case 2:
                $messageo = "已取消";
                break;
            case 3:
                $messageo = "无效";
                break;
            case 4:
                $messageo = "退货";
                break;
            default:
                break;
        }
        switch($query[0]['pay_status']) {
            case 0:
                $messagep = "未付款";
                break;
            case 1:
                $messagep = "已付款中";
                break;
            case 2:
                $messagep = "已付款";
                break;
            default:
                break;
        }
        return $this->render('index',[
            'query' => $query,
            'messageo' => $messageo,
            'messagep' => $messagep,
            'messages' => $messages
        ]);
        */
    }
    
    public function actionCancel() {
        $id = \Yii::$app->request->post("id");
        if(!$id) {
            return;
        }
        $OrderGoods = new OrderGoods();
        $row = $OrderGoods->deleteAll('rec_id = :id', [':id' => $id]);
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        return [
            'status' => 2000,
            'message' => '取消订单成功！'
        ];
    }
    
}
