<?php
/**
 * Created by PhpStorm.
 * User: DungNA
 * Date: 4/12/2017
 * Time: 3:10 PM
 */
namespace frontend\controllers;
use Yii;
use yii\web\Controller;

Class HelloController extends Controller
{
    public function actionIndex()
    {
        Yii::$app->view->title = 'Thao tác với model - Yii2 Framework';

        //Khởi tạo model
        $model = new \common\models\Users();
        $listUsers = $model->getListUsers();
        return $this->render('index',['listUsers' => $listUsers]);
    }
}