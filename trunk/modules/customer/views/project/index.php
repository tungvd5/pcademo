<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\ListView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'My Projects');
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
                <h1><?= Html::encode($this->title) ?></h1>
            </div><!-- end col -->
        </div><!-- end row -->

        <div id="sitewrapper" class="row">
            <div id="content" class="col-md-9 col-sm-9 col-xs-12 pull-right">
                <div class="row hotel-list">
                    <?php echo ListView::widget([
                        'dataProvider' => $dataProvider,
                        'itemView' => '_view',
                        'id' => 'probject-list-view',
                    ]); ?>
                </div><!-- end hotel-list -->

            </div><!-- end col -->

            <div id="sidebar" class="col-md-3 col-sm-3 col-xs-12">
                <?php echo $this->render("menu_bar") ?>
            </div><!-- end #sidebar -->   
        </div>
    </div>
</section>
