<?php

use yii\db\Migration;

/**
 * Class m191124_090448_alter_user_table
 */
class m191124_090448_alter_user_table extends Migration
{
    public function up()
    {
        $this->addColumn('{{%user}}', 'about', $this->text());
        $this->addColumn('{{%user}}', 'type', $this->integer(3));
        $this->addColumn('{{%user}}', 'nickname', $this->string(70));
        $this->addColumn('{{%user}}', 'picture', $this->string());
    }

    public function down()
    {
        $this->dropColumn('{{%user}}', 'picture');
        $this->dropColumn('{{%user}}', 'nickname');
        $this->dropColumn('{{%user}}', 'type');
        $this->dropColumn('{{%user}}', 'about');    
    }
}
