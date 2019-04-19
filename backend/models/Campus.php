<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "campus".
 *
 * @property int $id
 * @property string $campus_code
 * @property string $campus_name
 * @property string $campus_location
 */
class Campus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'campus';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['campus_code', 'campus_name', 'campus_location'], 'string', 'max' => 255],
            [['campus_name'],'filter','filter'=>'ucfirst'],
            [['campus_location'],'filter','filter'=>'ucfirst'],
          
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'campus_code' => '',
            'campus_name' => 'Campus Name',
            'campus_location' => 'Campus Location',
            'globalSearch'=>'',
        ];
    }
}
