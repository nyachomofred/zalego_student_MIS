<?php

use yii\db\Migration;

/**
 * Handles the creation of table `credit`.
 */
class m190412_084029_create_credit_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('credit', [
            'id' => $this->primaryKey(),
            'student_id'=>$this->integer(),
            'amount_paid'=>$this->string(),
            'payment_mode'=>$this->string(),
            'reference_no'=>$this->string(),
            'date_paid'=>$this->string(),

        ]);
        $this->createIndex(
            'idx-credit-student_id',
            'credit',
            'student_id'
        );
        $this->addForeignKey(
            'fk-credit-student_id',
            'credit',
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
        $this->dropTable('credit');
    }
}
