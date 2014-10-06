<?php

use yii\db\Schema;
use yii\db\Migration;

class m141003_022726_create_category_table extends Migration
{
    public function up()
    {
        $this->createTable('category', [
            'id'=>Schema::TYPE_PK,
            'datetime_added'=>Schema::TYPE_TIMESTAMP,
            'name'=>Schema::TYPE_STRING . ' NOT NULL',
            'description'=>Schema::TYPE_STRING
        ]);

        $this->insert('category', ['name'=>'Bracelets', 'description'=>'Bracelets']);
        $this->insert('category', ['name'=>'Brooches', 'description'=>'Brooches']);
        $this->insert('category', ['name'=>'Cuff Links', 'description'=>'Cuff Links']);
        $this->insert('category', ['name'=>'Earrings', 'description'=>'Earrings']);
        $this->insert('category', ['name'=>'Necklaces', 'description'=>'Necklaces']);
        $this->insert('category', ['name'=>'Pendants', 'description'=>'Pendants']);
        $this->insert('category', ['name'=>'Rings', 'description'=>'Rings']);
        $this->insert('category', ['name'=>'Sets', 'description'=>'Sets']);
    }

    public function down()
    {
        echo "m141003_022726_create_category_table cannot be reverted.\n";

        return false;
    }
}
