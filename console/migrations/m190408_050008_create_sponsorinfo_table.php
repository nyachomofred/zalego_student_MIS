<?php

use yii\db\Migration;

/**
 * Handles the creation of table `sponsorinfo`.
 */
class m190408_050008_create_sponsorinfo_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('sponsorinfo', [
            'id' => $this->primaryKey(),
            'student_id' => $this->integer(),
            'sponsor' => $this->string(),
            'sponsor_title' => $this->string(),
            'sponsor_name' => $this->string(),
            'sponsor_address' => $this->string(),
            'sponsor_phone' => $this->string(),
            'sponsor_email' => $this->string(),
            
           
        ]);
        $this->createIndex(
            'idx-sponsorinfo-student_id',
            'sponsorinfo',
            'student_id'
        );
        $this->addForeignKey(
            'fk-sponsorinfo-student_id',
            'sponsorinfo',
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
        $this->dropTable('sponsorinfo');
    }
}
