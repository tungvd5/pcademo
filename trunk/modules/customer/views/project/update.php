<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Project */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Project',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Projects'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<section class="pagebg banner">
    <div class="page-header-top"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?= Html::encode($this->title) ?></h1>
                <ol class="breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li class="active">About</li>
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
                <h1><?= Html::encode($this->title) ?></h1>
           	</div><!-- end col -->
        </div><!-- end row -->

        <div id="sitewrapper" class="row">
            <div id="content" class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <?= $this->render('_form', [
				        'model' => $model,
				    ]) ?>
                </div>
            </div>
        </div>
    </div>
</section>