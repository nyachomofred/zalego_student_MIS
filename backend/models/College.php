<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "college".
 *
 * @property int $id
 * @property int $student_id
 * @property string $school_name
 * @property string $course
 * @property string $date_attended
 *
 * @property Personalinfo $student
 */
class College extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'college';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id'], 'integer'],
            [['student_id'], 'unique'],

            [['school_name'], 'string','min'=>3,'max'=>40],
            [['school_name'], 'filter','filter'=>'ucfirst'],
            [['school_name'], 'match' ,'pattern' => '/^[a-zA-Z\s]+$/','message'=>'only character string ia allowed'],
             
            [['course'], 'string','min'=>3,'max'=>40],
            [['course'], 'filter','filter'=>'ucfirst'],
            [['course'], 'match' ,'pattern' => '/^[a-zA-Z\s]+$/','message'=>'only character string ia allowed'],
             

            [['school_name', 'course', 'date_attended'], 'string', 'max' => 255],
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
            'school_name' => 'School Name',
            'course' => 'Course',
            'date_attended' => 'Date Attended',
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
