<?php

namespace app\modules\customer\controllers;

use yii\web\Controller;

class UserController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCreate(){

    	$model = new User;
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

}
