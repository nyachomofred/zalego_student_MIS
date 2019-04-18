<?php

use yii\db\Migration;

/**
 * Handles the creation of table `project`.
 */
class m190409_055535_create_project_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('project', [
            'id' => $this->primaryKey(),
            'student_id' => $this->integer(),
            'project_name' => $this->string(),
            'description' => $this->string(),
            'documentation' => $this->string(),
            'upload' => $this->string(),
            'date_uploaded' => $this->string(),
            'status' => $this->string(),
            'comment' => $this->string(),
        ]);

        $this->createIndex(
            'idx-project-student_id',
            'project',
            'student_id'
        );
        $this->addForeignKey(
            'fk-project-student_id',
            'project',
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
        $this->dropTable('project');
    }
}
