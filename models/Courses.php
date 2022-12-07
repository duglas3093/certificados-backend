<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "courses".
 *
 * @property int $course_id
 * @property int|null $category_id
 * @property string $course_name
 * @property string $course_description
 * @property string $course_stardate
 * @property string $course_enddate
 * @property int $instructor_id
 * @property int $status_id
 * @property string $created_at
 * @property string|null $updated_at
 */
class Courses extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'courses';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'instructor_id', 'status_id'], 'integer'],
            [['course_name', 'course_description', 'course_stardate', 'course_enddate', 'instructor_id', 'status_id', 'created_at'], 'required'],
            [['course_description'], 'string'],
            [['course_stardate', 'course_enddate', 'created_at', 'updated_at'], 'safe'],
            [['course_name'], 'string', 'max' => 60],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'course_id' => 'Course ID',
            'category_id' => 'Category ID',
            'course_name' => 'Course Name',
            'course_description' => 'Course Description',
            'course_stardate' => 'Course Stardate',
            'course_enddate' => 'Course Enddate',
            'instructor_id' => 'Instructor ID',
            'status_id' => 'Status ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
