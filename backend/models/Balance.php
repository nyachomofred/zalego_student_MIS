<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "balance".
 *
 * @property int $id
 * @property int $student_id
 * @property int $required_amount
 * @property int $amount_to_pay
 * @property int $amount_paid
 * @property int $balance
 *
 * @property Personalinfo $student
 */
class Balance extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'balance';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id'], 'integer'],
            [['required_amount', 'amount_to_pay', 'amount_paid', 'balance'], 'integer'],
            [['student_id'], 'exist', 'skipOnError' => true, 'targetClass' => Personalinfo::className(), 'targetAttribute' => ['student_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '',
            'student_id' => 'Student ID',
            'required_amount' => 'Required Amount',
            'amount_to_pay' => 'Amount To Pay',
            'amount_paid' => 'Amount Paid',
            'balance' => 'Balance',
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
