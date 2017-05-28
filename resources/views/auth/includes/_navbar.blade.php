<div class="navbar navbar-tshop navbar-fixed-top megamenu" role="navigation">
    <div class="navbar-top">
        <div class="container">
            <div class="row">
                <div class="col-md-2" style="margin-top: 10px">
                    <ul class="userMenu ">
                        <li>
                            <a href="{{ url('/') }}">
                                <img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }}">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 hidden-sm hidden-xs" style="margin-top: 10px">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="q">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">

                </div>
                {{--<div class="col-lg-6 col-sm-6 col-xs-6 col-md-4 no-margin no-padding">
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
                </div>--}}
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
            {{--<a class="navbar-brand " href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }}">
            </a>--}}
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
                <li class="dropdown megamenu-fullwidth">
                    <a href="{{ route('brands.index') }}">
                        Brands
                    </a>
                </li>
            </ul>
            <div class="nav navbar-nav hidden-xs pull-right">
                <div class="dropdown cartMenu" style="margin-top: -20px">
                    <a href="#" class="dropdown-toggle">
                        <span class="cartRespons text-capitalize">&nbsp;
                            <span class="text-capitalize" style="margin-left: -5px">
                                <small>Hello. Sign in</small><br>
                            </span>
                            Accounts & List <b class="caret"> </b>
                        </span>
                    </a>
                </div>
                <div class="dropdown  cartMenu">
                    <a href="#" class="dropdown-toggle">
                        <i class="fa fa-shopping-cart"> </i>
                        <span class="cartRespons">&nbsp;CART (10)</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>