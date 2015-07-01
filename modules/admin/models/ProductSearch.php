<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Product;

/**
 * ProductSearch represents the model behind the search form about `app\modules\admin\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'image_id', 'brand_id', 'mark_id', 'typebeer_id', 'size_id', 'shop_id', 'price'], 'integer'],
            [['date', 'created'], 'safe'],
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
        $query = Product::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'image_id' => $this->image_id,
            'brand_id' => $this->brand_id,
            'mark_id' => $this->mark_id,
            'typebeer_id' => $this->typebeer_id,
            'size_id' => $this->size_id,
            'shop_id' => $this->shop_id,
            'price' => $this->price,
            'date' => $this->date,
            'created' => $this->created,
        ]);

        return $dataProvider;
    }
}
