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
                        <h1 class="page-title">Checkout</h1>
                        <ul class="breadcrumb justify-content-center">
                            <li><a href="index.html">Home</a></li>
                            <li class="current"><span>Checkout</span></li>
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
                    <div class="row pt--80 pt-md--60 pt-sm--40">
                        <div class="col-12">
                            <!-- User Action Start -->
                            <div class="user-actions user-actions__coupon">
                                <div class="message-box mb--30 mb-sm--20">
                                    <p><i class="fa fa-exclamation-circle"></i> Have A Coupon? <a class="expand-btn"
                                            href="#coupon_info">Click Here To Enter Your Code.</a></p>
                                </div>
                                <div id="coupon_info" class="user-actions__form hide-in-default">
                                    <form action="#" class="form">
                                        <p>If you have a coupon code, please apply it below.</p>
                                        <div class="form__group d-sm-flex">
                                            <input type="text" name="coupon" id="coupon"
                                                class="form__input form__input--2 mr--20 mr-xs--0"
                                                placeholder="Coupon Code">
                                            <button type="submit" class="btn btn-medium btn-style-1">Apply
                                                Coupon</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- User Action End -->
                        </div>
                    </div>
                    <div class="row pb--80 pb-md--60 pb-sm--40">
                        <!-- Checkout Area Start -->
                        <div class="col-lg-6">
                            <div class="checkout-title mt--10">
                                <h2>Billing Details</h2>
                            </div>
                            <div class="checkout-form">
                                <form action="#" class="form form--checkout">
                                    <div class="row mb--30">
                                        <div class="form__group col-md-6 mb-sm--30">
                                            <label for="billing_fname" class="form__label form__label--2">First Name
                                                <span class="required">*</span></label>
                                            <input type="text" name="billing_fname" id="billing_fname"
                                                class="form__input form__input--2">
                                        </div>
                                        <div class="form__group col-md-6">
                                            <label for="billing_lname" class="form__label form__label--2">Last Name
                                                <span class="required">*</span></label>
                                            <input type="text" name="billing_lname" id="billing_lname"
                                                class="form__input form__input--2">
                                        </div>
                                    </div>
                                    <div class="row mb--30">
                                        <div class="form__group col-12">
                                            <label for="billing_company" class="form__label form__label--2">Company Name
                                                (Optional)</label>
                                            <input type="text" name="billing_company" id="billing_company"
                                                class="form__input form__input--2">
                                        </div>
                                    </div>
                                    <div class="row mb--30">
                                        <div class="form__group col-12">
                                            <label for="billing_country" class="form__label form__label--2">Country
                                                <span class="required">*</span></label>
                                            <select id="billing_country" name="billing_country"
                                                class="form__input form__input--2 nice-select">
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
                                                <option value="BD" selected="selected">Bangladesh</option>
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
                                    </div>
                                    <div class="row mb--30">
                                        <div class="form__group col-12">
                                            <label for="billing_streetAddress" class="form__label form__label--2">Street
                                                Address <span class="required">*</span></label>

                                            <input type="text" name="billing_streetAddress" id="billing_streetAddress"
                                                class="form__input form__input--2 mb--30"
                                                placeholder="House number and street name">

                                            <input type="text" name="billing_apartment" id="billing_apartment"
                                                class="form__input form__input--2"
                                                placeholder="Apartment, suite, unit etc. (optional)">
                                        </div>
                                    </div>
                                    <div class="row mb--30">
                                        <div class="form__group col-12">
                                            <label for="billing_city" class="form__label form__label--2">Town / City
                                                <span class="required">*</span></label>
                                            <input type="text" name="billing_city" id="billing_city"
                                                class="form__input form__input--2">
                                        </div>
                                    </div>
                                    <div class="row mb--30">
                                        <div class="form__group col-12">
                                            <label for="billing_state" class="form__label form__label--2">State / County
                                                <span class="required">*</span></label>
                                            <input type="text" name="billing_state" id="billing_state"
                                                class="form__input form__input--2">
                                        </div>
                                    </div>
                                    <div class="row mb--30">
                                        <div class="form__group col-12">
                                            <label for="billing_phone" class="form__label form__label--2">Phone <span
                                                    class="required">*</span></label>
                                            <input type="text" name="billing_phone" id="billing_phone"
                                                class="form__input form__input--2">
                                        </div>
                                    </div>
                                    <div class="row mb--30">
                                        <div class="form__group col-12">
                                            <label for="billing_email" class="form__label form__label--2">Email Address
                                                <span class="required">*</span></label>
                                            <input type="email" name="billing_email" id="billing_email"
                                                class="form__input form__input--2">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form__group col-12">
                                            <div class="custom-checkbox mb--20">
                                                <input type="checkbox" name="shipdifferetads" id="shipdifferetads"
                                                    class="form__checkbox">

                                                <label for="shipdifferetads"
                                                    class="form__label form__label--2 shipping-label">Ship To A
                                                    Different Address?</label>
                                            </div>
                                            <div class="ship-box-info hide-in-default mt--30">
                                                <div class="row mb--30">
                                                    <div class="form__group col-md-6 mb-sm--30">
                                                        <label for="shipping_fname"
                                                            class="form__label form__label--2">First Name <span
                                                                class="required">*</span></label>
                                                        <input type="text" name="shipping_fname" id="shipping_fname"
                                                            class="form__input form__input--2">
                                                    </div>
                                                    <div class="form__group col-md-6">
                                                        <label for="shipping_lname"
                                                            class="form__label form__label--2">Last Name <span
                                                                class="required">*</span></label>
                                                        <input type="text" name="shipping_lname" id="shipping_lname"
                                                            class="form__input form__input--2">
                                                    </div>
                                                </div>
                                                <div class="row mb--30">
                                                    <div class="form__group col-12">
                                                        <label for="shipping_company"
                                                            class="form__label form__label--2">Company Name
                                                            (Optional)</label>
                                                        <input type="text" name="shipping_company" id="shipping_company"
                                                            class="form__input form__input--2">
                                                    </div>
                                                </div>
                                                <div class="row mb--30">
                                                    <div class="form__group col-12">
                                                        <label for="shipping_country"
                                                            class="form__label form__label--2">Country <span
                                                                class="required">*</span></label>
                                                        <select id="shipping_country" name="shipping_country"
                                                            class="form__input form__input--2 nice-select">
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
                                                            <option value="BD" selected="selected">Bangladesh</option>
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
                                                </div>
                                                <div class="row mb--30">
                                                    <div class="form__group col-12">
                                                        <label for="shipping_streetAddress"
                                                            class="form__label form__label--2">Street Address <span
                                                                class="required">*</span></label>

                                                        <input type="text" name="shipping_streetAddress"
                                                            id="shipping_streetAddress"
                                                            class="form__input form__input--2 mb--30"
                                                            placeholder="House number and street name">

                                                        <input type="text" name="shipping_apartment"
                                                            id="shipping_apartment" class="form__input form__input--2"
                                                            placeholder="Apartment, suite, unit etc. (optional)">
                                                    </div>
                                                </div>
                                                <div class="row mb--30">
                                                    <div class="form__group col-12">
                                                        <label for="shipping_city"
                                                            class="form__label form__label--2">Town / City <span
                                                                class="required">*</span></label>
                                                        <input type="text" name="shipping_city" id="shipping_city"
                                                            class="form__input form__input--2">
                                                    </div>
                                                </div>
                                                <div class="row mb--30">
                                                    <div class="form__group col-12">
                                                        <label for="shipping_state"
                                                            class="form__label form__label--2">State / County <span
                                                                class="required">*</span></label>
                                                        <input type="text" name="shipping_state" id="shipping_state"
                                                            class="form__input form__input--2">
                                                    </div>
                                                </div>
                                                <div class="row mb--30">
                                                    <div class="form__group col-12">
                                                        <label for="shipping_phone"
                                                            class="form__label form__label--2">Phone <span
                                                                class="required">*</span></label>
                                                        <input type="text" name="shipping_phone" id="shipping_phone"
                                                            class="form__input form__input--2">
                                                    </div>
                                                </div>
                                                <div class="row mb--30">
                                                    <div class="form__group col-12">
                                                        <label for="shipping_email"
                                                            class="form__label form__label--2">Email Address <span
                                                                class="required">*</span></label>
                                                        <input type="email" name="shipping_email" id="shipping_email"
                                                            class="form__input form__input--2">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form__group col-12">
                                            <label for="orderNotes" class="form__label form__label--2">Order
                                                Notes</label>
                                            <textarea class="form__input form__input--2 form__input--textarea"
                                                id="orderNotes" name="orderNotes"
                                                placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xl-5 offset-xl-1 col-lg-6 mt-md--40">
                            <div class="order-details">
                                <div class="checkout-title mt--10">
                                    <h2>Your Order</h2>
                                </div>
                                <div class="table-content table-responsive mb--30">
                                    <table class="table order-table order-table-2">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th class="text-end">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>Aliquam lobortis est
                                                    <strong><span>&#10005;</span>1</strong>
                                                </th>
                                                <td class="text-end">$80.00</td>
                                            </tr>
                                            <tr>
                                                <th>Auctor gravida enim
                                                    <strong><span>&#10005;</span>1</strong>
                                                </th>
                                                <td class="text-end">$60.00</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr class="cart-subtotal">
                                                <th>Subtotal</th>
                                                <td class="text-end">$56.00</td>
                                            </tr>
                                            <tr class="shipping">
                                                <th>Shipping</th>
                                                <td class="text-end">
                                                    <span>Flat Rate; $20.00</span>
                                                </td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Order Total</th>
                                                <td class="text-end"><span class="order-total-ammount">$56.00</span>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="checkout-payment">
                                    <form action="#" class="payment-form">
                                        <div class="payment-group mb--10">
                                            <div class="payment-radio">
                                                <input type="radio" value="bank" name="payment-method" id="bank"
                                                    checked>
                                                <label class="payment-label" for="cheque">Direct Bank Transfer</label>
                                            </div>
                                            <div class="payment-info" data-method="bank">
                                                <p>Make your payment directly into our bank account. Please use your
                                                    Order ID as the payment reference. Your order will not be shipped
                                                    until the funds have cleared in our account.</p>
                                            </div>
                                        </div>
                                        <div class="payment-group mb--10">
                                            <div class="payment-radio">
                                                <input type="radio" value="cheque" name="payment-method" id="cheque">
                                                <label class="payment-label" for="cheque">
                                                    cheque payments
                                                </label>
                                            </div>
                                            <div class="payment-info cheque hide-in-default" data-method="cheque">
                                                <p>Please send a check to Store Name, Store Street, Store Town, Store
                                                    State / County, Store Postcode.</p>
                                            </div>
                                        </div>
                                        <div class="payment-group mb--10">
                                            <div class="payment-radio">
                                                <input type="radio" value="cash" name="payment-method" id="cash">
                                                <label class="payment-label" for="cash">
                                                    CASH ON DELIVERY
                                                </label>
                                            </div>
                                            <div class="payment-info cash hide-in-default" data-method="cash">
                                                <p>Pay with cash upon delivery.</p>
                                            </div>
                                        </div>
                                        <div class="payment-group mt--20">
                                            <p class="mb--15">Your personal data will be used to process your order,
                                                support your experience throughout this website, and for other purposes
                                                described in our privacy policy.</p>
                                            <button type="submit" class="btn btn-fullwidth btn-style-1">Place
                                                Order</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Checkout Area End -->
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