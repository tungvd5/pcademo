<?php
use app\assets\admin\dashboard\DashboardAsset;

DashboardAsset::register($this);
    use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = Yii::t('app', 'Create User');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="section white">
    <div class="pagebefore"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-title text-center">
                <h1>Welcome <span>Guest</span></h1>
                <h4>Your dream is just click away</h4>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam <br>erat volutpat diam nonummy nibh euismod tincidunt ut laoreet.</p>
            </div><!-- end col -->
        </div><!-- end row -->
        
        <div id="sitewrapper" class="row">
            <div id="content" class="col-md-10 pull-right">

                <div class="row">
                    <div class="col-md-5 col-sm-6">
                        <div class="section-title">
                            <h3><?php echo Yii::t('app', 'Register an account'); ?></h3>
                        </div>
                        <?php echo $this->render('_form-resgister', [
                            'model' => $model,
                        ]) ?>
                    </div>

                    <div class="col-md-5 col-md-offset-2">
                        <div class="section-title">
                            <h3><?php echo Yii::t('app', 'Register an account'); ?></h3>
                        </div>

                        <form class="form-horizontal standardform row" role="form" id="comp1">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="name1" name="name1" placeholder="First name">
                                </div>
                                <br><br>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="name2" name="name2" placeholder="Last name">
                                </div>
                                <br><br>
                                <div class="col-sm-12">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                                </div>
                                <br><br>
                                <div class="col-sm-12">
                                    <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <a href="#" class="btn btn-primary btn-block">Create account</a>
                                </div>
                            </div>
                        </form>         
                    </div>
                </div><!-- end row -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
