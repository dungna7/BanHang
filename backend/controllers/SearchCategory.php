<?php

namespace backend\controllers;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Category;

/**
 * SearchCategory represents the model behind the search form about `app\models\Category`.
 */
class SearchCategory extends Category
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'ChildCategoryId'], 'integer'],
            [['CategoryName', 'Discription'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Category::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'ChildCategoryId' => $this->ChildCategoryId,
        ]);

        $query->andFilterWhere(['like', 'CategoryName', $this->CategoryName])
            ->andFilterWhere(['like', 'Discription', $this->Discription]);

        return $dataProvider;
    }
}
