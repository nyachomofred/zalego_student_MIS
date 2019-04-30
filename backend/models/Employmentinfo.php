<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "employmentinfo".
 *
 * @property int $id
 * @property int $student_id
 * @property string $employer
 * @property string $job_description
 * @property string $date_of_employment
 *
 * @property Personalinfo $student
 */
class Employmentinfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employmentinfo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id'], 'integer'],
            [['student_id'], 'unique'],

            [['employer'], 'string','min'=>3,'max'=>40],
            [['employer'], 'filter','filter'=>'ucfirst'],
           // [['employer'], 'match' ,'pattern' => '/^[a-zA-Z\s]+$/','message'=>'only character string ia allowed'],

            [['job_description'], 'string','min'=>3,'max'=>40],
            [['job_description'], 'filter','filter'=>'ucfirst'],
           // [['job_description'], 'match' ,'pattern' => '/^[a-zA-Z\s]+$/','message'=>'only character string ia allowed'],

            [['date_of_employment'], 'string'],

            [['employer', 'job_description', 'date_of_employment'], 'string', 'max' => 255],
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
            'employer' => 'Employer',
            'job_description' => 'Job Description',
            'date_of_employment' => 'Date Of Employment',
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
