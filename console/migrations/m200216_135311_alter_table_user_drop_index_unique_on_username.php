<?php

use yii\db\Migration;

/**
 * Class m200216_135311_alter_table_user_drop_index_unique_on_username
 */
class m200216_135311_alter_table_user_drop_index_unique_on_username extends Migration
{
    public function safeUp()
    {
        $this->dropIndex('username', 'user');
    }

    public function safeDown()
    {
        $this->createIndex('username', 'user', 'username', $unique = true);
    }
}
