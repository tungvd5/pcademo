<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

class MapsController extends Controller
{
    public $layout = 'admin';
    
    public function actionIndex()
    {
        //return $this->render('index');
    }
    
    public function actionGoogle(){
        return $this->render('google');
    }
    
    public function actionVector(){
        return $this->render('vector');
    }
    
    
   
    
}
