<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

    <?php $form = ActiveForm::begin(); ?>

    <div class="form-group">
        <div class="col-sm-12">
            <?php echo $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-12">
            <?php echo $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-12">
            <?php echo $form->field($model, 'passwordreset')->passwordInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-12">
            <?php echo $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-12">
            <?php echo $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-12">
            <?php echo $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>
        </div>
    </div>

    
    <div class="form-group">
        <div class="col-sm-12">
            <?php echo Html::submitButton( Yii::t('app', 'Create account'), ['class' => 'btn btn-primary btn-block']) ?>
        </div>
    </div>  

    <?php ActiveForm::end(); ?>