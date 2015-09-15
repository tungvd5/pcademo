<?php

namespace app\modules\customer\controllers;

use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

   

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionContact()
    {
        return $this->render('contact');
    }

    public function actionAbout()
    {
        return $this->render('aboutus');
    }

    public function actionCreateproject()
    {
        return $this->render('createproject');
    }

    public function actionError()
    {
        return $this->render('error');
    }

    public function actionList()
    {
        return $this->render('list');
    }

    public function actionSingle()
    {
        return $this->render('single');
    }

    public function actionBlog()
    {
        return $this->render('blog');
    }

    public function actionCheckout()
    {
        return $this->render('checkout');
    }

    public function actionBlogdetail()
    {
        return $this->render('blog_detail');
    }

    
}
