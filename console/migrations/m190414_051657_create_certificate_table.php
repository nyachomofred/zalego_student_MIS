<?php

use yii\db\Migration;

/**
 * Handles the creation of table `certificate`.
 */
class m190414_051657_create_certificate_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('certificate', [
            'id' => $this->primaryKey(),
            'student_id'=>$this->integer(),
            'certificate_no'=>$this->string(),
            'status'=>$this->string(),
             'date_collected'=>$this->string(),
        ]);
        $this->createIndex(
            'idx-certificate-student_id',
            'certificate',
            'student_id'
        );
        $this->addForeignKey(
            'fk-certificate-student_id',
            'certificate',
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
        $this->dropTable('certificate');
    }
}
