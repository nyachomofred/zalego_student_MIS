<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "course".
 *
 * @property int $id
 * @property string $course_code
 * @property string $course_name
 * @property string $course_level
 * @property string $course_duration
 * @property string $course_description
 */
class Course extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'course';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['course_code', 'course_name', 'course_level', 'course_duration', 'course_description'], 'string', 'max' => 255],
            [['course_name'],'filter','filter'=>'ucfirst'],
            [['course_level'],'filter','filter'=>'ucfirst'],
            [['course_duration'],'filter','filter'=>'ucfirst'],
            [['course_description'],'filter','filter'=>'ucfirst'],
            [['course_code'],'filter','filter'=>'ucfirst'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'course_code' => 'Course Code',
            'course_name' => 'Course Name',
            'course_level' => 'Course Level',
            'course_duration' => 'Course Duration',
            'course_description' => 'Course Description',
        ];
    }
}
