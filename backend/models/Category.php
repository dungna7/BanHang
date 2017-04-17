<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tblcategory".
 *
 * @property integer $id
 * @property string $CategoryName
 * @property integer $ChildCategoryId
 * @property string $Discription
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tblcategory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CategoryName', 'ChildCategoryId', 'Discription'], 'required'],
            [['ChildCategoryId'], 'integer'],
            [['CategoryName'], 'string', 'max' => 50],
            [['Discription'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'CategoryName' => 'Category Name',
            'ChildCategoryId' => 'Child Category ID',
            'Discription' => 'Discription',
        ];
    }
}
