<?php

namespace app\modules\customer\controllers;

use yii\web\Controller;

class IndexController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}