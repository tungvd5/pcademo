<?php
    use yii\helpers\Url;
?>
<header class="header">
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#topbarnav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="topbarnav">
                <ul class="nav navbar-nav">
                    <li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo Url::toRoute('/customer'); ?>">Home Default</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo Url::toRoute('/site/list'); ?>">Tour List</a></li>
                            <li><a href="<?php echo Url::toRoute('/site/single'); ?>">Tour Single</a></li>
                            <li><a href="<?php echo Url::toRoute('/site/checkout'); ?>">Tour Checkout</a></li>
                            <li><a href="<?php echo Url::toRoute('/site/about'); ?>">About Us</a></li>
                            <li><a href="<?php echo Url::toRoute('/site/contact');?>">Contact Us</a></li>
                            <li><a href="<?php echo Url::toRoute('/site/blog'); ?>">Our News</a></li>
                            <li><a href="<?php echo Url::toRoute('/site/blogdetail'); ?>">Single Blog</a></li>
                            <li><a href="<?php echo Url::toRoute('/site/error'); ?>">Error</a></li>
                            <li><a href="<?php echo Url::toRoute('/user/login'); ?>">Login</a></li>
                        </ul>
                    </li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="<?php echo Url::toRoute('/site/about'); ?>">About us</a></li>
                    <li><a href="<?php echo Url::toRoute('/site/contact'); ?>">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo Url::toRoute('/user/login'); ?>"><i class="fa fa-key"></i>Login</a></li>
                    <li><a href="<?php echo Url::toRoute('/customer/user/register'); ?>"><i class="fa fa-user"></i>Register</a></li>   
                    <li><a href="<?php echo Url::toRoute('/user/login'); ?>"><i class="fa fa-globe"></i> English</a></li>    
                    <li>
                        <span class="social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </span>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="clearfix"></div>

    <nav class="yamm navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand navbar-brand-centered">
                    <a href="index-2.html"><img src="<?= \Yii::getAlias('@asset') ?>/customer/images/logo.png" alt=""></a>
                </div>
            </div>
            
        </div><!-- /.container-fluid -->
    </nav>
</header>