<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "status".
 *
 * @property int $status_id
 * @property int|null $status_code
 * @property string $status_description
 * @property string $created_at
 * @property string|null $updated_at
 */
class Status extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'status';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status_code'], 'integer'],
            [['status_description', 'created_at'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['status_description'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'status_id' => 'Status ID',
            'status_code' => 'Status Code',
            'status_description' => 'Status Description',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
