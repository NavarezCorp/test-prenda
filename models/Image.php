<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "image".
 *
 * @property integer $id
 * @property string $datetime_added
 * @property integer $item_id
 * @property string $url
 */
class Image extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'image';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['datetime_added'], 'safe'],
            [['item_id'], 'required'],
            [['item_id'], 'integer'],
            [['url'], 'string', 'max' => 255],
            [['item_id'], 'unique']
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
            'item_id' => 'Item ID',
            'url' => 'Url',
        ];
    }
}
