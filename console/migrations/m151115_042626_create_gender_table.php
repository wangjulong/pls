<?php

use yii\db\Schema;
use yii\db\Migration;

class m151115_042626_create_gender_table extends Migration
{
    public function up()
    {
        $this->createTable('gender', [
            'id' => $this->smallInteger(6),
            'gender_name' => $this->string(45)->notNull(),
        ]);
        $this->alterColumn('gender', 'id', Schema::TYPE_SMALLINT . '(6)' . ' primary key auto_increment unique');
    }

    public function down()
    {
        $this->dropTable('gender');
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
