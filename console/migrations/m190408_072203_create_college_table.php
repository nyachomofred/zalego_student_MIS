<?php

use yii\db\Migration;

/**
 * Handles the creation of table `college`.
 */
class m190408_072203_create_college_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('college', [
            'id' => $this->primaryKey(),
            'student_id' => $this->integer(),
            'school_name' => $this->string(),
            'course' => $this->string(),
            'date_attended' => $this->string(),

        ]);
        $this->createIndex(
            'idx-college-student_id',
            'college',
            'student_id'
        );
        $this->addForeignKey(
            'fk-college-student_id',
            'college',
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
        $this->dropTable('college');
    }
}
