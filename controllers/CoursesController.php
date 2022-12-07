<?php 
namespace app\controllers;

use yii\rest\ActiveController;

class CoursesController extends ActiveController
{
    public $modelClass = 'app\models\Courses';
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