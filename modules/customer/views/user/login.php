<?php
    use yii\helpers\Html;
	$this->title = Yii::t('app', 'User Login');
	$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['index']];
	$this->params['breadcrumbs'][] = $this->title;
?>
<section class="pagebg banner">
    <div class="page-header-top"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?= Html::encode($this->title) ?></h1>
                <h4>Top hotel in the world</h4>
                <ol class="breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li class="active">Login</li>
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
                    <div class="col-md-5 col-sm-6">
                        <div class="section-title">
                            <h3><?php echo Yii::t('app', 'Login Account'); ?></h3>
                        </div>
                        <?php echo $this->render('_form-login', [
                            'model' => $model,
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
