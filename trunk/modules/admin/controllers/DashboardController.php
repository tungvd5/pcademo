<?php

namespace app\modules\admin\controllers;
use Yii;
use yii\web\Controller;
use app\models\User;

class DashboardController extends Controller
{  
    public function actionIndex()
    {
    	if((!Yii::$app->session->get('user.id')) || (Yii::$app->session->get('user.role') != User::ROLE_ADMIN) )
    		return $this->redirect('/admin/user/login');
        return $this->render('index');
    }
}
