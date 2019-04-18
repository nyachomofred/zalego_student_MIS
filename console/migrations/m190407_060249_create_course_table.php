<?php

use yii\db\Migration;

/**
 * Handles the creation of table `course`.
 */
class m190407_060249_create_course_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('course', [
            'id' => $this->primaryKey(),
            'course_code' => $this->string(),
            'course_name' => $this->string(),
            'course_level' => $this->string(),
            'course_duration' => $this->string(),
            'course_description' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('course');
    }
}
