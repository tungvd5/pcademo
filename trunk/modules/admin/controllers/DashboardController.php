<?php

namespace app\modules\admin\controllers;
use Yii;
use yii\web\Controller;

class DashboardController extends Controller
{  
    public function actionIndex()
    {
    	if (Yii::$app->user->isGuest)
            return $this->redirect('/admin/user/login');
        return $this->render('index');
    }
}
