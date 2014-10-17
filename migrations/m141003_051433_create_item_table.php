<?php

use yii\db\Schema;
use yii\db\Migration;

class m141003_051433_create_item_table extends Migration
{
    public function up()
    {
        $this->createTable('item', [
            'id'=>Schema::TYPE_PK,
            'datetime_added'=>Schema::TYPE_TIMESTAMP,
            'user_id'=>Schema::TYPE_INTEGER . ' NOT NULL',
            'auction_schedule_id'=>Schema::TYPE_INTEGER . ' NOT NULL',
            'ticket_no'=>Schema::TYPE_INTEGER . ' NOT NULL',
            'category_id'=>Schema::TYPE_INTEGER . ' NOT NULL',
            'type_id'=>Schema::TYPE_INTEGER . ' NOT NULL',
            'price'=>Schema::TYPE_INTEGER . ' NOT NULL',
            'description'=>Schema::TYPE_STRING,
            'is_sold'=>Schema::TYPE_BOOLEAN . ' DEFAULT 0'
        ]);

        $this->createIndex('user_id', 'item', 'user_id');
        $this->createIndex('auction_schedule_id', 'item', 'auction_schedule_id');
        $this->createIndex('category_id', 'item', 'category_id');
        $this->createIndex('type_id', 'item', 'type_id');
    }

    public function down()
    {
        echo "m141003_051433_create_item_table cannot be reverted.\n";

        return false;
    }
}
