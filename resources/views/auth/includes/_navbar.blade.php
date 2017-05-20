<div class="navbar navbar-tshop navbar-fixed-top megamenu" role="navigation">
    <div class="navbar-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6">
                    <div class="pull-left ">
                        <ul class="userMenu ">
                            <li>
                                <a href="master.blade.php#">
                                    <i class="glyphicon glyphicon-info-sign hide visible-xs"></i>
                                </a>
                            </li>
                            <li class="phone-number">
                                <a href="callto:+233-544-909356">
                                    <span>
                                        <i class="glyphicon glyphicon-phone-alt "></i>
                                    </span>
                                    <span class="hidden-xs" style="margin-left:5px">
                                        +233-544-909356
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6 no-margin no-padding">
                    <div class="pull-right">
                        <ul class="userMenu">
                            <li>
                                <a href="master.blade.php#" data-toggle="modal" data-target="#ModalLogin">
                                    <span class="hidden-xs">Sign In</span>
                                    <i class="glyphicon glyphicon-log-in hide visible-xs "></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only"> Toggle navigation </span> <span class="icon-bar"> </span>
                <span class="icon-bar"> </span> <span class="icon-bar"> </span>
            </button>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-cart">
                <i class="fa fa-shopping-cart colorWhite"> </i>
                <span class="cartRespons colorWhite"> Cart (10) </span>
            </button>
            <a class="navbar-brand " href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }}">
            </a>
        </div>
        <div class="navbar-cart  collapse">
            <div class="cartMenu  col-lg-4 col-xs-12 col-md-4 ">
                <div class="w100 miniCartTable scroll-pane">
                    <table>
                        <tbody>
                        <tr class="miniCartProduct">
                            <td style="width:20%" class="miniCartProductThumb">
                                <div><a href="product-details.html"> <img src="images/product/3.jpg" alt="img"> </a></div>
                            </td>
                            <td style="width:40%">
                                <div class="miniCartDescription">
                                    <h4><a href="product-details.html"> TSHOP T shirt Black </a></h4>
                                    <span class="size"> 12 x 1.5 L </span>
                                    <div class="price"><span> GH₵8.80 </span></div>
                                </div>
                            </td>
                            <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                            <td style="width:15%" class="miniCartSubtotal"><span> GH₵8.80 </span></td>
                            <td style="width:5%" class="delete"><a> x </a></td>
                        </tr>
                        <tr class="miniCartProduct">
                            <td style="width:20%" class="miniCartProductThumb">
                                <div><a href="product-details.html"> <img src="images/product/2.jpg" alt="img"> </a></div>
                            </td>
                            <td style="width:40%">
                                <div class="miniCartDescription">
                                    <h4><a href="product-details.html"> TSHOP T shirt Black </a></h4>
                                    <span class="size"> 12 x 1.5 L </span>
                                    <div class="price"><span> GH₵8.80 </span></div>
                                </div>
                            </td>
                            <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                            <td style="width:15%" class="miniCartSubtotal"><span> GH₵8.80 </span></td>
                            <td style="width:5%" class="delete"><a> x </a></td>
                        </tr>
                        <tr class="miniCartProduct">
                            <td style="width:20%" class="miniCartProductThumb">
                                <div><a href="product-details.html"> <img src="images/product/5.jpg" alt="img"> </a></div>
                            </td>
                            <td style="width:40%">
                                <div class="miniCartDescription">
                                    <h4><a href="product-details.html"> TSHOP T shirt Black </a></h4>
                                    <span class="size"> 12 x 1.5 L </span>
                                    <div class="price"><span> GH₵8.80 </span></div>
                                </div>
                            </td>
                            <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                            <td style="width:15%" class="miniCartSubtotal"><span> GH₵8.80 </span></td>
                            <td style="width:5%" class="delete"><a> x </a></td>
                        </tr>
                        <tr class="miniCartProduct">
                            <td style="width:20%" class="miniCartProductThumb">
                                <div><a href="product-details.html"> <img src="images/product/3.jpg" alt="img"> </a></div>
                            </td>
                            <td style="width:40%">
                                <div class="miniCartDescription">
                                    <h4><a href="product-details.html"> TSHOP T shirt Black </a></h4>
                                    <span class="size"> 12 x 1.5 L </span>
                                    <div class="price"><span> GH₵8.80 </span></div>
                                </div>
                            </td>
                            <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                            <td style="width:15%" class="miniCartSubtotal"><span> GH₵8.80 </span></td>
                            <td style="width:5%" class="delete"><a> x </a></td>
                        </tr>
                        <tr class="miniCartProduct">
                            <td style="width:20%" class="miniCartProductThumb">
                                <div><a href="product-details.html"> <img src="images/product/3.jpg" alt="img"> </a></div>
                            </td>
                            <td style="width:40%">
                                <div class="miniCartDescription">
                                    <h4><a href="product-details.html"> TSHOP T shirt Black </a></h4>
                                    <span class="size"> 12 x 1.5 L </span>
                                    <div class="price"><span> GH₵8.80 </span></div>
                                </div>
                            </td>
                            <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                            <td style="width:15%" class="miniCartSubtotal"><span> GH₵8.80 </span></td>
                            <td style="width:5%" class="delete"><a> x </a></td>
                        </tr>
                        <tr class="miniCartProduct">
                            <td style="width:20%" class="miniCartProductThumb">
                                <div><a href="product-details.html"> <img src="images/product/4.jpg" alt="img"> </a></div>
                            </td>
                            <td style="width:40%">
                                <div class="miniCartDescription">
                                    <h4><a href="product-details.html"> TSHOP T shirt Black </a></h4>
                                    <span class="size"> 12 x 1.5 L </span>
                                    <div class="price"><span> GH₵8.80 </span></div>
                                </div>
                            </td>
                            <td style="width:10%" class="miniCartQuantity"><a> X 1 </a></td>
                            <td style="width:15%" class="miniCartSubtotal"><span> GH₵8.80 </span></td>
                            <td style="width:5%" class="delete"><a> x </a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="miniCartFooter  miniCartFooterInMobile text-right">
                    <h3 class="text-right subtotal"> Subtotal: GH₵210 </h3>
                    <a class="btn btn-sm btn-danger" href="cart.html"> <i class="fa fa-shopping-cart"> </i> VIEW CART
                    </a> <a href="checkout-0.html" class="btn btn-sm btn-primary"> CHECKOUT </a>
                </div>
            </div>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="#">
                        Products
                    </a>
                </li>
                <li class="dropdown megamenu-fullwidth">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="master.blade.php#">
                        Categories <b class="caret"> </b>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="megamenu-content ">
                            <ul class="col-lg-3  col-sm-3 col-md-3 unstyled noMarginLeft newCollectionUl">
                                <li class="no-border">
                                    <p class="promo-1"><strong> NEW COLLECTION </strong></p>
                                </li>
                                <li><a href="category.html"> ALL NEW PRODUCTS </a></li>
                                <li><a href="category.html"> NEW TOPS </a></li>
                                <li><a href="category.html"> NEW SHOES </a></li>
                                <li><a href="category.html"> NEW TSHIRT </a></li>
                                <li><a href="category.html"> NEW TSHOP </a></li>
                            </ul>
                            <ul class="col-lg-3  col-sm-3 col-md-3  col-xs-4">
                                <li><a class="newProductMenuBlock" href="product-details.html"> <img class="img-responsive" src="images/site/promo1.jpg" alt="product"> <span class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> JEANS </span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-4">
                                <li><a class="newProductMenuBlock" href="product-details.html"> <img class="img-responsive" src="images/site/promo2.jpg" alt="product"> <span class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> PARTY DRESS </span> </a></li>
                            </ul>
                            <ul class="col-lg-3  col-sm-3 col-md-3 col-xs-4">
                                <li><a class="newProductMenuBlock" href="product-details.html"> <img class="img-responsive" src="images/site/promo3.jpg" alt="product"> <span class="ProductMenuCaption"> <i class="fa fa-caret-right"> </i> SHOES </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown megamenu-80width ">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="master.blade.php#">
                        SHOPS <b class="caret"> </b>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="megamenu-content">
                            <div class="col-lg-12">
                                <ul class="brand-carousel">
                                    <li><a href="#"><img src="images/brand/1.gif" alt="img"></a></li>
                                    <li><a href="#"><img src="images/brand/2.png" alt="img"></a></li>
                                    <li><a href="#"><img src="images/brand/3.png" alt="img"></a></li>
                                    <li><a href="#"><img src="images/brand/4.png" alt="img"></a></li>
                                    <li><a href="#"><img src="images/brand/5.png" alt="img"></a></li>
                                    <li><a href="#"><img src="images/brand/6.png" alt="img"></a></li>
                                    <li><a href="#"><img src="images/brand/7.png" alt="img"></a></li>
                                    <li><a href="#"><img src="images/brand/8.png" alt="img"></a></li>
                                </ul>
                            </div>
                            <div class="col-lg-12" style="margin-top: 20px;">
                                <ul class="brand-carousel">
                                    <li><a href="#"><img src="images/brand/1.gif" alt="img"></a></li>
                                    <li><a href="#"><img src="images/brand/2.png" alt="img"></a></li>
                                    <li><a href="#"><img src="images/brand/3.png" alt="img"></a></li>
                                    <li><a href="#"><img src="images/brand/4.png" alt="img"></a></li>
                                    <li><a href="#"><img src="images/brand/5.png" alt="img"></a></li>
                                    <li><a href="#"><img src="images/brand/6.png" alt="img"></a></li>
                                    <li><a href="#"><img src="images/brand/7.png" alt="img"></a></li>
                                    <li><a href="#"><img src="images/brand/8.png" alt="img"></a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="nav navbar-nav text-right hidden-xs pull-right">
                <div class="dropdown  cartMenu">
                    <a href="{{ url('/cart') }}" class="dropdown-toggle">
                        <i class="fa fa-shopping-cart"> </i>
                        <span class="cartRespons">&nbsp;(10)</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>