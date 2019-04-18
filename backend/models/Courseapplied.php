<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "courseapplied".
 *
 * @property int $id
 * @property int $student_id
 * @property string $course
 *
 * @property Personalinfo $student
 */
class Courseapplied extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'courseapplied';
    }

    public function rules()
    {
        return [
            [['student_id'], 'integer'],
            [['student_id'], 'unique'],

            [['course'], 'required',],
            [['student_id'], 'exist', 'skipOnError' => true, 'targetClass' => Personalinfo::className(), 'targetAttribute' => ['student_id' => 'id']],
        ];
    }

    
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'student_id' => 'Student ID',
            'course' => 'Course',
        ];
    }

    public function getStudent()
    {
        return $this->hasOne(Personalinfo::className(), ['id' => 'student_id']);
    }
}
