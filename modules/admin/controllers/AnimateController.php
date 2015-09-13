<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

class AnimateController extends Controller
{
    public $layout = 'admin';
    
    public function actionIndex()
    {
        //return $this->render('index');
    }
    
    public function actionAnimate(){
        return $this->render('animate');
    }
    
    
}
