<?php

use yii\db\Schema;
use yii\db\Migration;

class m141003_022700_create_province_table extends Migration
{
    public function up()
    {
        $this->createTable('province', [
            'id'=>Schema::TYPE_PK,
            'datetime_added'=>Schema::TYPE_TIMESTAMP,
            'name'=>Schema::TYPE_STRING . ' NOT NULL'
        ]);

        $this->insert('province', ['name'=>'Abra']);
        $this->insert('province', ['name'=>'Agusan del Norte']);
        $this->insert('province', ['name'=>'Agusan del Sur']);
        $this->insert('province', ['name'=>'Aklan']);
        $this->insert('province', ['name'=>'Albay']);
        $this->insert('province', ['name'=>'Antique']);
        $this->insert('province', ['name'=>'Apayao']);
        $this->insert('province', ['name'=>'Aurora']);
        $this->insert('province', ['name'=>'Basilan']);
        $this->insert('province', ['name'=>'Bataan']);
        $this->insert('province', ['name'=>'Batanes']);
        $this->insert('province', ['name'=>'Batangas']);
        $this->insert('province', ['name'=>'Benguet']);
        $this->insert('province', ['name'=>'Biliran']);
        $this->insert('province', ['name'=>'Bohol']);
        $this->insert('province', ['name'=>'Bukidnon']);
        $this->insert('province', ['name'=>'Bulacan']);
        $this->insert('province', ['name'=>'Cagayan']);
        $this->insert('province', ['name'=>'Camarines Norte']);
        $this->insert('province', ['name'=>'Camarines Sur']);
        $this->insert('province', ['name'=>'Camiguin']);
        $this->insert('province', ['name'=>'Capiz']);
        $this->insert('province', ['name'=>'Catanduanes']);
        $this->insert('province', ['name'=>'Cavite']);
        $this->insert('province', ['name'=>'Cebu']);
        $this->insert('province', ['name'=>'Compostela Valley']);
        $this->insert('province', ['name'=>'Davao del Norte']);
        $this->insert('province', ['name'=>'Davao del Sur']);
        $this->insert('province', ['name'=>'Davao Occidental']);
        $this->insert('province', ['name'=>'Davao Oriental']);
        $this->insert('province', ['name'=>'Dinagat Islands']);
        $this->insert('province', ['name'=>'Eastern Samar']);
        $this->insert('province', ['name'=>'Guimaras']);
        $this->insert('province', ['name'=>'Ifugao']);
        $this->insert('province', ['name'=>'Ilocos Norte']);
        $this->insert('province', ['name'=>'Ilocos Sur']);
        $this->insert('province', ['name'=>'Iloilo']);
        $this->insert('province', ['name'=>'Isabela']);
        $this->insert('province', ['name'=>'Kalinga']);
        $this->insert('province', ['name'=>'La Union']);
        $this->insert('province', ['name'=>'Laguna']);
        $this->insert('province', ['name'=>'Lanao del Norte']);
        $this->insert('province', ['name'=>'Lanao del Sur']);
        $this->insert('province', ['name'=>'Leyte']);
        $this->insert('province', ['name'=>'Maguindanao']);
        $this->insert('province', ['name'=>'Marinduque']);
        $this->insert('province', ['name'=>'Masbate']);
        $this->insert('province', ['name'=>'Misamis Occidental']);
        $this->insert('province', ['name'=>'Misamis Oriental']);
        $this->insert('province', ['name'=>'Mountain Province']);
        $this->insert('province', ['name'=>'Negros Occidental']);
        $this->insert('province', ['name'=>'Negros Oriental']);
        $this->insert('province', ['name'=>'North Cotabato']);
        $this->insert('province', ['name'=>'Northern Samar']);
        $this->insert('province', ['name'=>'Nueva Ecija']);
        $this->insert('province', ['name'=>'Nueva Vizcaya']);
        $this->insert('province', ['name'=>'Occidental Mindoro']);
        $this->insert('province', ['name'=>'Oriental Mindoro']);
        $this->insert('province', ['name'=>'Palawan']);
        $this->insert('province', ['name'=>'Pampanga']);
        $this->insert('province', ['name'=>'Pangasinan']);
        $this->insert('province', ['name'=>'Quezon']);
        $this->insert('province', ['name'=>'Quirino']);
        $this->insert('province', ['name'=>'Rizal']);
        $this->insert('province', ['name'=>'Romblon']);
        $this->insert('province', ['name'=>'Samar']);
        $this->insert('province', ['name'=>'Sarangani']);
        $this->insert('province', ['name'=>'Siquijor']);
        $this->insert('province', ['name'=>'Sorsogon']);
        $this->insert('province', ['name'=>'South Cotabato']);
        $this->insert('province', ['name'=>'Southern Leyte']);
        $this->insert('province', ['name'=>'Sultan Kudarat']);
        $this->insert('province', ['name'=>'Sulu']);
        $this->insert('province', ['name'=>'Surigao del Norte']);
        $this->insert('province', ['name'=>'Surigao del Sur']);
        $this->insert('province', ['name'=>'Tarlac']);
        $this->insert('province', ['name'=>'Tawi-Tawi']);
        $this->insert('province', ['name'=>'Zambales']);
        $this->insert('province', ['name'=>'Zamboanga del Norte']);
        $this->insert('province', ['name'=>'Zamboanga del Sur']);
        $this->insert('province', ['name'=>'Zamboanga Sibugay']);
        $this->insert('province', ['name'=>'Metro Manila']);
    }

    public function down()
    {
        echo "m141003_022700_create_province_table cannot be reverted.\n";

        return false;
    }
}
