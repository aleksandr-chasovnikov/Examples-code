<?php
namespace frontend\controllers;
 
use frontend\components\Controller;
use Yii;
use yii\filters\VerbFilter;
 
class ShopController extends Controller
{
    public function behaviors()
    {
        return array_merge(parent::behaviors(), [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'add-in-cart' => ['post'],
                    'set-count' => ['post'],
                    'delete-from-cart' => ['post'],
                ],
            ],
        ]);
    }
 
    public function actionAddInCart()
    {
        $postData = Yii::$app->request->post();
        
        return json_encode([
            'success' => Yii::$app->cart->add($postData['product_id'], $postData['count']),
            'cartStatus' => Yii::$app->cart->status
        ]);
    }
 
    public function actionSetCount()
    {
        $postData = Yii::$app->request->post();
        
        return json_encode([
            'success' => Yii::$app->cart->setCount($postData['product_id'], $postData['count']),
            'cartStatus' => Yii::$app->cart->status
        ]);
    }
 
    public function actionDeleteFromCart()
    {
        $postData = Yii::$app->request->post();
        
        return json_encode([
            'success' => Yii::$app->cart->delete($postData['product_id']),
            'cartStatus' => Yii::$app->cart->status
        ]);
    }
}