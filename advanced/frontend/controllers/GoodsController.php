<?php

namespace frontend\controllers;
use Yii;
use frontend\models\Goods;
use yii\db\Query;
use frontend\models\Category;

class GoodsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $this->render('index');
    }
    
    /**
     * 商品详情
     */
    public function actionItem() {
        $id = Yii::$app->request->get("id");
        if($id < 0) {
           return $this->goHome();
        }
        $goods = new Goods();
        $itemInfo = $goods->findById($id);
        if(!$itemInfo) {
            $this->goHome();
        }
        $query = (new Query())
        ->from(Yii::$app->db->tablePrefix . 'goods_gallery l')
        ->leftJoin(Yii::$app->db->tablePrefix . 'goods g', 'g.goods_id = l.goods_id')->where([
            'g.goods_id' => $id,
            'is_delete' => 0
        ])->all();
        $row = (new Query())->from(Yii::$app->db->tablePrefix . 'goods')->where([
            'goods_id' => $id
        ])->all();
        return $this->render('index',[
            'itemInfo'=>$itemInfo,
            'row' => $row,
            'query'=>$query,
        ]);
        
    }
    

    public function actionAdd() {
        $id = Yii::$app->request->get("id");
        if($id < 0) {
            return $this->goHome();
        }
        $cart = (new Query())
//         ->select('goods_id','goods_sn', 'goods_name', 'goods_number', 'market_price', 'goods_img', 'goods_thumb', 'add_time')
        ->from(Yii::$app->db->tablePrefix.'goods')
        ->where([
            'goods_id'=>$id
        ])->all();
        if(!$cart) {
            $this->goHome();
        }
        return $cart;
    }
    

}
