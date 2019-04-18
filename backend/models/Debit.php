<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "debit".
 *
 * @property int $id
 * @property int $student_id
 * @property string $required_amount
 * @property string $amount_pay
 *
 * @property Personalinfo $student
 */
class Debit extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'debit';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id'], 'integer'],
            [['required_amount', 'amount_pay'], 'string', 'max' => 255],
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
            'required_amount' => 'Required Amount',
            'amount_pay' => 'Amount Pay',
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
