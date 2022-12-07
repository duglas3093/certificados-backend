<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "instructor".
 *
 * @property int $instructor_id
 * @property string $instructor_name
 * @property int|null $status_id
 * @property string $created_at
 * @property string|null $updated_at
 */
class Instructor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'instructor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['instructor_name', 'created_at'], 'required'],
            [['status_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['instructor_name'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'instructor_id' => 'Instructor ID',
            'instructor_name' => 'Instructor Name',
            'status_id' => 'Status ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
