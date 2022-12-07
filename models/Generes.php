<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "generes".
 *
 * @property int $genere_id
 * @property string $genere_description
 * @property string $created_at
 * @property string|null $updated_at
 */
class Generes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'generes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['genere_description', 'created_at'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['genere_description'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'genere_id' => 'Genere ID',
            'genere_description' => 'Genere Description',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
