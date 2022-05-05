<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%candidates}}`.
 */
class m220505_155646_create_candidates_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%candidates}}', [
            'id' => $this->primaryKey(),
            'created_at' => $this->integer(15)->notNull()->defaultValue(0),
            'name' => $this->string(255)->notNull()->defaultValue(''),
            'birth_date' => $this->integer(15)->notNull()->defaultValue(0),
            'years_experience' => $this->integer(2)->notNull()->defaultValue(0),
            'frameworks' => $this->string(255)->notNull()->defaultValue(''),
            'resume' => $this->string(255)->notNull()->defaultValue(''),
            'comment' => $this->string(1000)->notNull()->defaultValue(''),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%candidates}}');
    }
}
