<?php

use yii\db\Schema;
use yii\db\Migration;

class m151115_031453_create_role_table extends Migration
{
    public function up()
    {
        $this->createTable('role', [
            'id' => $this->primaryKey(6),
            'role_name' => $this->string(45)->notNull(),
            'role_value' => $this->integer(11)->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('role');
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
