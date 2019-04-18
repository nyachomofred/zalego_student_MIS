<?php

use yii\db\Migration;

/**
 * Handles the creation of table `campus`.
 */
class m190405_131020_create_campus_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('campus', [
            'id' => $this->primaryKey(),
            'campus_code'=>$this->string(),
            'campus_name'=>$this->string(),
            'campus_location'=>$this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('campus');
    }
}
