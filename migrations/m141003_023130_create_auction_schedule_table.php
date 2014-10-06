<?php

use yii\db\Schema;
use yii\db\Migration;

class m141003_023130_create_auction_schedule_table extends Migration
{
    public function up()
    {
        $this->createTable('auction_schedule', [
            'id'=>Schema::TYPE_PK,
            'datetime_added'=>Schema::TYPE_TIMESTAMP,
            'user_id'=>Schema::TYPE_INTEGER . ' NOT NULL',
            'date'=>Schema::TYPE_DATETIME
        ]);

        $this->createIndex('user_id', 'auction_schedule', 'user_id');
    }

    public function down()
    {
        echo "m141003_023130_create_auction_schedule_table cannot be reverted.\n";

        return false;
    }
}
