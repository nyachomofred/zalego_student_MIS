<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "employerinfo".
 *
 * @property int $id
 * @property int $student_id
 * @property string $employer_title
 * @property string $employer_name
 * @property string $campany_name
 * @property string $employer_phone
 * @property string $employer_email
 *
 * @property Personalinfo $student
 */
class Employerinfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employerinfo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id'], 'integer'],
            [['student_id'], 'unique'],

            [['employer_title'], 'string','min'=>3,'max'=>20],
            [['employer_title'], 'filter','filter'=>'ucfirst'],
            //[['employer_title'], 'match' ,'pattern' => '/^[a-zA-Z\s]+$/','message'=>'only character string ia allowed'],
             
             
            [['employer_name'], 'string','min'=>3,'max'=>40],
            [['employer_name'], 'filter','filter'=>'ucfirst'],
            //[['employer_name'], 'match' ,'pattern' => '/^[a-zA-Z\s]+$/','message'=>'only character string ia allowed'],

            [['campany_name'], 'string','min'=>3,'max'=>40],
            [['campany_name'], 'filter','filter'=>'ucfirst'],
           // [['campany_name'], 'match' ,'pattern' => '/^[a-zA-Z\s]+$/','message'=>'only character string ia allowed'],
             
            [[ 'employer_phone',], 'string'],
           // [[ 'employer_phone',], 'unique'],
           // [[ 'employer_phone',], 'match', 'pattern' => '/^\d{10}$/', 'message' => 'Field must contain exactly 10 digits'],
             
            
            [['employer_email'], 'string'],
            //[['employer_email'], 'unique'],

           // [['student_id'], 'exist', 'skipOnError' => true, 'targetClass' => Personalinfo::className(), 'targetAttribute' => ['student_id' => 'id']],
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
            'employer_title' => 'Employer Title',
            'employer_name' => 'Employer Name',
            'campany_name' => 'Campany Name',
            'employer_phone' => 'Employer Phone',
            'employer_email' => 'Employer Email',
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
