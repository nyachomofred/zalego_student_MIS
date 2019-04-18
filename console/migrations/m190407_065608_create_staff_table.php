<?php

use yii\db\Migration;

/**
 * Handles the creation of table `staff`.
 */
class m190407_065608_create_staff_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('staff', [
            'id' => $this->primaryKey(),
            'passpot' => $this->string(),
            'staff_id' => $this->string(),
            'name' => $this->string(),
            'phone' => $this->string(),
            'national_id' => $this->string(),
            'gender' => $this->string(),
            'role' => $this->string(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('staff');
    }
}
