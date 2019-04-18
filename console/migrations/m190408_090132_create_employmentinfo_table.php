<?php

use yii\db\Migration;

/**
 * Handles the creation of table `employmentinfo`.
 */
class m190408_090132_create_employmentinfo_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('employmentinfo', [
            'id' => $this->primaryKey(),
            'student_id' => $this->integer(),
            'employer' => $this->string(),
            'job_description' => $this->string(),
            'date_of_employment' => $this->string(),
        ]);
        $this->createIndex(
            'idx-employmentinfo-student_id',
            'employmentinfo',
            'student_id'
        );
        $this->addForeignKey(
            'fk-employmentinfo-student_id',
            'employmentinfo',
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
        $this->dropTable('employmentinfo');
    }
}
