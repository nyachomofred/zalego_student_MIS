<?php

use yii\db\Migration;

/**
 * Handles the creation of table `debit`.
 */
class m190412_084056_create_debit_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('debit', [
            'id' => $this->primaryKey(),
            'student_id' => $this->integer(),
            'required_amount' => $this->string(),
            'amount_pay' => $this->string(),

        ]);
        $this->createIndex(
            'idx-debit-student_id',
            'debit',
            'student_id'
        );
        $this->addForeignKey(
            'fk-debit-student_id',
            'debit',
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
        $this->dropTable('debit');
    }
}
