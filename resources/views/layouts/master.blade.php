<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('ico/apple-touch-icon-144-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('ico/apple-touch-icon-114-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('ico/apple-touch-icon-72-precomposed.png') }}">
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <title>Shopperholic Store</title>

        <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
        <link id="pagestyle" rel="stylesheet" type="text/css" href="{{ asset('css/skin-5.css') }}">
        <link href="{{ asset('plugins/swiper-master/css/swiper.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script>
            paceOptions = {
                elements: true
            };
        </script>
        <script src="{{ asset('js/pace.min.js') }}"></script>
        <script type="text/javascript">
        function swapStyleSheet(sheet){
        document.getElementById('pagestyle').setAttribute('href', sheet);
        }
        </script>
        <style>.themeControll{background:#2d3e50;height:auto;width:100px;position:fixed;left:0;padding:20px;top:20%;z-index:999999;-webkit-transform:translateX(0);-moz-transform:translateX(0);-o-transform:translateX(0);-ms-transform:translateX(0);transform:translateX(0);opacity:1;-ms-filter:none;filter:none;-webkit-transition:opacity .5s linear,-webkit-transform .7s cubic-bezier(.56,.48,0,.99);-moz-transition:opacity .5s linear,-moz-transform .7s cubic-bezier(.56,.48,0,.99);-o-transition:opacity .5s linear,-o-transform .7s cubic-bezier(.56,.48,0,.99);-ms-transition:opacity .5s linear,-ms-transform .7s cubic-bezier(.56,.48,0,.99);transition:opacity .5s linear,transform .7s cubic-bezier(.56,.48,0,.99);}.themeControll.active{display:block;-webkit-transform:translateX(-100px);-moz-transform:translateX(-100px);-o-transform:translateX(-100px);-ms-transform:translateX(-1020px);transform:translateX(-100px);-webkit-transition:opacity .5s linear,-webkit-transform .7s cubic-bezier(.56,.48,0,.99);-moz-transition:opacity .5s linear,-moz-transform .7s cubic-bezier(.56,.48,0,.99);-o-transition:opacity .5s linear,-o-transform .7s cubic-bezier(.56,.48,0,.99);-ms-transition:opacity .5s linear,-ms-transform .7s cubic-bezier(.56,.48,0,.99);transition:opacity .5s linear,transform .7s cubic-bezier(.56,.48,0,.99);}.themeControll a{border-radius:3px;clear:both;display:block;height:25px;margin-bottom:4px;width:50px;}.tbtn{background:#2D3E50;color:#FFFFFF!important;font-size:30px;height:auto;padding:10px;position:absolute;right:-40px;top:0;width:40px;cursor:pointer;}@media (max-width: 780px) {.themeControll{display:none;}}</style>
    </head>
    <body>

        {{--Login & Register Modal--}}
        @include('auth.includes._login_and_register_modal')

        {{--Navbar--}}
        @include('auth.includes._navbar')

        @yield('content')

        <footer>
            <div class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
                            <h3>Support</h3>
                            <ul>
                                <li class="supportLi">
                                    <p> Lorem ipsum dolor sit amet, consectetur </p>
                                    <h4>
                                        <a class="inline" href="callto:+233-544-909356">
                                            <strong>
                                                <i class="fa fa-phone"></i>+233-544-909356
                                            </strong>
                                        </a>
                                    </h4>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-6">
                            <h3>Shop</h3>
                            <ul>
                                <li>
                                    <a href="master.blade.php#">Men's</a>
                                </li>
                                <li>
                                    <a href="master.blade.php#">Women's</a>
                                </li>
                                <li>
                                    <a href="master.blade.php#">Kids'</a>
                                </li>
                                <li>
                                    <a href="master.blade.php#">Shoes</a>
                                </li>
                                <li>
                                    <a href="master.blade.php#">Gift Cards</a>
                                </li>
                            </ul>
                        </div>
                        <div style="clear:both" class="hide visible-xs"></div>
                        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                            <h3>Information</h3>
                            <ul class="list-unstyled footer-nav">
                                <li>
                                    <a href="master.blade.php#">Questions?</a>
                                </li>
                                <li>
                                    <a href="master.blade.php#">Order Status</a>
                                </li>
                                <li>
                                    <a href="master.blade.php#">Sizing Charts</a>
                                </li>
                                <li>
                                    <a href="master.blade.php#">Return Policy </a>
                                </li>
                                <li>
                                    <a href="master.blade.php#">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                            <h3> My Account </h3>
                            <ul>
                                <li><a href="account.html"> My Account </a></li>
                                <li><a href="my-address.html"> My Address </a></li>
                                <li><a href="wishlist.html"> Wish List </a></li>
                                <li><a href="order-list.html"> Order list </a></li>
                                <li><a href="order-status.html"> Order Status </a></li>
                            </ul>
                        </div>
                        <div style="clear:both" class="hide visible-xs"></div>
                        <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                            <h3> Stay in touch </h3>
                            <ul>
                                <li>
                                    <div class="input-append newsLatterBox text-center">
                                        <input type="text" class="full text-center" placeholder="Email ">
                                        <button class="btn  bg-gray" type="button"> Subscribe <i class="fa fa-long-arrow-right"> </i></button>
                                    </div>
                                </li>
                            </ul>
                            <ul class="social">
                                <li><a href="http://facebook.com"> <i class=" fa fa-facebook"> &nbsp; </i> </a></li>
                                <li><a href="http://twitter.com"> <i class="fa fa-twitter"> &nbsp; </i> </a></li>
                                <li><a href="https://plus.google.com"> <i class="fa fa-google-plus"> &nbsp; </i> </a></li>
                                <li><a href="http://youtube.com"> <i class="fa fa-pinterest"> &nbsp; </i> </a></li>
                                <li><a href="http://youtube.com"> <i class="fa fa-youtube"> &nbsp; </i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <p class="pull-left">
                        &copy; Shopperholic <?php echo date("Y"); ?>. All right reserved.
                    </p>
                    <div class="pull-right paymentMethodImg">
                        <img height="30" class="pull-right" src="{{ asset('images/site/payment/master_card.png') }}" alt="img">
                        <img height="30" class="pull-right" src="{{ asset('images/site/payment/visa_card.png') }}" alt="img">
                        <img height="30" class="pull-right" src="{{ asset('images/site/payment/paypal.png') }}" alt="img">
                        <img height="30" class="pull-right" src="{{ asset('images/site/payment/american_express_card.png') }}" alt="img">
                        <img height="30" class="pull-right" src="{{ asset('images/site/payment/discover_network_card.png') }}" alt="img">
                        <img height="30" class="pull-right" src="{{ asset('images/site/payment/google_wallet.png') }}" alt="img">
                    </div>
                </div>
            </div>
        </footer>

        <script type="text/javascript" src="{{ asset('js/jquery/jquery-1.10.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('plugins/swiper-master/js/swiper.jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/plugins/plugins.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.cycle2.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.parallax-1.1.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/helper-plugins/jquery.mousewheel.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/jquery.mCustomScrollbar.js') }}"></script>
        <script type="text/javascript" src="{{ asset('plugins/icheck-1.x/icheck.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/grids.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/select2.full.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.touchspin.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/home.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

        @stack('additional_scripts')
    </body>
</html>