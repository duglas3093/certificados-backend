<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "certificate_template".
 *
 * @property int $certificatetem_id
 * @property string $certificatetem_title
 * @property string $certificatetem_description
 * @property int $certificatetem_template
 * @property string $certificatetem_background
 * @property int $course_id
 * @property string $created_at
 * @property string|null $updated_at
 */
class CertificateTemplate extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'certificate_template';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['certificatetem_title', 'certificatetem_description', 'certificatetem_template', 'certificatetem_background', 'course_id', 'created_at'], 'required'],
            [['certificatetem_template', 'course_id'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['certificatetem_title'], 'string', 'max' => 60],
            [['certificatetem_description'], 'string', 'max' => 250],
            [['certificatetem_background'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'certificatetem_id' => 'Certificatetem ID',
            'certificatetem_title' => 'Certificatetem Title',
            'certificatetem_description' => 'Certificatetem Description',
            'certificatetem_template' => 'Certificatetem Template',
            'certificatetem_background' => 'Certificatetem Background',
            'course_id' => 'Course ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
