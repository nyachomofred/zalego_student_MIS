<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "certificate".
 *
 * @property int $id
 * @property int $student_id
 * @property string $certificate_no
 * @property string $status
 * @property string $date_collected
 *
 * @property Personalinfo $student
 */
class Certificate extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'certificate';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id'], 'integer'],
            [['certificate_no', 'status', 'date_collected'], 'string', 'max' => 255],
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
            'certificate_no' => 'Certificate No',
            'status' => 'Status',
            'date_collected' => 'Date Collected',
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
