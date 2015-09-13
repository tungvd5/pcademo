<?php

use app\assets\admin\page\SignAsset;
use yii\helpers\Html;
use yii\widgets\ActiveForm;  

/* @var $this \yii\web\View */
/* @var $content string */

SignAsset::register($this);
$this->title = 'SIGN IN | BLANKON - Fullpack Admin Theme';
    
?>

<div id="sign-wrapper">

    <!-- Brand -->
    <div class="brand">
        <img src="http://img.djavaui.com/?create=220x100,4888E1?f=ffffff" alt="brand logo"/>
    </div>
    <!--/ Brand -->

    <!-- Login form -->
    <?php $form = ActiveForm::begin([
        'id'=>'login-form',
        'enableAjaxValidation'=>true,
        'class' => 'sign-in form-horizontal shadow rounded no-overflow',
    ]); ?>    
        <div class="sign-header">
            <div class="form-group">
                <div class="sign-text">
                    <span>Member Area</span>
                </div>
            </div><!-- /.form-group -->
        </div><!-- /.sign-header -->
        <div class="sign-body">
            <div class="form-group">
                <div class="input-group input-group-lg rounded no-overflow">
                    <input type="text" id="loginform-username" class="form-control input-sm required" name="LoginForm[username]" placeholder="<?php echo Yii::t('app', 'Username or email') ?>" required="required">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                </div>
            </div><!-- /.form-group -->
            <div class="form-group">
                <div class="input-group input-group-lg rounded no-overflow">
                    <input type="password" id="loginform-password" class="form-control input-sm required" name="LoginForm[password]" placeholder="<?php echo Yii::t('app', 'Password') ?>" required="required">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                </div>
            </div><!-- /.form-group -->
        </div><!-- /.sign-body -->
        <div class="sign-footer">
            <div class="form-group">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="ckbox ckbox-theme">
                            <input type="checkbox" id="checkbox-1" value="1">
                            <label for="checkbox-1" class="rounded"> <?php echo Yii::t('app', 'Remember me')?></label>
                        </div>
                    </div>
                    <div class="col-xs-6 text-right">
                        <a href="<?= Yii::$app->getUrlManager()->createUrl('customer/user/lostpassword') ?>" title="lost password"><?php echo Yii::t('app', 'Lost password?') ?></a>
                    </div>
                </div>
            </div><!-- /.form-group -->
            <div class="form-group">
                <?php echo Html::submitButton( Yii::t('app', 'Sign In'), ['class' => 'btn btn-theme btn-lg btn-block no-margin rounded', 'id' => 'login-btn']) ?>
            </div><!-- /.form-group -->
        </div><!-- /.sign-footer -->
    <?php ActiveForm::end(); ?>     
    <!--/ Login form -->

    <!-- Content text -->
    <p class="text-muted text-center sign-link"><?php echo Yii::T('app', 'Need an account?')?> <a href="<?= Yii::$app->getUrlManager()->createUrl('admin/page/signup') ?>"> <?php echo Yii::t('app', 'Sign up free') ?></a></p>
    <!--/ Content text -->

</div><!-- /#sign-wrapper -->