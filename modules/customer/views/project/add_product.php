<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Project */
$this->title =  Yii::t('app', 'Add product to project');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Projects'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="pagebg banner">
    <div class="page-header-top"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?= Html::encode($this->title) ?></h1>
                <h4>Make your project</h4>
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
                    <div id="content" class="col-md-9 col-sm-9 col-xs-12 pull-right">
                        <div class="row hotel-list">
                            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s;">
                                <div class="hotel-showcase">
                                    <div class="post-media">
                                        <img src="<?= \Yii::getAlias('@asset') ?>/customer/upload/hotel_showcase_01.png" alt="" class="img-responsive">
                                    </div><!-- end media -->

                                    <div class="hotel-showcase-title text-center">
                                        <div class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div><!-- end rating -->
                                        <h4><a href="tour-single.html" title="">GLOBAL HOTEL <span>Asia</span></a></h4>
                                        <span class="hotel-showcase-price"><i class="fa fa-diamond"></i> $12.00</span>
                                    </div><!-- end title -->
                                </div><!-- end hotel-showcase -->
                            </div><!-- end col -->

                            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s;">
                                <div class="hotel-showcase">
                                    <div class="post-media">
                                        <img src="<?= \Yii::getAlias('@asset') ?>/customer/upload/hotel_showcase_02.png" alt="" class="img-responsive">
                                    </div><!-- end media -->

                                    <div class="hotel-showcase-title text-center">
                                        <div class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div><!-- end rating -->
                                        <h4><a href="tour-single.html" title="">SHERATON HOTEL <span>Asia</span></a></h4>
                                        <span class="hotel-showcase-price"><i class="fa fa-diamond"></i> $12.00</span>
                                    </div><!-- end title -->
                                </div><!-- end hotel-showcase -->
                            </div><!-- end col -->

                            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.6s;">
                                <div class="hotel-showcase">
                                    <div class="post-media">
                                        <img src="<?= \Yii::getAlias('@asset') ?>/customer/upload/hotel_showcase_03.png" alt="" class="img-responsive">
                                    </div><!-- end media -->

                                    <div class="hotel-showcase-title text-center">
                                        <div class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div><!-- end rating -->
                                        <h4><a href="tour-single.html" title="">HILTON HOTEL <span>Asia</span></a></h4>
                                        <span class="hotel-showcase-price"><i class="fa fa-diamond"></i> $12.00</span>
                                    </div><!-- end title -->
                                </div><!-- end hotel-showcase -->
                            </div><!-- end col -->

                            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.8s;">
                                <div class="hotel-showcase">
                                    <div class="post-media">
                                        <img src="<?= \Yii::getAlias('@asset') ?>/customer/upload/hotel_showcase_01.png" alt="" class="img-responsive">
                                    </div><!-- end media -->

                                    <div class="hotel-showcase-title text-center">
                                        <div class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div><!-- end rating -->
                                        <h4><a href="tour-single.html" title="">GLOBAL HOTEL <span>Asia</span></a></h4>
                                        <span class="hotel-showcase-price"><i class="fa fa-diamond"></i> $12.00</span>
                                    </div><!-- end title -->
                                </div><!-- end hotel-showcase -->
                            </div><!-- end col -->

                            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s;">
                                <div class="hotel-showcase">
                                    <div class="post-media">
                                        <img src="<?= \Yii::getAlias('@asset') ?>/customer/upload/hotel_showcase_02.png" alt="" class="img-responsive">
                                    </div><!-- end media -->

                                    <div class="hotel-showcase-title text-center">
                                        <div class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div><!-- end rating -->
                                        <h4><a href="tour-single.html" title="">SHERATON HOTEL <span>Asia</span></a></h4>
                                        <span class="hotel-showcase-price"><i class="fa fa-diamond"></i> $12.00</span>
                                    </div><!-- end title -->
                                </div><!-- end hotel-showcase -->
                            </div><!-- end col -->

                            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="1.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 1.2s;">
                                <div class="hotel-showcase">
                                    <div class="post-media">
                                        <img src="<?= \Yii::getAlias('@asset') ?>/customer/upload/hotel_showcase_03.png" alt="" class="img-responsive">
                                    </div><!-- end media -->

                                    <div class="hotel-showcase-title text-center">
                                        <div class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div><!-- end rating -->
                                        <h4><a href="tour-single.html" title="">HILTON HOTEL <span>Asia</span></a></h4>
                                        <span class="hotel-showcase-price"><i class="fa fa-diamond"></i> $12.00</span>
                                    </div><!-- end title -->
                                </div><!-- end hotel-showcase -->
                            </div><!-- end col -->
                        </div><!-- end hotel-list -->
                        <div class="row">
                            <div class="col-md-12">
                                <nav class="text-right">
                                  <ul class="pagination">
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                  </ul>
                                </nav>
                            </div><!-- end 12 -->
                        </div><!-- end row -->
                    </div><!-- end col -->

                    <div id="sidebar" class="col-md-3 col-sm-3 col-xs-12">

                        <div class="hotel-widget accordion-toggle">
                            <div class="panel-group accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="panel-title widget-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1">
                                                <div class="widget-title">
                                                    <h4>Hotel by Country <i class="indicator fa fa-minus"></i></h4>
                                                </div><!-- end widget-title -->
                                            </a>
                                        </div>
                                    </div>
                                    <div id="accordion1" class="panel-collapse in collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="#">Asian Hotels</a></li>
                                                <li><a href="#">Africa Hotels</a></li>
                                                <li><a href="#">Europe Hotels</a></li>
                                                <li><a href="#">Oceania Hotels</a></li>
                                                <li><a href="#">Other Hotels</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- accordion -->

                        <div class="hotel-widget accordion-toggle">
                            <div class="panel-group accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="panel-title widget-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion2">
                                                <div class="widget-title">
                                                    <h4>Destinations <i class="indicator fa fa-plus"></i></h4>
                                                </div><!-- end widget-title -->
                                            </a>
                                        </div>
                                    </div>
                                    <div id="accordion2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="#">Asian Hotels</a></li>
                                                <li><a href="#">Africa Hotels</a></li>
                                                <li><a href="#">Europe Hotels</a></li>
                                                <li><a href="#">Oceania Hotels</a></li>
                                                <li><a href="#">Other Hotels</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- accordion -->

                        <div class="hotel-widget accordion-toggle">
                            <div class="panel-group accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="panel-title widget-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion3">
                                                <div class="widget-title">
                                                    <h4>Sort by Price <i class="indicator fa fa-plus"></i></h4>
                                                </div><!-- end widget-title -->
                                            </a>
                                        </div>
                                    </div>
                                    <div id="accordion3" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="#">Asian Hotels</a></li>
                                                <li><a href="#">Africa Hotels</a></li>
                                                <li><a href="#">Europe Hotels</a></li>
                                                <li><a href="#">Oceania Hotels</a></li>
                                                <li><a href="#">Other Hotels</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- accordion -->

                        <div class="hotel-widget accordion-toggle">
                            <div class="panel-group accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="panel-title widget-title">
                                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion4" href="#accordion4">
                                                <div class="widget-title">
                                                    <h4>Promo <i class="indicator fa fa-plus"></i></h4>
                                                </div><!-- end widget-title -->
                                            </a>
                                        </div>
                                    </div>
                                    <div id="accordion4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="#">Asian Hotels</a></li>
                                                <li><a href="#">Africa Hotels</a></li>
                                                <li><a href="#">Europe Hotels</a></li>
                                                <li><a href="#">Oceania Hotels</a></li>
                                                <li><a href="#">Other Hotels</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- accordion -->

                        <div class="hotel-widget">
                            <div class="hotel-skills">
                                <h3>Hotel Rating</h3>
                                <p>4.50 average base on 250 ratings.</p>

                                <div class="hotel-progress clearfix">
                                    <p>5 Star</p>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%; visibility: visible; animation-name: slideInLeft;">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </div><!-- end hotel-progress -->

                                <div class="hotel-progress clearfix">
                                    <p>4 Star</p>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%; visibility: visible; animation-name: slideInLeft;">
                                            <span class="sr-only">70% Complete</span>
                                        </div>
                                    </div>
                                </div><!-- end hotel-progress -->

                                <div class="hotel-progress clearfix">
                                    <p>3 Star</p>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%; visibility: visible; animation-name: slideInLeft;">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                </div><!-- end hotel-progress -->

                                <div class="hotel-progress clearfix">
                                    <p>2 Star</p>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%; visibility: visible; animation-name: slideInLeft;">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div><!-- end hotel-progress -->

                                <div class="hotel-progress clearfix">
                                    <p>1 Star</p>
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLeft" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%; visibility: visible; animation-name: slideInLeft;">
                                            <span class="sr-only">10% Complete</span>
                                        </div>
                                    </div>
                                </div><!-- end hotel-progress -->
                            </div><!-- end hotel skills -->
                        </div><!-- end hotel-widget -->
    </div>
</section>
