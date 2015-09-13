<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

    <!-- START @HEAD -->
    <head>
        <!-- START @META SECTION -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Blankon is a theme fullpack admin template powered by Twitter bootstrap 3 front-end framework. Included are multiple example pages, elements styles, and javascript widgets to get your project started.">
        <meta name="keywords" content="">
        <meta name="author" content="Djava UI">
        <title><?= $this->title ?></title>
        <!--/ END META SECTION -->

        <!-- START @FAVICONS -->
        <link href="<?php echo \Yii::getAlias('@asset') ?>/img/ico/yii/apple-touch-icon-144x144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
        <link href="<?php echo \Yii::getAlias('@asset') ?>/img/ico/yii/apple-touch-icon-114x114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
        <link href="<?php echo \Yii::getAlias('@asset') ?>/img/ico/yii/apple-touch-icon-72x72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
        <link href="<?php echo \Yii::getAlias('@asset') ?>/img/ico/yii/apple-touch-icon-57x57-precomposed.png" rel="apple-touch-icon-precomposed">
        <link href="<?php echo \Yii::getAlias('@asset') ?>/img/ico/yii/apple-touch-icon.png" rel="shortcut icon">
        <!-- END FAVICONS -->

        <!-- START @FONT STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Oswald:700,400" rel="stylesheet">
        <!--/ END FONT STYLES -->

        <link href="<?php echo \Yii::getAlias('@asset') ?>/global/plugins/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo \Yii::getAlias('@asset') ?>/global/plugins/bower_components/fontawesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo \Yii::getAlias('@asset') ?>/global/plugins/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <link href="<?php echo \Yii::getAlias('@asset') ?>/global/plugins/bower_components/dropzone/downloads/css/dropzone.css" rel="stylesheet">
        <link href="<?php echo \Yii::getAlias('@asset') ?>/global/plugins/bower_components/jquery.gritter/css/jquery.gritter.css" rel="stylesheet">
        <link href="<?php echo \Yii::getAlias('@asset') ?>/admin/css/reset.css" rel="stylesheet">
        <link href="<?php echo \Yii::getAlias('@asset') ?>/admin/css/layout.css" rel="stylesheet">
        <link href="<?php echo \Yii::getAlias('@asset') ?>/admin/css/components.css" rel="stylesheet">
        <link href="<?php echo \Yii::getAlias('@asset') ?>/admin/css/plugins.css" rel="stylesheet">
        <link href="<?php echo \Yii::getAlias('@asset') ?>/admin/css/yii-custom.css" rel="stylesheet">
        <link href="<?php echo \Yii::getAlias('@asset') ?>/admin/css/themes/default.theme.css" rel="stylesheet">
        <link href="<?php echo \Yii::getAlias('@asset') ?>/admin/css/custom.css" rel="stylesheet">
        <!--[if lte IE9]>
        <script src="/themes/global/plugins/bower_components/html5shiv/dist/html5shiv.min.js"></script>
        <![endif]-->
        <!--[if lte IE9]>
        <script src="/themes/global/plugins/bower_components/respond-minmax/src/respond.js"></script>
        <![endif]-->    

        <?php $this->head();  ?>
        
    </head>
