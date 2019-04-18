<?php

use yii\db\Migration;

/**
 * Handles the creation of table `personlinfo`.
 */
class m190407_182753_create_personlinfo_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('personalinfo', [
            'id' => $this->primaryKey(),
            'course_period' => $this->string(),
            'payment_information' => $this->string(),
            'student_id' => $this->string(),
            'full_name' => $this->string(),
            'date_of_birth' => $this->string(),
            'gender' => $this->string(),
            'id_no' => $this->string(),
            'email' => $this->string(),
            'phone' => $this->string(),
            'alternate_phone' => $this->string(),
            'citizenship' => $this->string(),
            'marital_status' => $this->string(),
            'future_career' => $this->string(),
            'physical_address' => $this->string(),
            'religion' => $this->string(),
            'medical_condition' => $this->string(),
            'campus' => $this->string(),
            'intake' => $this->string(),
            'level' => $this->string(),



        ]);
    }

    public function safeDown()
    {
        $this->dropTable('personlinfo');
    }
}
