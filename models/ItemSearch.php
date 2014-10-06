<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Item;

/**
 * ItemSearch represents the model behind the search form about `app\models\Item`.
 */
class ItemSearch extends Item
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'auction_schedule_id', 'ticket_no', 'category_id', 'type_id', 'price', 'image_id', 'is_sold'], 'integer'],
            [['datetime_added', 'description', 'category'], 'safe'],
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
        $query = Item::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'datetime_added' => $this->datetime_added,
            'user_id' => $this->user_id,
            'auction_schedule_id' => $this->auction_schedule_id,
            'ticket_no' => $this->ticket_no,
            'category_id' => $this->category_id,
            'type_id' => $this->type_id,
            'price' => $this->price,
            'is_sold' => $this->is_sold,
        ]);

        $query->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
