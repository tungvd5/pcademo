<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

class BlogController extends Controller
{
    public $layout = 'admin';
    
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionGrid(){
        return $this->render('grid');
    }
    
    public function actionList(){
        return $this->render('list');
    }
    
    public function actionSingle(){
        return $this->render('single');
    }
}
