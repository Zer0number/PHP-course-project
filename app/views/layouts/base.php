<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Resta - <?=$title?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="<?=self::RES?>/img/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="<?=self::RES?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=self::RES?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=self::RES?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?=self::RES?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=self::RES?>/css/themify-icons.css">
    <link rel="stylesheet" href="<?=self::RES?>/css/gijgo.css">
    <link rel="stylesheet" href="<?=self::RES?>/css/nice-select.css">
    <link rel="stylesheet" href="<?=self::RES?>/css/flaticon.css">
    <link rel="stylesheet" href="<?=self::RES?>/css/slicknav.css">
    <link rel="stylesheet" href="<?=self::RES?>/css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <?php include('app/views/includes/nav.php'); ?>
    </header>
    <!-- header-end -->

    <?php include($this->contentPath); ?>

    <!-- footer_start  -->
    <footer class="footer">
    <?php include('app/views/includes/footer.php'); ?>
    </footer>
    <!-- footer_end  -->

    <!-- JS here -->
    <script src="<?=self::RES?>/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="<?=self::RES?>/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?=self::RES?>/js/popper.min.js"></script>
    <script src="<?=self::RES?>/js/bootstrap.min.js"></script>
    <script src="<?=self::RES?>/js/owl.carousel.min.js"></script>
    <script src="<?=self::RES?>/js/isotope.pkgd.min.js"></script>
    <script src="<?=self::RES?>/js/ajax-form.js"></script>
    <script src="<?=self::RES?>/js/waypoints.min.js"></script>
    <script src="<?=self::RES?>/js/jquery.counterup.min.js"></script>
    <script src="<?=self::RES?>/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?=self::RES?>/js/scrollIt.js"></script>
    <script src="<?=self::RES?>/js/jquery.scrollUp.min.js"></script>
    <script src="<?=self::RES?>/js/wow.min.js"></script>
    <script src="<?=self::RES?>/js/gijgo.min.js"></script>
    <script src="<?=self::RES?>/js/nice-select.min.js"></script>
    <script src="<?=self::RES?>/js/jquery.slicknav.min.js"></script>
    <script src="<?=self::RES?>/js/jquery.magnific-popup.min.js"></script>
    <script src="<?=self::RES?>/js/plugins.js"></script>

    <!--contact js-->
    <script src="<?=self::RES?>/js/contact.js"></script>
    <script src="<?=self::RES?>/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?=self::RES?>/js/jquery.form.js"></script>
    <script src="<?=self::RES?>/js/jquery.validate.min.js"></script>
    <script src="<?=self::RES?>/js/mail-script.js"></script>

    <script src="<?=self::RES?>/js/main.js"></script>

    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-calendar-o"></span>'
            }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-calendar-o"></span>'
            }

        });
    </script>

    <script src="<?=$script?>"></script>
</body>

</html>