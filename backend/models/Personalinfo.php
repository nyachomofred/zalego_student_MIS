<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "personalinfo".
 *
 * @property int $id
 * @property string $course_period
 * @property string $payment_information
 * @property string $student_id
 * @property string $full_name
 * @property string $date_of_birth
 * @property string $gender
 * @property string $id_no
 * @property string $email
 * @property string $phone
 * @property string $alternate_phone
 * @property string $citizenship
 * @property string $marital_status
 * @property string $future_career
 * @property string $physical_address
 * @property string $religion
 * @property string $medical_condition
 * @property string $campus;
 * @property string $intake;
 * @property string $level;
 */
class Personalinfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'personalinfo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

              [['course_period'],'required'],

              [['payment_information'],'required'],
              [['level'],'required'],

              [['student_id'],'required'],
              [['student_id'],'string','min'=>2,'max'=>8],
              [['student_id'],'unique'],

              [['full_name'],'required'],
               
             [['full_name'], 'string' ,'min'=>10,'max'=>40],
             [['full_name'], 'match' ,'pattern' => '/^[a-zA-Z\s]+$/','message'=>'only character string ia allowed'],
             [['full_name'], 'filter' ,'filter'=>'ucfirst'],

              [['date_of_birth'],'required'],

              [['gender'],'required'],

              [['id_no'], 'match', 'pattern' => '/^\d{8}$/', 'message' => 'Field must contain exactly 8 digits'],
              [['id_no'], 'unique' ,'message'=>'this id is already taken'],
              [['id_no'], 'required'],
             
              //validation for email
              [['email'], 'required'],
              [['email'], 'email'],
              [['email'], 'unique'],

              //validation for phonenumber and alternate phonenumber

            [[ 'phone',], 'required'],
            [[ 'phone',], 'integer'],
            [[ 'phone',], 'unique'],
            [[ 'phone',], 'match', 'pattern' => '/^\d{10}$/', 'message' => 'Field must contain exactly 10 digits'],

           
            [[  'alternate_phone'], 'integer'],
            [[  'alternate_phone'], 'unique'],
            [[  'alternate_phone'], 'match', 'pattern' => '/^\d{10}$/', 'message' => 'Field must contain exactly 10 digits'],

            //rules for firstname,midlename and lastname

            [['citizenship'], 'required'],
            [['citizenship'], 'string' ,'min'=>3,'max'=>40],
            [['citizenship'], 'match' ,'pattern' => '/^[a-zA-Z\s]+$/','message'=>'only character string ia allowed'],
            [['citizenship'], 'filter' ,'filter'=>'ucfirst'],

            [['marital_status'],'required'],

            [['future_career'], 'string' ,'min'=>3,'max'=>40],
            [['future_career'], 'match' ,'pattern' => '/^[a-zA-Z\s]+$/','message'=>'only character string ia allowed'],
            [['future_career'], 'filter' ,'filter'=>'ucfirst'],

            [['physical_address'], 'required'],
            [['physical_address'], 'string' ,'min'=>3,'max'=>40],
            [['physical_address'], 'filter' ,'filter'=>'ucfirst'],

            [['religion'], 'required'],
            [['religion'], 'filter' ,'filter'=>'ucfirst'],

            [['medical_condition'], 'string' ,'min'=>3,'max'=>40],
            [['medical_condition'], 'match' ,'pattern' => '/^[a-zA-Z\s]+$/','message'=>'only character string ia allowed'],
            [['medical_condition'], 'filter' ,'filter'=>'ucfirst'],
            
            [['campus'],'required'],

            [['intake'],'required'],

            [['level'],'required'],
           
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'course_period' => 'Course Period',
            'payment_information' => 'Payment Information',
            'student_id' => 'Student ID',
            'full_name' => 'Full Name',
            'date_of_birth' => 'Date Of Birth',
            'gender' => 'Gender',
            'id_no' => 'Id No',
            'email' => 'Email',
            'phone' => 'Phone',
            'alternate_phone' => 'Alternate Phone',
            'citizenship' => 'Citizenship',
            'marital_status' => 'Marital Status',
            'future_career' => 'Future Career',
            'physical_address' => 'Physical Address',
            'religion' => 'Religion',
            'medical_condition' => 'Medical Condition',
            'campus'=>'Campus',
            'intake'=>'Intake',
            'level'=>'Level',
        ];
    }
}
