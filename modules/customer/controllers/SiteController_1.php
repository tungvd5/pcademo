<?php

namespace app\modules\customer\controllers;

use yii\web\Controller;
use app\models\User;
use app\models\LoginForm;

class SiteController extends Controller
{
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
