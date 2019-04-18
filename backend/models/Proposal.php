<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "proposal".
 *
 * @property int $id
 * @property int $student_id
 * @property string $proposal
 * @property string $date_submited
 * @property string $status
 * @property string $comment
 *
 * @property Personalinfo $student
 */
class Proposal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'proposal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['student_id'], 'integer'],
            [['proposal', 'date_submited', 'status', 'comment'], 'string', 'max' => 255],
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
            'proposal' => 'Proposal',
            'date_submited' => 'Date Submited',
            'status' => 'Status',
            'comment' => 'Comment',
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
