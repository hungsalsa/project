<?php

namespace backend\modules\product\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\product\models\Product;

/**
 * ProductSearch represents the model behind the search form about `backend\modules\product\models\Product`.
 */
class ProductSearch extends Product
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['proID', 'price', 'saleOf', 'priceSale', 'quanlity', 'evaluation', 'group_ID', 'cateID', 'suppliresID', 'userID', 'status', 'created_at', 'updated_at'], 'integer'],
            [['productName', 'startSale', 'endSale', 'size', 'color', 'image', 'keyword', 'description', 'content'], 'safe'],
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
            'proID' => $this->proID,
            'price' => $this->price,
            'saleOf' => $this->saleOf,
            'startSale' => $this->startSale,
            'endSale' => $this->endSale,
            'priceSale' => $this->priceSale,
            'quanlity' => $this->quanlity,
            'evaluation' => $this->evaluation,
            'group_ID' => $this->group_ID,
            'cateID' => $this->cateID,
            'suppliresID' => $this->suppliresID,
            'userID' => $this->userID,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'productName', $this->productName])
            ->andFilterWhere(['like', 'size', $this->size])
            ->andFilterWhere(['like', 'color', $this->color])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'keyword', $this->keyword])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'content', $this->content]);

        return $dataProvider;
    }
}
