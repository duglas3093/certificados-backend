<?php 
namespace app\controllers;

use yii\rest\ActiveController;
use yii\web\Response;

class CategoriesController extends ActiveController
{
    public $modelClass = 'app\models\Categories';
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