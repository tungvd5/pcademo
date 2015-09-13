<?php $this->beginPage() ?>

<?php echo $this->render("header_static") ?>

<body>
    <?php $this->beginBody() ?>
    <div id="loader">
        <div class="loader-container">
            <h3 class="loader-back-text"><img src="<?= \Yii::getAlias('@asset') ?>/customer/images/loader.gif" alt="" class="loader"></h3>
        </div>
    </div>
    
    <div id="wrapper">
        
        <?php echo $this->render("header") ?>

        <!-- START @PAGE CONTENT -->
            <?php echo $content ; ?>
        <!--/ END PAGE CONTENT -->

        
        <?php echo $this->render("footer") ?>

    </div><!-- end wrapper -->

    <?php $this->endBody() ?>

    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="<?= \Yii::getAlias('@asset') ?>/customer/js/jquery.min.js"></script>
    <script src="<?= \Yii::getAlias('@asset') ?>/customer/js/bootstrap.min.js"></script>
    <script src="<?= \Yii::getAlias('@asset') ?>/customer/js/retina.js"></script>
    <script src="<?= \Yii::getAlias('@asset') ?>/customer/js/wow.js"></script>
    <script src="<?= \Yii::getAlias('@asset') ?>/customer/js/parallax.js"></script>
    <script src="<?= \Yii::getAlias('@asset') ?>/customer/js/flexslider.js"></script>
    <script src="<?= \Yii::getAlias('@asset') ?>/customer/js/custom.js"></script>
    <script src="<?= \Yii::getAlias('@asset') ?>/customer/js/jquery.spinner.js"></script>
    <script src="<?= \Yii::getAlias('@asset') ?>/customer/js/carousel.js"></script>
    <script src="<?= \Yii::getAlias('@asset') ?>/customer/js/owl-script.js"></script>
    <!-- PORTFOLIO -->
    <script src="<?= \Yii::getAlias('@asset') ?>/customer/js/isotope.js"></script>
    <script src="<?= \Yii::getAlias('@asset') ?>/customer/js/imagesloaded.pkgd.js"></script>
    <script src="<?= \Yii::getAlias('@asset') ?>/customer/js/masonry-home.js"></script>  
    <!-- SLIDER REV -->
    <script src="<?= \Yii::getAlias('@asset') ?>/customer/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?= \Yii::getAlias('@asset') ?>/customer/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script>
    jQuery(document).ready(function() {
        jQuery('.tp-banner').show().revolution(
            {
            dottedOverlay:"none",
            delay:16000,
            startwidth:1170,
            startheight:720,
            hideThumbs:200,     
            thumbWidth:100,
            thumbHeight:50,
            thumbAmount:5,  
            navigationType:"none",
            navigationArrows:"solo",
            navigationStyle:"preview3",  
            touchenabled:"on",
            onHoverStop:"on",
            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,          
            parallax:"mouse",
            parallaxBgFreeze:"on",
            parallaxLevels:[10,7,4,3,2,5,4,3,2,1],
            parallaxDisableOnMobile:"off",           
            keyboardNavigation:"off",   
            navigationHAlign:"center",
            navigationVAlign:"bottom",
            navigationHOffset:0,
            navigationVOffset:20,
            soloArrowLeftHalign:"left",
            soloArrowLeftValign:"center",
            soloArrowLeftHOffset:20,
            soloArrowLeftVOffset:0,
            soloArrowRightHalign:"right",
            soloArrowRightValign:"center",
            soloArrowRightHOffset:20,
            soloArrowRightVOffset:0,  
            shadow:0,
            fullWidth:"on",
            fullScreen:"off",
            spinner:"spinner4",  
            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,
            shuffle:"off",  
            autoHeight:"off",           
            forceFullWidth:"off",                         
            hideThumbsOnMobile:"off",
            hideNavDelayOnMobile:1500,            
            hideBulletsOnMobile:"off",
            hideArrowsOnMobile:"off",
            hideThumbsUnderResolution:0,
            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            startWithSlide:0,
            fullScreenOffsetContainer: ""  
            }); 
        });
    </script>

</body>

<!-- Mirrored from templatevisual.com/demo/blue-bird/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Aug 2015 02:25:57 GMT -->
</html>
<?php $this->endPage() ?>