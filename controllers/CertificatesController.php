<?php 
namespace app\controllers;

use yii\rest\ActiveController;

class CertificatesController extends ActiveController
{
    public $modelClass = 'app\models\Certificates';
    public function behaviors() {
        $behaviors = parent::behaviors();
        $behaviors['contentNegotiator'] = [
            'class' => 'yii\filters\ContentNegotiator',
            'formats' => [
                'application/json' => \yii\web\Response::FORMAT_JSON,
            ]
        ];
        return $behaviors;
    }
} 