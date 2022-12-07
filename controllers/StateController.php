<?php 
namespace app\controllers;

use yii\rest\ActiveController;

class StateController extends ActiveController
{
    public $modelClass = 'app\models\Status';
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