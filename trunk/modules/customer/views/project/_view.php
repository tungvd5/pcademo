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
            <h4><a href="<?php echo Yii::$app->urlManager->createUrl('/customer/project/view?id='.$model->id); ?>" title=""><?php echo $model->name; ?></a></h4>
            <span class="hotel-showcase-price"><i class="fa fa-diamond"></i> $12.00</span>
        </div><!-- end title -->
    </div><!-- end hotel-showcase -->
</div><!-- end col -->