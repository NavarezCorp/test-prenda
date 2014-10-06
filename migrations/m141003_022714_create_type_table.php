<?php

use yii\db\Schema;
use yii\db\Migration;

class m141003_022714_create_type_table extends Migration
{
    public function up()
    {
        $this->createTable('type', [
            'id'=>Schema::TYPE_PK,
            'datetime_added'=>Schema::TYPE_TIMESTAMP,
            'category_id'=>Schema::TYPE_INTEGER . ' NOT NULL',
            'name'=>Schema::TYPE_STRING . ' NOT NULL',
            'description'=>Schema::TYPE_STRING
        ]);

        $this->createIndex('category_id', 'type', 'category_id');

        $this->insert('type', ['category_id'=>'1', 'name'=>'Stardust_Blue Double Bracelet', 'description'=>'Stardust_Blue Double Bracelet']);
        $this->insert('type', ['category_id'=>'1', 'name'=>'Bolt Micro Bracelet', 'description'=>'Bolt Micro Bracelet']);
        $this->insert('type', ['category_id'=>'1', 'name'=>'Slake Burgundy Bracelet', 'description'=>'Slake Burgundy Bracelet']);

        $this->insert('type', ['category_id'=>'2', 'name'=>'Blanche Brooch', 'description'=>'Blanche Brooch']);
        $this->insert('type', ['category_id'=>'2', 'name'=>'Bloom Brooch', 'description'=>'Bloom Brooch']);
        $this->insert('type', ['category_id'=>'2', 'name'=>'Milena Brooch', 'description'=>'Milena Brooch']);

        $this->insert('type', ['category_id'=>'3', 'name'=>'Ball Pavé Cuff Links', 'description'=>'Ball Pavé Cuff Links']);
        $this->insert('type', ['category_id'=>'3', 'name'=>'Blaze Cuff Links', 'description'=>'Blaze Cuff Links']);
        $this->insert('type', ['category_id'=>'3', 'name'=>'Bengal Cuff Links', 'description'=>'Bengal Cuff Links']);

        $this->insert('type', ['category_id'=>'4', 'name'=>'Babylon Pierced Earrings', 'description'=>'Babylon Pierced Earrings']);
        $this->insert('type', ['category_id'=>'4', 'name'=>'Stone Stud Pierced Earrings', 'description'=>'Stone Stud Pierced Earrings']);
        $this->insert('type', ['category_id'=>'4', 'name'=>'Azalea Pierced Earrings', 'description'=>'Azalea Pierced Earrings']);

        $this->insert('type', ['category_id'=>'5', 'name'=>'Blow Short Necklace', 'description'=>'Blow Short Necklace']);
        $this->insert('type', ['category_id'=>'5', 'name'=>'Emotion Necklace', 'description'=>'Emotion Necklace']);
        $this->insert('type', ['category_id'=>'5', 'name'=>'Blow Long Necklace', 'description'=>'Blow Long Necklace']);

        $this->insert('type', ['category_id'=>'6', 'name'=>'Bolt Pendant', 'description'=>'Bolt Pendant']);
        $this->insert('type', ['category_id'=>'6', 'name'=>'Pebble Pendant', 'description'=>'Pebble Pendant']);
        $this->insert('type', ['category_id'=>'6', 'name'=>'Bolt Micro Pendant', 'description'=>'Bolt Micro Pendant']);

        $this->insert('type', ['category_id'=>'7', 'name'=>'Stone Ring', 'description'=>'Stone Ring']);
        $this->insert('type', ['category_id'=>'7', 'name'=>'Spiral Mini Ring', 'description'=>'Spiral Mini Ring']);
        $this->insert('type', ['category_id'=>'7', 'name'=>'Blanche Ring', 'description'=>'Blanche Ring']);

        $this->insert('type', ['category_id'=>'8', 'name'=>'Tasha Heart Key Set', 'description'=>'Tasha Heart Key Set']);
        $this->insert('type', ['category_id'=>'8', 'name'=>'Below Short Set', 'description'=>'Below Short Set']);
        $this->insert('type', ['category_id'=>'8', 'name'=>'Tennis Set', 'description'=>'Tennis Set']);
    }

    public function down()
    {
        echo "m141003_022714_create_type_table cannot be reverted.\n";

        return false;
    }
}
