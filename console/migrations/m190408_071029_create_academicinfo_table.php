<?php

use yii\db\Migration;

/**
 * Handles the creation of table `academicinfo`.
 */
class m190408_071029_create_academicinfo_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('academicinfo', [
            'id' => $this->primaryKey(),
            'student_id' => $this->integer(),
            'school_name' => $this->string(),
            'type_of_school' => $this->string(),
            'school_address' => $this->string(),
            'city_or_town' => $this->string(),
            'Year_of_completion' => $this->string(),
            'currently_enrolled_in_school' => $this->string(),
        ]);
        $this->createIndex(
            'idx-academicinfo-student_id',
            'academicinfo',
            'student_id'
        );
        $this->addForeignKey(
            'fk-academicinfo-student_id',
            'academicinfo',
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
        $this->dropTable('academicinfo');
    }
}
