@extends('layouts.master')

@section('content')
    @include('layouts.includes._banner')
    <div class="container main-container">
        <div class="row featuredPostContainer globalPadding style2">
            <h3 class="section-title style2 text-center"><span>NEW ARRIVALS</span></h3>
            <div id="productslider" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>
                        <div class="image">
                            <div class="quickview">
                                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a>
                            </div>
                            <a href="product-details.html"><img src="images/product/34.jpg" alt="img" class="img-responsive"></a>
                            <div class="promotion"><span class="new-product"> NEW</span> <span class="discount">15% OFF</span></div>
                        </div>
                        <div class="description">
                            <h4><a href="product-details.html">consectetuer adipiscing </a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            <span class="size">XL / XXL / S </span>
                        </div>
                        <div class="price"><span>$25</span></div>
                        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
                <div class="item">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>
                        <div class="image">
                            <div class="quickview">
                                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a>
                            </div>
                            <a href="product-details.html"><img src="images/product/30.jpg" alt="img" class="img-responsive"></a>
                            <div class="promotion"><span class="discount">15% OFF</span></div>
                        </div>
                        <div class="description">
                            <h4><a href="product-details.html">luptatum zzril delenit</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            <span class="size">XL / XXL / S </span>
                        </div>
                        <div class="price"><span>$25</span></div>
                        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
                <div class="item">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>
                        <div class="image">
                            <div class="quickview">
                                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a>
                            </div>
                            <a href="product-details.html"><img src="images/product/36.jpg" alt="img" class="img-responsive"></a>
                            <div class="promotion"><span class="new-product"> NEW</span></div>
                        </div>
                        <div class="description">
                            <h4><a href="product-details.html">eleifend option </a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            <span class="size">XL / XXL / S </span>
                        </div>
                        <div class="price"><span>$25</span></div>
                        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
                <div class="item">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>
                        <div class="image">
                            <div class="quickview">
                                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a>
                            </div>
                            <a href="product-details.html"><img src="images/product/9.jpg" alt="img" class="img-responsive"></a>
                        </div>
                        <div class="description">
                            <h4><a href="product-details.html">mutationem consuetudium </a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            <span class="size">XL / XXL / S </span>
                        </div>
                        <div class="price"><span>$25</span></div>
                        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
                <div class="item">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>
                        <div class="image">
                            <div class="quickview">
                                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a>
                            </div>
                            <a href="product-details.html"><img src="images/product/12.jpg" alt="img" class="img-responsive"></a>
                        </div>
                        <div class="description">
                            <h4><a href="product-details.html">sequitur mutationem </a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            <span class="size">XL / XXL / S </span>
                        </div>
                        <div class="price"><span>$25</span></div>
                        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
                <div class="item">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>
                        <div class="image">
                            <div class="quickview">
                                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a>
                            </div>
                            <a href="product-details.html"><img src="images/product/13.jpg" alt="img" class="img-responsive"></a>
                        </div>
                        <div class="description">
                            <h4><a href="product-details.html">consuetudium lectorum.</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            <span class="size">XL / XXL / S </span>
                        </div>
                        <div class="price"><span>$25</span></div>
                        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
                <div class="item">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>
                        <div class="image">
                            <div class="quickview">
                                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a>
                            </div>
                            <a href="product-details.html"><img src="images/product/21.jpg" alt="img" class="img-responsive"></a>
                        </div>
                        <div class="description">
                            <h4><a href="product-details.html">parum claram</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            <span class="size">XL / XXL / S </span>
                        </div>
                        <div class="price"><span>$25</span></div>
                        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
                <div class="item">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>
                        <div class="image">
                            <div class="quickview">
                                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a>
                            </div>
                            <a href="product-details.html"><img src="images/product/24.jpg" alt="img" class="img-responsive"></a>
                        </div>
                        <div class="description">
                            <h4><a href="product-details.html">duis dolore </a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            <span class="size">XL / XXL / S </span>
                        </div>
                        <div class="price"><span>$25</span></div>
                        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
                <div class="item">
                    <div class="product">
                        <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left">
                            <i class="glyphicon glyphicon-heart"></i>
                        </a>
                        <div class="image">
                            <div class="quickview">
                                <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a>
                            </div>
                            <a href="product-details.html"><img src="images/product/15.jpg" alt="img" class="img-responsive"></a>
                        </div>
                        <div class="description">
                            <h4><a href="product-details.html">feugait nulla facilisi</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            <span class="size">XL / XXL / S </span>
                        </div>
                        <div class="price"><span>$25</span></div>
                        <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr class="no-margin-top">
    <div class="parallax-section parallax-image-1">
        <div class="container">
            <div class="row ">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="parallax-content clearfix">
                        <h1 class="parallaxPrce"> $200 </h1>
                        <h2 class="uppercase">FREE INTERNATIONAL SHIPPING! Get Free Shipping Coupons</h2>
                        <h3> Energistically develop parallel mindshare rather than premier deliverables. </h3>
                        <div style="clear:both"></div>
                        <a class="btn btn-discover"> <i class="fa fa-shopping-cart"></i> SHOP NOW </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container main-container">
        {{--<div class="morePost row featuredPostContainer style2 globalPaddingTop ">
            <h3 class="section-title style2 text-center"><span>FEATURES PRODUCT</span></h3>
            <div class="container">
                <div class="row xsResponse">
                    <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <div class="product">
                            <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left">
                                <i class="glyphicon glyphicon-heart"></i>
                            </a>
                            <div class="image">
                                <div class="quickview">
                                    <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a>
                                </div>
                                <a href="product-details.html"><img src="images/product/30.jpg" alt="img" class="img-responsive"></a>
                                <div class="promotion"><span class="new-product"> NEW</span> <span class="discount">15% OFF</span></div>
                            </div>
                            <div class="description">
                                <h4><a href="product-details.html">aliquam erat volutpat</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                <span class="size">XL / XXL / S </span>
                            </div>
                            <div class="price"><span>$25</span> <span class="old-price">$75</span></div>
                            <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                        </div>
                    </div>
                    <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <div class="product">
                            <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left">
                                <i class="glyphicon glyphicon-heart"></i>
                            </a>
                            <div class="image">
                                <div class="quickview">
                                    <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a>
                                </div>
                                <a href="product-details.html"><img src="images/product/31.jpg" alt="img" class="img-responsive"></a>
                                <div class="promotion"><span class="discount">15% OFF</span></div>
                            </div>
                            <div class="description">
                                <h4><a href="product-details.html">ullamcorper suscipit lobortis </a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                <span class="size">XL / XXL / S </span>
                            </div>
                            <div class="price"><span>$25</span></div>
                            <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                        </div>
                    </div>
                    <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <div class="product">
                            <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left">
                                <i class="glyphicon glyphicon-heart"></i>
                            </a>
                            <div class="image">
                                <div class="quickview">
                                    <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a>
                                </div>
                                <a href="product-details.html"><img src="images/product/34.jpg" alt="img" class="img-responsive"></a>
                                <div class="promotion"><span class="new-product"> NEW</span></div>
                            </div>
                            <div class="description">
                                <h4><a href="product-details.html">demonstraverunt lectores </a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                <span class="size">XL / XXL / S </span>
                            </div>
                            <div class="price"><span>$25</span></div>
                            <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                        </div>
                    </div>
                    <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <div class="product">
                            <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left">
                                <i class="glyphicon glyphicon-heart"></i>
                            </a>
                            <div class="image">
                                <div class="quickview">
                                    <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a>
                                </div>
                                <a href="product-details.html"><img src="images/product/12.jpg" alt="img" class="img-responsive"></a>
                            </div>
                            <div class="description">
                                <h4><a href="product-details.html">humanitatis per</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                <span class="size">XL / XXL / S </span>
                            </div>
                            <div class="price"><span>$25</span></div>
                            <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                        </div>
                    </div>
                    <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <div class="product">
                            <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left">
                                <i class="glyphicon glyphicon-heart"></i>
                            </a>
                            <div class="image">
                                <div class="quickview">
                                    <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a>
                                </div>
                                <a href="product-details.html"><img src="images/product/33.jpg" alt="img" class="img-responsive"></a>
                            </div>
                            <div class="description">
                                <h4><a href="product-details.html">Eodem modo typi</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                <span class="size">XL / XXL / S </span>
                            </div>
                            <div class="price"><span>$25</span></div>
                            <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                        </div>
                    </div>
                    <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <div class="product">
                            <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left">
                                <i class="glyphicon glyphicon-heart"></i>
                            </a>
                            <div class="image">
                                <div class="quickview">
                                    <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a>
                                </div>
                                <a href="product-details.html"><img src="images/product/10.jpg" alt="img" class="img-responsive"></a>
                            </div>
                            <div class="description">
                                <h4><a href="product-details.html">sequitur mutationem </a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                <span class="size">XL / XXL / S </span>
                            </div>
                            <div class="price"><span>$25</span></div>
                            <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                        </div>
                    </div>
                    <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <div class="product">
                            <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left">
                                <i class="glyphicon glyphicon-heart"></i>
                            </a>
                            <div class="image">
                                <div class="quickview">
                                    <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a>
                                </div>
                                <a href="product-details.html"><img src="images/product/37.jpg" alt="img" class="img-responsive"></a>
                            </div>
                            <div class="description">
                                <h4><a href="product-details.html">consuetudium lectorum.</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                <span class="size">XL / XXL / S </span>
                            </div>
                            <div class="price"><span>$25</span></div>
                            <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                        </div>
                    </div>
                    <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <div class="product">
                            <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left">
                                <i class="glyphicon glyphicon-heart"></i>
                            </a>
                            <div class="image">
                                <div class="quickview">
                                    <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a>
                                </div>
                                <a href="product-details.html"><img src="images/product/35.jpg" alt="img" class="img-responsive"></a>
                            </div>
                            <div class="description">
                                <h4><a href="product-details.html">parum claram</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                <span class="size">XL / XXL / S </span>
                            </div>
                            <div class="price"><span>$25</span> <span class="old-price">$75</span></div>
                            <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                        </div>
                    </div>
                    <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <div class="product">
                            <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left">
                                <i class="glyphicon glyphicon-heart"></i>
                            </a>
                            <div class="image">
                                <div class="quickview">
                                    <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a>
                                </div>
                                <a href="product-details.html"><img src="images/product/13.jpg" alt="img" class="img-responsive"></a>
                            </div>
                            <div class="description">
                                <h4><a href="product-details.html">duis dolore </a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                <span class="size">XL / XXL / S </span>
                            </div>
                            <div class="price"><span>$25</span></div>
                            <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                        </div>
                    </div>
                    <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <div class="product">
                            <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left">
                                <i class="glyphicon glyphicon-heart"></i>
                            </a>
                            <div class="image">
                                <div class="quickview">
                                    <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a>
                                </div>
                                <a href="product-details.html"><img src="images/product/21.jpg" alt="img" class="img-responsive"></a>
                                <div class="promotion"><span class="new-product"> NEW</span> <span class="discount">15% OFF</span></div>
                            </div>
                            <div class="description">
                                <h4><a href="product-details.html">aliquam erat volutpat</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                <span class="size">XL / XXL / S </span>
                            </div>
                            <div class="price"><span>$25</span></div>
                            <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                        </div>
                    </div>
                    <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <div class="product">
                            <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left">
                                <i class="glyphicon glyphicon-heart"></i>
                            </a>
                            <div class="image">
                                <div class="quickview">
                                    <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a>
                                </div>
                                <a href="product-details.html"><img src="images/product/14.jpg" alt="img" class="img-responsive"></a>
                                <div class="promotion"><span class="discount">15% OFF</span></div>
                            </div>
                            <div class="description">
                                <h4><a href="product-details.html">ullamcorper suscipit lobortis </a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                <span class="size">XL / XXL / S </span>
                            </div>
                            <div class="price"><span>$25</span></div>
                            <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                        </div>
                    </div>
                    <div class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                        <div class="product">
                            <a class="add-fav tooltipHere" data-toggle="tooltip" data-original-title="Add to Wishlist" data-placement="left">
                                <i class="glyphicon glyphicon-heart"></i>
                            </a>
                            <div class="image">
                                <div class="quickview">
                                    <a data-toggle="modal" class="btn btn-xs btn-quickview" href="ajax/product.html" data-target="#productSetailsModalAjax">Quick View </a>
                                </div>
                                <a href="product-details.html"><img src="images/product/17.jpg" alt="img" class="img-responsive"></a>
                                <div class="promotion"><span class="new-product"> NEW</span></div>
                            </div>
                            <div class="description">
                                <h4><a href="product-details.html">demonstraverunt lectores </a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                <span class="size">XL / XXL / S </span>
                            </div>
                            <div class="price"><span>$25</span></div>
                            <div class="action-control"><a class="btn btn-primary"> <span class="add2cart"><i class="glyphicon glyphicon-shopping-cart"> </i> Add to cart </span> </a></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="load-more-block text-center"><a class="btn btn-thin" href="master.blade.php#"> <i class="fa fa-plus-sign">+</i> load more products</a></div>
                </div>
            </div>
        </div>--}}
        <hr class="no-margin-top">
        <div class="width100 section-block">
            <div class="row featureImg">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <a href="category.html"><img src="images/site/new-collection-1.jpg" class="img-responsive" alt="img"></a>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <a href="category.html"><img src="images/site/new-collection-2.jpg" class="img-responsive" alt="img"></a>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <a href="category.html"><img src="images/site/new-collection-3.jpg" class="img-responsive" alt="img"></a>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <a href="category.html"><img src="images/site/new-collection-4.jpg" class="img-responsive" alt="img"></a>
                </div>
            </div>
        </div>
        <div class="width100 section-block">
            <h3 class="section-title"><span> BRAND</span> <a id="nextBrand" class="link pull-right carousel-nav"> <i class="fa fa-angle-right"></i></a> <a id="prevBrand" class="link pull-right carousel-nav"> <i class="fa fa-angle-left"></i> </a></h3>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="no-margin brand-carousel owl-carousel owl-theme">
                        <li><a><img src="images/brand/1.gif" alt="img"></a></li>
                        <li><img src="images/brand/2.png" alt="img"></li>
                        <li><img src="images/brand/3.png" alt="img"></li>
                        <li><img src="images/brand/4.png" alt="img"></li>
                        <li><img src="images/brand/5.png" alt="img"></li>
                        <li><img src="images/brand/6.png" alt="img"></li>
                        <li><img src="images/brand/7.png" alt="img"></li>
                        <li><img src="images/brand/8.png" alt="img"></li>
                        <li><img src="images/brand/1.gif" alt="img"></li>
                        <li><img src="images/brand/2.png" alt="img"></li>
                        <li><img src="images/brand/3.png" alt="img"></li>
                        <li><img src="images/brand/4.png" alt="img"></li>
                        <li><img src="images/brand/5.png" alt="img"></li>
                        <li><img src="images/brand/6.png" alt="img"></li>
                        <li><img src="images/brand/7.png" alt="img"></li>
                        <li><img src="images/brand/8.png" alt="img"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax-section parallax-image-2" style="margin-top: -250px">
        <div class="w100 parallax-section-overley">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="parallax-content clearfix">
                            <h1 class="xlarge"> Trusted Seller 500+ </h1>
                            <h5 class="parallaxSubtitle"> Lorem ipsum dolor sit amet consectetuer </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
