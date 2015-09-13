
<?php $this->beginPage() ?>

    <?php echo $this->render("header_static") ?>
        
    <body class="page-session page-sound page-header-fixed page-sidebar-fixed">
    <?php $this->beginBody() ?>
        <!--[if lt IE 9]>
        <p class="upgrade-browser">Upps!! You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- START @WRAPPER -->
        <section id="wrapper">

            <!-- START @HEADER -->
            <?php echo $this->render("_header-admin") ?>
            <!--/ END HEADER -->

            <?php echo $this->render("_sidebar-left") ;?>
            <!--/ END SIDEBAR LEFT -->
                
            <!-- START @PAGE CONTENT -->
            <?php echo $content ; ?>
            <!--/ END PAGE CONTENT -->

            <!-- START @SIDEBAR RIGHT -->
            <?php echo $this->render("_sidebar-right") ;?>
            <!--/ END SIDEBAR RIGHT -->

        </section><!-- /#wrapper -->
        <!--/ END WRAPPER -->

        <!-- START @BACK TOP -->
        <div id="back-top" class="animated pulse circle">
            <i class="fa fa-angle-up"></i>
        </div><!-- /#back-top -->
        <!--/ END BACK TOP -->

    <?php $this->endBody() ?>

    <!-- START GOOGLE ANALYTICS -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-55892530-1', 'auto');
        ga('send', 'pageview');

    </script>
    <!--/ END GOOGLE ANALYTICS -->

    </body>
    <!--/ END BODY -->

</html>
<?php $this->endPage() ?>
