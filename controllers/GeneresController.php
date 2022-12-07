<?php 
namespace app\controllers;

use yii\rest\ActiveController;

class GeneresController extends ActiveController
{
    public $modelClass = 'app\models\Generes';
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