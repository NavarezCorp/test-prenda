<?php

namespace app\models;

use Yii;
use app\models\Category;
use app\models\Type;

/**
 * This is the model class for table "item".
 *
 * @property integer $id
 * @property string $datetime_added
 * @property integer $user_id
 * @property integer $auction_schedule_id
 * @property integer $ticket_no
 * @property integer $category_id
 * @property integer $type_id
 * @property integer $price
 * @property string $description
 * @property integer $is_sold
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['datetime_added'], 'safe'],
            [['user_id', 'auction_schedule_id', 'ticket_no', 'category_id', 'type_id', 'price'], 'required'],
            [['user_id', 'auction_schedule_id', 'ticket_no', 'category_id', 'type_id', 'price', 'is_sold'], 'integer'],
            [['description'], 'string', 'max' => 255]
            //[['user_id'], 'unique'],
            //[['auction_schedule_id'], 'unique'],
            //[['category_id'], 'unique'],
            //[['type_id'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'datetime_added' => 'Datetime Added',
            'user_id' => 'User',
            'auction_schedule_id' => 'Auction Schedule',
            'ticket_no' => 'Ticket No',
            'category_id' => 'Category',
            'type_id' => 'Type',
            'price' => 'Price',
            'description' => 'Description',
            'is_sold' => 'Is Sold',
        ];
    }

    public function getCategory(){
        return $this->hasOne(Category::className(), ['id'=>'category_id']);
    }

    public function getType(){
        return $this->hasOne(Type::className(), ['id'=>'type_id']);
    }
}
