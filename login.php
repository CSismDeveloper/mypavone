<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/img/icon.png">

    <!-- Title -->
    <title></title>

    <!-- ************************* CSS Files ************************* -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- dl Icon CSS -->
    <link rel="stylesheet" href="assets/css/dl-icon.css">

    <!-- All Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">

    <!-- Revoulation Slider CSS  -->
    <link rel="stylesheet" href="assets/css/revoulation.css">

    <!-- style CSS -->
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- modernizr JS
    ============================================ -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<style>
.main-navigation .mainmenu__link {
  color: #000000!important;
}

.header-toolbar__item > a {
  color: #000000!important;
}
</style>
<body>


    <div class="ai-preloader active">
        <div class="ai-preloader-inner h-100 d-flex align-items-center justify-content-center">
            <div class="ai-child ai-bounce1"></div>
            <div class="ai-child ai-bounce2"></div>
            <div class="ai-child ai-bounce3"></div>
        </div>
    </div>

    <!-- Main Wrapper Start -->
    <div class="wrapper">
    <?php include('header.php') ?>


        <!-- Breadcrumb area Start -->
        <div class="breadcrumb-area bg--white-6 breadcrumb-bg-1 pt--60 pb--70 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40"style="top:160px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">Login &amp; Register</h1>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="index.html">Home</a></li>
                            <li class="current"><span>Login Register</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb area End -->

        <!-- Main Content Wrapper Start -->
        <div id="content" class="main-content-wrapper" style="top:200px;position:relative;margin-bottom:250px">
            <div class="page-content-inner">
                <div class="container">
                    <div class="row pt--75 pt-md--55 pt-sm--35 pb--80 pb-md--60 pb-sm--40">
                    <div class="col-md-3 mb-sm--30">

                    </div>
                        <div class="col-md-6 mb-sm--30">
                            <div class="login-box">
                                <h4 class="mb--35 mb-sm--20 text-center">Login</h4>
                                <form class="form form--login">
                                    <div class="form__group mb--20">
                                        <label class="form__label form__label--2" for="username_email">Username or email
                                            address <span class="required">*</span></label>
                                        <input type="text" class="form__input form__input--3" id="username_email"
                                            name="username_email">
                                    </div>
                                    <div class="form__group mb--20">
                                        <label class="form__label form__label--2" for="password">Password <span
                                                class="required">*</span></label>
                                        <input type="password" class="form__input form__input--3" id="password"
                                            name="password">
                                    </div>


                                    <div class="row">
    <div class="d-flex align-items-center justify-content-evenly  w-100">
        <div class="form__group">
            <input type="submit" value="Log in" class="btn btn-submit btn-style-1">
        </div>
        <!-- Uncomment if needed -->
        <!-- <div class="form__group">
            <label class="form__label checkbox-label" for="store_session">
                <input type="checkbox" name="store_session" id="store_session">
                <span>Remember me</span>
            </label>
        </div> -->
        <div class="form__group">
    <a href="register.php" class="btn btn-submit btn-style-1">Register</a>
</div>

    </div>
</div>


                                    <a class="forgot-pass text-center" href="forget.php">Lost your password?</a>
                                </form>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content Wrapper Start -->


        <?php include('footer.php') ?>

        <!-- Global Overlay Start -->
        <div class="ai-global-overlay"></div>
        <!-- Global Overlay End -->

        <!-- Modal Start -->
        <div class="modal fade product-modal" id="productModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"><i class="dl-icon-close"></i></span>
                        </button>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="airi-element-carousel product-image-carousel nav-vertical-center nav-style-1"
                                    data-slick-options='{
                                    "slidesToShow": 1,
                                    "slidesToScroll": 1,
                                    "arrows": true,
                                    "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "dl-icon-left" },
                                    "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "dl-icon-right" }
                                }'>
                                    <div class="product-image">
                                        <div class="product-image--holder">
                                            <a href="product-details.html">
                                                <img src="assets/img/products/prod-9-1.jpg" alt="Product Image"
                                                    class="primary-image">
                                            </a>
                                        </div>
                                        <span class="product-badge sale">sale</span>
                                    </div>
                                    <div class="product-image">
                                        <div class="product-image--holder">
                                            <a href="product-details.html">
                                                <img src="assets/img/products/prod-10-1.jpg" alt="Product Image"
                                                    class="primary-image">
                                            </a>
                                        </div>
                                        <span class="product-badge new">new</span>
                                    </div>
                                    <div class="product-image">
                                        <div class="product-image--holder">
                                            <a href="product-details.html">
                                                <img src="assets/img/products/prod-11-1.jpg" alt="Product Image"
                                                    class="primary-image">
                                            </a>
                                        </div>
                                        <span class="product-badge hot">hot</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-box product-summary">
                                    <div class="product-navigation mb--10">
                                        <a href="#" class="prev"><i class="dl-icon-left"></i></a>
                                        <a href="#" class="next"><i class="dl-icon-right"></i></a>
                                    </div>
                                    <h3 class="product-title mb--15">Waxed-effect pleated skirt</h3>
                                    <span class="product-price-wrapper mb--20">
                                        <span class="money">$49.00</span>
                                        <span class="product-price-old">
                                            <span class="money">$60.00</span>
                                        </span>
                                    </span>
                                    <p class="product-short-description mb--25 mb-md--20">Donec accumsan auctor iaculis.
                                        Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus,
                                        ultrices justo eget, sodales orci. Aliquam egestas libero ac turpis pharetra, in
                                        vehicula lacus scelerisque. Vestibulum ut sem laoreet, feugiat tellus at,
                                        hendrerit arcu.</p>
                                    <div class="product-action d-flex flex-row align-items-center mb--30 mb-md--20">
                                        <div class="quantity">
                                            <input type="number" class="quantity-input" name="qty" id="quick-qty"
                                                value="1" min="1">
                                        </div>
                                        <button type="button" class="btn btn-style-1 btn-semi-large add-to-cart"
                                            onclick="window.location.href='cart.html'">
                                            Add To Cart
                                        </button>
                                        <a href="wishlist.html"><i class="dl-icon-heart2"></i></a>
                                        <a href="compare.html"><i class="dl-icon-compare2"></i></a>
                                    </div>
                                    <div class="product-extra mb--30 mb-md--20">
                                        <a href="#" class="font-size-12"><i class="fa fa-map-marker"></i>Find store near
                                            you</a>
                                        <a href="#" class="font-size-12"><i class="fa fa-exchange"></i>Delivery and
                                            return</a>
                                    </div>
                                    <div
                                        class="product-summary-footer d-flex justify-content-between flex-sm-row flex-column flex-sm-row flex-column">
                                        <div class="product-meta">
                                            <span class="sku_wrapper font-size-12">SKU: <span class="sku">REF.
                                                    LA-887</span></span>
                                            <span class="posted_in font-size-12">Categories: <a href="shop-sidebar.html"
                                                    rel="tag">Fashions</a></span>
                                        </div>
                                        <div class="product-share-box">
                                            <span class="font-size-12">Share With</span>
                                            <!-- Social Icons Start Here -->
                                            <ul class="social social-small">
                                                <li class="social__item">
                                                    <a href="https://facebook.com" class="social__link">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li class="social__item">
                                                    <a href="https://twitter.com" class="social__link">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li class="social__item">
                                                    <a href="https://plus.google.com" class="social__link">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                </li>
                                                <li class="social__item">
                                                    <a href="https://plus.google.com" class="social__link">
                                                        <i class="fa fa-pinterest-p"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- Social Icons End Here -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal End -->



    </div>
    <!-- Main Wrapper End -->


    <!-- ************************* JS Files ************************* -->

    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery.min.js"></script>

    <!-- Bootstrap and Popper Bundle JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- All Plugins Js -->
    <script src="assets/js/plugins.js"></script>

    <!-- Ajax Mail Js -->
    <script src="assets/js/ajax-mail.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- REVOLUTION JS FILES -->
    <script src="assets/js/revoulation/jquery.themepunch.tools.min.js"></script>
    <script src="assets/js/revoulation/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="assets/js/revoulation/extensions/revolution.extension.actions.min.js"></script>
    <script src="assets/js/revoulation/extensions/revolution.extension.carousel.min.js"></script>
    <script src="assets/js/revoulation/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="assets/js/revoulation/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="assets/js/revoulation/extensions/revolution.extension.migration.min.js"></script>
    <script src="assets/js/revoulation/extensions/revolution.extension.navigation.min.js"></script>
    <script src="assets/js/revoulation/extensions/revolution.extension.parallax.min.js"></script>
    <script src="assets/js/revoulation/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="assets/js/revoulation/extensions/revolution.extension.video.min.js"></script>

    <!-- REVOLUTION ACTIVE JS FILES -->
    <script src="assets/js/revoulation.js"></script>

</body>

</html>