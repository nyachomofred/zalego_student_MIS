<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "academicinfo".
 *
 * @property int $id
 * @property int $student_id
 * @property string $school_name
 * @property string $type_of_school
 * @property string $school_address
 * @property string $city_or_town
 * @property string $Year_of_completion
 * @property string $currently_enrolled_in_school
 *
 * @property Personalinfo $student
 */
class Academicinfo extends \yii\db\ActiveRecord
{
    
    public static function tableName()
    {
        return 'academicinfo';
    }

   
    public function rules()
    {
        return [
            [['student_id'], 'integer'],
            [['student_id'], 'unique'],
            
            [['school_name'], 'string','min'=>3,'max'=>40],
            [['school_name'], 'filter','filter'=>'ucfirst'],
            
            [['type_of_school'], 'string','min'=>3,'max'=>40],
            [['type_of_school'], 'filter','filter'=>'ucfirst'],
           
            [['school_address'], 'string','min'=>3,'max'=>40],
            [['school_address'], 'filter','filter'=>'ucfirst'],
           
            [['city_or_town'], 'string','min'=>3,'max'=>40],
            [['city_or_town'], 'filter','filter'=>'ucfirst'],
            [['city_or_town'], 'match' ,'pattern' => '/^[a-zA-Z\s]+$/','message'=>'only character string ia allowed'],
             
            [['Year_of_completion'], 'string'],

            [['currently_enrolled_in_school'], 'string'],

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
            'type_of_school' => 'Type Of School',
            'school_address' => 'School Address',
            'city_or_town' => 'City Or Town',
            'Year_of_completion' => 'Year Of Completion',
            'currently_enrolled_in_school' => 'Currently Enrolled In School',
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
