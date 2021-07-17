<?php
use yii\db\Migration;

class m210716_143750_create_post_table extends Migration
{
    public function up()
    {
        $this->createTable('{{%post_for_behavior}}',	[
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'content_markdown' => $this->text(),
            'content_html' => $this->text(),
        ]);
    }
    public function down()
    {
        $this->dropTable('{{%post_for_behavior}}');
    }
}
