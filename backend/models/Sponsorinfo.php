<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sponsorinfo".
 *
 * @property int $id
 * @property int $student_id
 * @property string $sponsor
 * @property string $sponsor_title
 * @property string $sponsor_name
 * @property string $sponsor_address
 * @property string $sponsor_phone
 * @property string $sponsor_email
 *
 * @property Personalinfo $student
 */
class Sponsorinfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sponsorinfo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id'], 'integer'],
            [['student_id'], 'unique'],

            [['sponsor'], 'string','min'=>3,'max'=>10],
            [['sponsor'], 'filter','filter'=>'ucfirst'],
           // [['sponsor'], 'match' ,'pattern' => '/^[a-zA-Z\s]+$/','message'=>'only character string ia allowed'],

            [['sponsor_title'], 'string','min'=>1,'max'=>20],
            [['sponsor_title'], 'filter','filter'=>'ucfirst'],
            //[['sponsor_title'], 'match' ,'pattern' => '/^[a-zA-Z\s]+$/','message'=>'only character string ia allowed'],
             
            [['sponsor_name'], 'string','min'=>3,'max'=>40],
            [['sponsor_name'], 'filter','filter'=>'ucfirst'],
            //[['sponsor_name'], 'match' ,'pattern' => '/^[a-zA-Z\s]+$/','message'=>'only character string ia allowed'],

            [['sponsor'], 'string','min'=>3,'max'=>10],
            [['sponsor'], 'filter','filter'=>'ucfirst'],

           
            [[ 'sponsor_phone',], 'string'],
            //[[ 'sponsor_phone',], 'unique'],
            //[[ 'sponsor_phone',], 'match', 'pattern' => '/^\d{10}$/', 'message' => 'Field must contain exactly 10 digits'],
             
            //validation for email
            [['sponsor_email'], 'string'],
            //[['sponsor_email'], 'email'],
            //[['sponsor_email'], 'unique'],

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
            'sponsor' => 'Sponsor',
            'sponsor_title' => 'Title',
            'sponsor_name' => 'Sponsor Name',
            'sponsor_address' => 'Sponsor Address',
            'sponsor_phone' => 'Sponsor Phone',
            'sponsor_email' => 'Sponsor Email',
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
