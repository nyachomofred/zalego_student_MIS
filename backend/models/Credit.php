<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "credit".
 *
 * @property int $id
 * @property int $student_id
 * @property string $amount_paid
 * @property string $payment_mode
 * @property string $date_paid
 * @property string $reference_no
 * @property Personalinfo $student
 */
class Credit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'credit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id'], 'integer'],
            [['amount_paid', 'payment_mode','reference_no', 'date_paid'], 'string', 'max' => 255],
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
            'amount_paid' => 'Amount Paid',
            'payment_mode' => 'Payment Mode',
            'reference_no' => 'mpesa no/cheque no',
            'date_paid' => 'Date Paid',
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
