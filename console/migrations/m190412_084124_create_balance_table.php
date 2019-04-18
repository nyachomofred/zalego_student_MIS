<?php

use yii\db\Migration;

/**
 * Handles the creation of table `balance`.
 */
class m190412_084124_create_balance_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('balance', [
            'id' => $this->primaryKey(),
            'student_id' => $this->integer(),
            'required_amount' => $this->string(),
            'amount_to_pay' => $this->string(),
            'amount_paid' => $this->string(),
            'balance' => $this->string(),
        ]);
        $this->createIndex(
            'idx-balance-student_id',
            'balance',
            'student_id'
        );
        $this->addForeignKey(
            'fk-balance-student_id',
            'balance',
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
        $this->dropTable('balance');
    }
}
