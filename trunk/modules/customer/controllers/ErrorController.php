<?php

namespace app\modules\customer\controllers;

use yii\web\Controller;

class ErrorController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
