<?php

use yii\db\Migration;

/**
 * Handles the creation of table `courseapplied`.
 */
class m190408_090204_create_courseapplied_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('courseapplied', [
            'id' => $this->primaryKey(),
            'student_id' => $this->integer(),
            'course' => $this->string(),

        ]);

        $this->createIndex(
            'idx-courseapplied-student_id',
            'courseapplied',
            'student_id'
        );
        $this->addForeignKey(
            'fk-courseapplied-student_id',
            'courseapplied',
            'student_id',
            'personalinfo',
            'id',
            'CASCADE'
        );

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('courseapplied');
    }
}
