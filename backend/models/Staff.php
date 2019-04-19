<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "staff".
 *
 * @property int $id
 * @property string $passpot
 * @property string $staff_id
 * @property string $name
 * @property string $phone
 * @property string $national_id
 * @property string $gender
 * @property string $role
 */
class Staff extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'staff';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['passpot', 'staff_id', 'name', 'phone', 'national_id', 'gender', 'role'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'passpot' => 'Passpot',
            'staff_id' => 'Staff ID',
            'name' => 'Name',
            'phone' => 'Phone',
            'national_id' => 'National ID',
            'gender' => 'Gender',
            'role' => 'Role',
            'globalSearch'=>'',
        ];
    }
}
