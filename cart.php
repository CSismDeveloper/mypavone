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
        <div class="breadcrumb-area bg--white-6 breadcrumb-bg-1 pt--60 pb--70 pt-lg--40 pb-lg--50 pt-md--30 pb-md--40" style="top:160px">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">Cart</h1>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="index.php">Home</a></li>
                            <li class="current"><span>Cart</span></li>
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
                    <div class="row pt--80 pb--80 pt-md--45 pt-sm--25 pb-md--60 pb-sm--40">
                        <div class="col-lg-8 mb-md--30">
                            <form class="cart-form" action="#">
                                <div class="row g-0">
                                    <div class="col-12">
                                        <div class="table-content table-responsive">
                                            <table class="table text-center">
                                                <thead>
                                                    <tr>
                                                        <th>&nbsp;</th>
                                                        <th>&nbsp;</th>
                                                        <th class="text-start">Product</th>
                                                        <th>price</th>
                                                        <th>quantity</th>
                                                        <th>total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="product-remove text-start"><a href=""><i
                                                                    class="dl-icon-close"></i></a></td>
                                                        <td class="product-thumbnail text-start">
                                                            <img src="assets/img/products/prod-14-2-70x81.jpg"
                                                                alt="Product Thumnail">
                                                        </td>
                                                        <td class="product-name text-start wide-column">
                                                            <h3>
                                                                <a href="product-details.html">Super skinny blazer</a>
                                                            </h3>
                                                        </td>
                                                        <td class="product-price">
                                                            <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                        </td>
                                                        <td class="product-quantity">
                                                            <div class="quantity">
                                                                <input type="number" class="quantity-input" name="qty"
                                                                    id="qty-1" value="1" min="1">
                                                            </div>
                                                        </td>
                                                        <td class="product-total-price">
                                                            <span class="product-price-wrapper">
                                                                <span class="money"><strong>$49.00</strong></span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="product-remove text-start"><a href=""><i
                                                                    class="dl-icon-close"></i></a></td>
                                                        <td class="product-thumbnail text-start">
                                                            <img src="assets/img/products/prod-9-1-70x81.jpg"
                                                                alt="Product Thumnail">
                                                        </td>
                                                        <td class="product-name text-start wide-column">
                                                            <h3>
                                                                <a href="product-details.html"> Jogging trousers</a>
                                                            </h3>
                                                        </td>
                                                        <td class="product-price">
                                                            <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                        </td>
                                                        <td class="product-quantity">
                                                            <div class="quantity">
                                                                <input type="number" class="quantity-input" name="qty"
                                                                    id="qty-2" value="1" min="1">
                                                            </div>
                                                        </td>
                                                        <td class="product-total-price">
                                                            <span class="product-price-wrapper">
                                                                <span class="money"><strong>$49.00</strong></span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="product-remove text-start"><a href=""><i
                                                                    class="dl-icon-close"></i></a></td>
                                                        <td class="product-thumbnail text-start">
                                                            <img src="assets/img/products/prod-10-1-70x81.jpg"
                                                                alt="Product Thumnail">
                                                        </td>
                                                        <td class="product-name text-start wide-column">
                                                            <h3>
                                                                <a href="product-details.html"> Grey blue leather
                                                                    backpack</a>
                                                            </h3>
                                                        </td>
                                                        <td class="product-price">
                                                            <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                        </td>
                                                        <td class="product-quantity">
                                                            <div class="quantity">
                                                                <input type="number" class="quantity-input" name="qty"
                                                                    id="qty-3" value="1" min="1">
                                                            </div>
                                                        </td>
                                                        <td class="product-total-price">
                                                            <span class="product-price-wrapper">
                                                                <span class="money"><strong>$49.00</strong></span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="product-remove text-start"><a href=""><i
                                                                    class="dl-icon-close"></i></a></td>
                                                        <td class="product-thumbnail text-start">
                                                            <img src="assets/img/products/prod-11-1-70x81.jpg"
                                                                alt="Product Thumnail">
                                                        </td>
                                                        <td class="product-name text-start wide-column">
                                                            <h3>
                                                                <a href="product-details.html">Dress with belt</a>
                                                            </h3>
                                                        </td>
                                                        <td class="product-price">
                                                            <span class="product-price-wrapper">
                                                                <span class="money">$49.00</span>
                                                            </span>
                                                        </td>
                                                        <td class="product-quantity">
                                                            <div class="quantity">
                                                                <input type="number" class="quantity-input" name="qty"
                                                                    id="qty-4" value="1" min="1">
                                                            </div>
                                                        </td>
                                                        <td class="product-total-price">
                                                            <span class="product-price-wrapper">
                                                                <span class="money"><strong>$49.00</strong></span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-0 border-top pt--20 mt--20">
                                    <div class="col-sm-6">
                                        <div class="coupon">
                                            <input type="text" id="coupon" name="coupon" class="cart-form__input"
                                                placeholder="Coupon Code">
                                            <button type="submit" class="cart-form__btn">Apply Coupon</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-sm-end">
                                        <button type="submit" class="cart-form__btn">Clear Cart</button>
                                        <button type="submit" class="cart-form__btn">Update Cart</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <div class="cart-collaterals">
                                <div class="cart-totals">
                                    <h5 class="mb--15">Cart totals</h5>
                                    <div class="table-content table-responsive">
                                        <table class="table order-table">
                                            <tbody>
                                                <tr>
                                                    <th>Subtotal</th>
                                                    <td>$196.00</td>
                                                </tr>
                                                <tr>
                                                    <th>Shipping</th>
                                                    <td>
                                                        <span>Flat rate: $20.00</span>
                                                        <div class="shipping-calculator-wrap">
                                                            <a href="#shipping_calculator" class="expand-btn">Calculate
                                                                Shipping</a>
                                                            <form id="shipping_calculator"
                                                                class="form shipping-calculator-form hide-in-default">
                                                                <div class="form__group mb--10">
                                                                    <select id="calc_shipping_country"
                                                                        name="calc_shipping_country"
                                                                        class="nice-select">
                                                                        <option value="">Select a country…</option>
                                                                        <option value="AF">Afghanistan</option>
                                                                        <option value="AL">Albania</option>
                                                                        <option value="DZ">Algeria</option>
                                                                        <option value="AR">Argentina</option>
                                                                        <option value="AM">Armenia</option>
                                                                        <option value="AU">Australia</option>
                                                                        <option value="AT">Austria</option>
                                                                        <option value="AZ">Azerbaijan</option>
                                                                        <option value="BH">Bahrain</option>
                                                                        <option value="BD" selected="selected">
                                                                            Bangladesh</option>
                                                                        <option value="BD">Brazil</option>
                                                                        <option value="CN">China</option>
                                                                        <option value="EG">Egypt</option>
                                                                        <option value="FR">France</option>
                                                                        <option value="DE">Germany</option>
                                                                        <option value="HK">Hong Kong</option>
                                                                        <option value="HU">Hungary</option>
                                                                        <option value="IS">Iceland</option>
                                                                        <option value="IN">India</option>
                                                                        <option value="ID">Indonesia</option>
                                                                        <option value="IR">Iran</option>
                                                                        <option value="IQ">Iraq</option>
                                                                        <option value="IE">Ireland</option>
                                                                        <option value="IT">Italy</option>
                                                                        <option value="JP">Japan</option>
                                                                        <option value="KW">Kuwait</option>
                                                                        <option value="MY">Malaysia</option>
                                                                        <option value="MV">Maldives</option>
                                                                        <option value="MX">Mexico</option>
                                                                        <option value="MC">Monaco</option>
                                                                        <option value="NP">Nepal</option>
                                                                        <option value="RU">Russia</option>
                                                                        <option value="KR">South Korea</option>
                                                                        <option value="SS">South Sudan</option>
                                                                        <option value="ES">Spain</option>
                                                                        <option value="LK">Sri Lanka</option>
                                                                        <option value="SD">Sudan</option>
                                                                        <option value="SZ">Swaziland</option>
                                                                        <option value="SE">Sweden</option>
                                                                        <option value="CH">Switzerland</option>
                                                                        <option value="TN">Tunisia</option>
                                                                        <option value="TR">Turkey</option>
                                                                        <option value="UA">Ukraine</option>
                                                                        <option value="AE">United Arab Emirates</option>
                                                                        <option value="GB">United Kingdom (UK)</option>
                                                                        <option value="US">United States (US)</option>
                                                                    </select>
                                                                </div>
                                                                <div class="form__group mb--10">
                                                                    <select id="calc_shipping_district"
                                                                        name="calc_shipping_district"
                                                                        class="nice-select">
                                                                        <option value="">Select a District…</option>
                                                                        <option>BARISAL</option>
                                                                        <option>BHOLA</option>
                                                                        <option>BANDARBAN</option>
                                                                        <option>BRAHMANBARIA</option>
                                                                        <option>CHANDPUR</option>
                                                                        <option>CHITTAGONG</option>
                                                                        <option>COMILLA</option>
                                                                        <option>COX'S BAZAR</option>
                                                                        <option>DHAKA</option>
                                                                        <option>FARIDPUR</option>
                                                                        <option>FENI</option>
                                                                        <option>GAZIPUR</option>
                                                                        <option>GOPALGANJ</option>
                                                                        <option>JAMALPUR</option>
                                                                        <option>KHAGRACHHARI</option>
                                                                        <option>KISHOREGONJ</option>
                                                                        <option>LAKSHMIPU</option>
                                                                        <option>RMADARIPUR</option>
                                                                        <option>MUNSHIGANJ</option>
                                                                        <option>MYMENSINGH</option>
                                                                        <option>NARAYANGANJ</option>
                                                                        <option>NARSINGDI</option>
                                                                        <option>NETRAKONA</option>
                                                                        <option>NOAKHALI</option>
                                                                        <option>RANGAMATI </option>
                                                                        <option>RAJBARI</option>
                                                                        <option>SHARIATPUR</option>
                                                                        <option>SHERPUR</option>
                                                                        <option>TANGAIL</option>
                                                                    </select>
                                                                </div>

                                                                <div class="form__group mb--10">
                                                                    <input type="text" name="calc_shipping_city"
                                                                        id="calc_shipping_city"
                                                                        placeholder="Town / City">
                                                                </div>

                                                                <div class="form__group mb--10">
                                                                    <input type="text" name="calc_shipping_zip"
                                                                        id="calc_shipping_zip"
                                                                        placeholder="Postcode / Zip">
                                                                </div>

                                                                <div class="form__group">
                                                                    <input type="submit" value="Update Totals">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td>
                                                        <span class="product-price-wrapper">
                                                            <span class="money">$226.00</span>
                                                        </span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <a href="checkout.php" class="btn btn-fullwidth btn-style-1">
                                    Proceed To Checkout
                                </a>
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
                                    <div class="product-action d-flex flex-row align-items-center mb--30">
                                        <div class="quantity">
                                            <input type="number" class="quantity-input" name="qty" id="qty" value="1"
                                                min="1">
                                        </div>
                                        <button type="button" class="btn btn-style-1 btn-semi-large add-to-cart"
                                            onclick="window.location.href='cart.html'">
                                            Add To Cart
                                        </button>
                                        <a href="wishlist.html"><i class="dl-icon-heart2"></i></a>
                                        <a href="compare.html"><i class="dl-icon-compare2"></i></a>
                                    </div>
                                    <div class="product-extra mb--30">
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