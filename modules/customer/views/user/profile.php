<?php

use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'My Account');
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="pagebg banner">
    <div class="page-header-top"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php echo Html::encode($this->title) ?></h1>
                <ol class="breadcrumb">
                  <li><a href="/"><?php  echo Yii::t('app', 'Home');?></a></li>
                  <li class="active"><a href="<?php echo Url::current();  ?>"><?php echo Html::encode($this->title) ?></a></li>
                </ol>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<section class="section white">
    <div class="pagebefore"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-title text-center">
                <h1><?php echo Html::encode($this->title) ?></h1>
            </div><!-- end col -->
        </div><!-- end row -->

        <div id="sitewrapper" class="row">
            <div id="content" class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-md-5 col-sm-6">
                        <div class="section-title">
                            <h3><?php echo Yii::t('app', 'My Account'); ?></h3>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6">
                                    <?php echo Html::activeLabel($model, 'username'); ?>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <?php echo $model->username; ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6">
                                    <?php echo Html::activeLabel($model, 'email'); ?>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <?php echo $model->email; ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6">
                                    <?php echo Html::activeLabel($model, 'first_name'); ?>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <?php echo $model->first_name; ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6">
                                    <?php echo Html::activeLabel($model, 'last_name'); ?>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <?php echo $model->last_name; ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6">
                                    <a href="<?php echo Yii::$app->urlManager->createUrl('/customer/user/update?id='.$model->id); ?>" class="btn btn-primary btn-block"><?php echo Yii::t('app', 'Update Account') ?></a>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <a href="<?php echo Yii::$app->urlManager->createUrl('/customer/user/changepassword?id='.$model->id); ?>" class="btn btn-primary btn-block"><?php echo Yii::t('app', 'Change Password') ?></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- end row -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
