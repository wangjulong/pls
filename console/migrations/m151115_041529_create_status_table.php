<?php

use yii\db\Schema;
use yii\db\Migration;

class m151115_041529_create_status_table extends Migration
{
    public function up()
    {
        $this->createTable('status', [
            'id' => $this->smallInteger(6),
            'status_name' => $this->string(45)->notNull(),
            'status_value' => $this->smallInteger(6)->notNull(),
        ]);
        $this->alterColumn('status', 'id', Schema::TYPE_SMALLINT . '(6)' . ' primary key auto_increment');
    }

    public function down()
    {
        $this->dropTable('status');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
