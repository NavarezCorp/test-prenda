<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "auction_schedule".
 *
 * @property integer $id
 * @property string $datetime_added
 * @property integer $user_id
 * @property string $date
 */
class AuctionSchedule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'auction_schedule';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['datetime_added', 'date'], 'safe'],
            [['user_id'], 'required'],
            [['user_id'], 'integer'],
            [['user_id'], 'unique']
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
            'user_id' => 'User ID',
            'date' => 'Date',
        ];
    }
}
