<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "project".
 *
 * @property int $id
 * @property int $student_id
 * @property string $project_name
 * @property string $description
 * @property string $documentation
 * @property string $upload
 * @property string $date_uploaded
 * @property string $status
 * @property string $comment
 *
 * @property Personalinfo $student
 */
class Project extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'project';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id'], 'integer'],
            [['project_name', 'description', 'documentation', 'upload', 'date_uploaded', 'status', 'comment'], 'string', 'max' => 255],
            [['student_id'], 'exist', 'skipOnError' => true, 'targetClass' => Personalinfo::className(), 'targetAttribute' => ['student_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'student_id' => 'Student ID',
            'project_name' => 'Project Name',
            'description' => 'Description',
            'documentation' => 'Documentation',
            'upload' => 'Upload',
            'date_uploaded' => 'Date Uploaded',
            'status' => 'Status',
            'comment' => 'Comment',
            'globalSearch'=>'',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStudent()
    {
        return $this->hasOne(Personalinfo::className(), ['id' => 'student_id']);
    }
}
