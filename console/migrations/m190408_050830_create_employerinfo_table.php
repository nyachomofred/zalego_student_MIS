<?php

use yii\db\Migration;

/**
 * Handles the creation of table `employerinfo`.
 */
class m190408_050830_create_employerinfo_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('employerinfo', [
            'id' => $this->primaryKey(),
             'student_id'=>$this->integer(),
            'employer_title' => $this->string(),
            'employer_name' => $this->string(),
            'campany_name' => $this->string(),
            'employer_phone' => $this->string(),
            'employer_email' => $this->string(),
        ]);
        $this->createIndex(
            'idx-employerinfo-student_id',
            'employerinfo',
            'student_id'
        );
        $this->addForeignKey(
            'fk-employerinfo-student_id',
            'employerinfo',
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
        $this->dropTable('employerinfo');
    }
}
