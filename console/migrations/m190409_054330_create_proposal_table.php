<?php

use yii\db\Migration;

/**
 * Handles the creation of table `proposal`.
 */
class m190409_054330_create_proposal_table extends Migration
{

    
    public function safeUp()
    {
        $this->createTable('proposal', [
            'id' => $this->primaryKey(),
            'student_id' => $this->integer(),
            'proposal' => $this->string(),
            'date_submited' => $this->string(),
            'status' => $this->string(),
            'comment' => $this->string(),
        ]);

        $this->createIndex(
            'idx-proposal-student_id',
            'proposal',
            'student_id'
        );
        $this->addForeignKey(
            'fk-proposal-student_id',
            'proposal',
            'student_id',
            'personalinfo',
            'id',
            'CASCADE'

        );
    }

    public function safeDown()
    {
        $this->dropTable('proposal');
    }
}
