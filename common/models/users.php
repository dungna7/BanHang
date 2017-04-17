<?php
/**
 * Created by PhpStorm.
 * User: DungNA
 * Date: 4/12/2017
 * Time: 4:47 PM
 */

namespace common\models;

use Yii;


class Users extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'users';
    }
    public function getListUsers()
    {
        $query = new \yii\db\Query();
        $query->select('*')
            ->from(self::tableName())
            ->limit(10);
        return $query->createCommand()->queryAll();
    }

}