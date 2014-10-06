<?php

use yii\db\Schema;
use yii\db\Migration;

class m141003_022738_create_image_table extends Migration
{
    public function up()
    {
        $this->createTable('image', [
            'id'=>Schema::TYPE_PK,
            'datetime_added'=>Schema::TYPE_TIMESTAMP,
            'item_id'=>Schema::TYPE_INTEGER . ' NOT NULL',
            'url'=>Schema::TYPE_STRING
        ]);

        $this->createIndex('item_id', 'image', 'item_id');
    }

    public function down()
    {
        echo "m141003_022738_create_image_table cannot be reverted.\n";

        return false;
    }
}
