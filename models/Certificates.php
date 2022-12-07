<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "certificates".
 *
 * @property int $cetificate_id
 * @property int $cetificate_qualification
 * @property int $course_id
 * @property int $student_id
 * @property int $inscribe_id
 * @property int $certificatemodelo_id
 * @property int $user_id
 * @property int $status_id
 * @property string $created_at
 * @property string|null $updated_at
 */
class Certificates extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'certificates';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cetificate_qualification', 'course_id', 'student_id', 'inscribe_id', 'certificatemodelo_id', 'user_id', 'status_id', 'created_at'], 'required'],
            [['cetificate_qualification', 'course_id', 'student_id', 'inscribe_id', 'certificatemodelo_id', 'user_id', 'status_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cetificate_id' => 'Cetificate ID',
            'cetificate_qualification' => 'Cetificate Qualification',
            'course_id' => 'Course ID',
            'student_id' => 'Student ID',
            'inscribe_id' => 'Inscribe ID',
            'certificatemodelo_id' => 'Certificatemodelo ID',
            'user_id' => 'User ID',
            'status_id' => 'Status ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
