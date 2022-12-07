<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "students".
 *
 * @property int $student_id
 * @property string $student_name
 * @property string $student_lastname
 * @property string $student_ci
 * @property string $student_cicomplement
 * @property string $student_celphone
 * @property string $student_email
 * @property string|null $student_photo
 * @property int $genere_id
 * @property int $user_id
 * @property int|null $status_id
 * @property string $created_at
 * @property string|null $updated_at
 */
class Students extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'students';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['student_name', 'student_lastname', 'student_ci', 'student_cicomplement', 'student_celphone', 'student_email', 'genere_id', 'user_id', 'created_at'], 'required'],
            [['genere_id', 'user_id', 'status_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['student_name', 'student_lastname'], 'string', 'max' => 60],
            [['student_ci'], 'string', 'max' => 15],
            [['student_cicomplement'], 'string', 'max' => 6],
            [['student_celphone'], 'string', 'max' => 10],
            [['student_email'], 'string', 'max' => 150],
            [['student_photo'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'student_id' => 'Student ID',
            'student_name' => 'Student Name',
            'student_lastname' => 'Student Lastname',
            'student_ci' => 'Student Ci',
            'student_cicomplement' => 'Student Cicomplement',
            'student_celphone' => 'Student Celphone',
            'student_email' => 'Student Email',
            'student_photo' => 'Student Photo',
            'genere_id' => 'Genere ID',
            'user_id' => 'User ID',
            'status_id' => 'Status ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
