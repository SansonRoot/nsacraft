@extends('layouts.base')

<<<<<<< HEAD
@section('title','A Future for HandCraftings')
=======
@section('title')
    NsaCraft
 @endsection
>>>>>>> 37e7689f442f17b65c4dcb367b9900a0702daa20

@section('content')
    @include('includes.slider')

    <!--=== Product Content ===-->
    <div class="container content-md">
        <!--=== Illustration v1 ===-->
        <div class="row margin-bottom-60">
            <div class="col-md-6 md-margin-bottom-30">
                <div class="overflow-h">
                    <div class="illustration-v1 illustration-img1">
                        <div class="illustration-bg">
                            <div class="illustration-ads ad-details-v1">
                                <h3>NEW YEAR <strong>SALE</strong> 30% - 60% <strong>off</strong></h3>
                                <a class="btn-u btn-brd btn-brd-hover btn-u-light" href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="overflow-h">
                    <a class="illustration-v1 illustration-img2" href="#">
					<span class="illustration-bg">
						<span class="illustration-ads ad-details-v2">
							<span class="item-time">Spring 2014</span>
							<span class="item-name">Lacoste</span>
						</span>
					</span>
                    </a>
                </div>
            </div>
        </div><!--/end row-->
        <!--=== End Illustration v1 ===-->

        <div class="heading heading-v1 margin-bottom-20">
            <h2>Featured products</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed odio elit, ultrices vel cursus sed, placerat ut leo. Phasellus in magna erat. Etiam gravida convallis augue non tincidunt. Nunc lobortis dapibus neque quis lacinia. Nam dapibus tellus sit amet odio venenatis</p>
        </div>

        <!--=== Illustration v2 ===-->
        <div class="illustration-v2 margin-bottom-60">
            <div class="customNavigation margin-bottom-25">
                <a class="owl-btn prev rounded-x"><i class="fa fa-angle-left"></i></a>
                <a class="owl-btn next rounded-x"><i class="fa fa-angle-right"></i></a>
            </div>

            <ul class="list-inline owl-slider">
                <li class="item">
                    <div class="product-img">
                        <a href="shop-ui-inner.html"><img class="full-width img-responsive" src="assets/img/blog/09.jpg" alt=""></a>
                        <a class="product-review" href="shop-ui-inner.html">Quick review</a>
                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                    <div class="product-description product-description-brd">
                        <div class="overflow-h margin-bottom-5">
                            <div class="pull-left">
                                <h4 class="title-price"><a href="shop-ui-inner.html">Double-breasted</a></h4>
                                <span class="gender text-uppercase">Men</span>
                                <span class="gender">Suits - Blazers</span>
                            </div>
                            <div class="product-price">
                                <span class="title-price">$95.00</span>
                            </div>
                        </div>
                        <ul class="list-inline product-ratings">
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                            <li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
                        </ul>
                    </div>
                </li>
                <li class="item">
                    <div class="product-img">
                        <a href="shop-ui-inner.html"><img class="full-width img-responsive" src="assets/img/blog/26.jpg" alt=""></a>
                        <a class="product-review" href="shop-ui-inner.html">Quick review</a>
                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                    <div class="product-description product-description-brd">
                        <div class="overflow-h margin-bottom-5">
                            <div class="pull-left">
                                <h4 class="title-price"><a href="shop-ui-inner.html">Double-breasted</a></h4>
                                <span class="gender text-uppercase">Women</span>
                                <span class="gender">Suits - Blazers</span>
                            </div>
                            <div class="product-price">
                                <span class="title-price">$60.00</span>
                                <span class="title-price line-through">$95.00</span>
                            </div>
                        </div>
                        <ul class="list-inline product-ratings">
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                            <li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
                        </ul>
                    </div>
                </li>
                <li class="item">
                    <div class="product-img">
                        <a href="shop-ui-inner.html"><img class="full-width img-responsive" src="assets/img/blog/11.jpg" alt=""></a>
                        <a class="product-review" href="shop-ui-inner.html">Quick review</a>
                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        <div class="shop-rgba-red rgba-banner">Out of stock</div>
                    </div>
                    <div class="product-description product-description-brd">
                        <div class="overflow-h margin-bottom-5">
                            <div class="pull-left">
                                <h4 class="title-price"><a href="shop-ui-inner.html">Double-breasted</a></h4>
                                <span class="gender text-uppercase">Men</span>
                                <span class="gender">Suits - Blazers</span>
                            </div>
                            <div class="product-price">
                                <span class="title-price">$95.00</span>
                            </div>
                        </div>
                        <ul class="list-inline product-ratings">
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                            <li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
                        </ul>
                    </div>
                </li>
                <li class="item">
                    <div class="product-img">
                        <a href="shop-ui-inner.html"><img class="full-width img-responsive" src="assets/img/blog/12.jpg" alt=""></a>
                        <a class="product-review" href="shop-ui-inner.html">Quick review</a>
                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        <div class="shop-rgba-dark-green rgba-banner">New</div>
                    </div>
                    <div class="product-description product-description-brd">
                        <div class="overflow-h margin-bottom-5">
                            <div class="pull-left">
                                <h4 class="title-price"><a href="shop-ui-inner.html">Double-breasted</a></h4>
                                <span class="gender text-uppercase">Women</span>
                                <span class="gender">Suits - Blazers</span>
                            </div>
                            <div class="product-price">
                                <span class="title-price">$95.00</span>
                            </div>
                        </div>
                        <ul class="list-inline product-ratings">
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                            <li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
                        </ul>
                    </div>
                </li>
                <li class="item">
                    <div class="product-img">
                        <a href="shop-ui-inner.html"><img class="full-width img-responsive" src="assets/img/blog/10.jpg" alt=""></a>
                        <a class="product-review" href="shop-ui-inner.html">Quick review</a>
                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                    <div class="product-description product-description-brd">
                        <div class="overflow-h margin-bottom-5">
                            <div class="pull-left">
                                <h4 class="title-price"><a href="shop-ui-inner.html">Double-breasted</a></h4>
                                <span class="gender text-uppercase">Women</span>
                                <span class="gender">Suits - Blazers</span>
                            </div>
                            <div class="product-price">
                                <span class="title-price">$95.00</span>
                            </div>
                        </div>
                        <ul class="list-inline product-ratings">
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                            <li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
                        </ul>
                    </div>
                </li>
                <li class="item">
                    <div class="product-img">
                        <a href="shop-ui-inner.html"><img class="full-width img-responsive" src="assets/img/blog/11.jpg" alt=""></a>
                        <a class="product-review" href="shop-ui-inner.html">Quick review</a>
                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        <div class="shop-rgba-red rgba-banner">Out of stock</div>
                    </div>
                    <div class="product-description product-description-brd">
                        <div class="overflow-h margin-bottom-5">
                            <div class="pull-left">
                                <h4 class="title-price"><a href="shop-ui-inner.html">Double-breasted</a></h4>
                                <span class="gender text-uppercase">Men</span>
                                <span class="gender">Suits - Blazers</span>
                            </div>
                            <div class="product-price">
                                <span class="title-price">$95.00</span>
                            </div>
                        </div>
                        <ul class="list-inline product-ratings">
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating-selected fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                            <li><i class="rating fa fa-star"></i></li>
                            <li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!--=== End Illustration v2 ===-->

        <!--=== Illustration v3 ===-->
        <div class="row margin-bottom-50">
            <div class="col-md-4 md-margin-bottom-30">
                <div class="overflow-h">
                    <a class="illustration-v3 illustration-img1" href="#">
					<span class="illustration-bg">
						<span class="illustration-ads">
							<span class="illustration-v3-category">
								<span class="product-category">Men</span>
								<span class="product-amount">56 Items</span>
							</span>
						</span>
					</span>
                    </a>
                </div>
            </div>
            <div class="col-md-4 md-margin-bottom-30">
                <div class="overflow-h">
                    <a class="illustration-v3 illustration-img2" href="#">
					<span class="illustration-bg">
						<span class="illustration-ads">
							<span class="illustration-v3-category">
								<span class="product-category">Women</span>
								<span class="product-amount">56 Items</span>
							</span>
						</span>
					</span>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="overflow-h">
                    <a class="illustration-v3 illustration-img3" href="#">
					<span class="illustration-bg">
						<span class="illustration-ads">
							<span class="illustration-v3-category">
								<span class="product-category">Children</span>
								<span class="product-amount">56 Items</span>
							</span>
						</span>
					</span>
                    </a>
                </div>
            </div>
        </div>
        <!--=== End Illustration v3 ===-->

        <div class="heading heading-v1 margin-bottom-40">
            <h2>Latest products</h2>
        </div>

        <!--=== Illustration v2 ===-->
        <div class="row illustration-v2">
            <div class="col-md-3 col-sm-6 md-margin-bottom-30">
                <div class="product-img">
                    <a href="shop-ui-inner.html"><img class="full-width img-responsive" src="assets/img/blog/25.jpg" alt=""></a>
                    <a class="product-review" href="shop-ui-inner.html">Quick review</a>
                    <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>
                <div class="product-description product-description-brd">
                    <div class="overflow-h margin-bottom-5">
                        <div class="pull-left">
                            <h4 class="title-price"><a href="shop-ui-inner.html">Double-breasted</a></h4>
                            <span class="gender text-uppercase">Woman</span>
                            <span class="gender">Suits - Blazers</span>
                        </div>
                        <div class="product-price">
                            <span class="title-price">$95.00</span>
                        </div>
                    </div>
                    <ul class="list-inline product-ratings">
                        <li><i class="rating-selected fa fa-star"></i></li>
                        <li><i class="rating-selected fa fa-star"></i></li>
                        <li><i class="rating-selected fa fa-star"></i></li>
                        <li><i class="rating fa fa-star"></i></li>
                        <li><i class="rating fa fa-star"></i></li>
                        <li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 md-margin-bottom-30">
                <div class="product-img">
                    <a href="shop-ui-inner.html"><img class="full-width img-responsive" src="assets/img/blog/09.jpg" alt=""></a>
                    <a class="product-review" href="shop-ui-inner.html">Quick review</a>
                    <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>
                <div class="product-description product-description-brd">
                    <div class="overflow-h margin-bottom-5">
                        <div class="pull-left">
                            <h4 class="title-price"><a href="shop-ui-inner.html">Double-breasted</a></h4>
                            <span class="gender text-uppercase">Men</span>
                            <span class="gender">Suits - Blazers</span>
                        </div>
                        <div class="product-price">
                            <span class="title-price">$60.00</span>
                            <span class="title-price line-through">$95.00</span>
                        </div>
                    </div>
                    <ul class="list-inline product-ratings">
                        <li><i class="rating-selected fa fa-star"></i></li>
                        <li><i class="rating-selected fa fa-star"></i></li>
                        <li><i class="rating-selected fa fa-star"></i></li>
                        <li><i class="rating fa fa-star"></i></li>
                        <li><i class="rating fa fa-star"></i></li>
                        <li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 md-margin-bottom-30">
                <div class="product-img">
                    <a href="shop-ui-inner.html"><img class="full-width img-responsive" src="assets/img/blog/10.jpg" alt=""></a>
                    <a class="product-review" href="shop-ui-inner.html">Quick review</a>
                    <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    <div class="shop-rgba-red rgba-banner">Out of stock</div>
                </div>
                <div class="product-description product-description-brd">
                    <div class="overflow-h margin-bottom-5">
                        <div class="pull-left">
                            <h4 class="title-price"><a href="shop-ui-inner.html">Double-breasted</a></h4>
                            <span class="gender text-uppercase">Women</span>
                            <span class="gender">Suits - Blazers</span>
                        </div>
                        <div class="product-price">
                            <span class="title-price">$95.00</span>
                        </div>
                    </div>
                    <ul class="list-inline product-ratings">
                        <li><i class="rating-selected fa fa-star"></i></li>
                        <li><i class="rating-selected fa fa-star"></i></li>
                        <li><i class="rating-selected fa fa-star"></i></li>
                        <li><i class="rating fa fa-star"></i></li>
                        <li><i class="rating fa fa-star"></i></li>
                        <li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 md-margin-bottom-30">
                <div class="product-img">
                    <a href="shop-ui-inner.html"><img class="full-width img-responsive" src="assets/img/blog/11.jpg" alt=""></a>
                    <a class="product-review" href="shop-ui-inner.html">Quick review</a>
                    <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    <div class="shop-rgba-dark-green rgba-banner">New</div>
                </div>
                <div class="product-description product-description-brd">
                    <div class="overflow-h margin-bottom-5">
                        <div class="pull-left">
                            <h4 class="title-price"><a href="shop-ui-inner.html">Double-breasted</a></h4>
                            <span class="gender text-uppercase">Men</span>
                            <span class="gender">Suits - Blazers</span>
                        </div>
                        <div class="product-price">
                            <span class="title-price">$95.00</span>
                        </div>
                    </div>
                    <ul class="list-inline product-ratings">
                        <li><i class="rating-selected fa fa-star"></i></li>
                        <li><i class="rating-selected fa fa-star"></i></li>
                        <li><i class="rating-selected fa fa-star"></i></li>
                        <li><i class="rating fa fa-star"></i></li>
                        <li><i class="rating fa fa-star"></i></li>
                        <li class="like-icon"><a data-original-title="Add to wishlist" data-toggle="tooltip" data-placement="left" class="tooltips" href="#"><i class="fa fa-heart"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--=== End Illustration v2 ===-->
    </div>
    <!--=== End Product Content ===-->

    @include('includes.twitter-block')

    <div class="container">
        <!--=== Product Service ===-->
        <div class="row margin-bottom-60">
            <div class="col-md-4 product-service md-margin-bottom-30">
                <div class="product-service-heading">
                    <i class="fa fa-truck"></i>
                </div>
                <div class="product-service-in">
                    <h3>Free Delivery</h3>
                    <p>Integer mattis lacinia felis vel molestie. Ut eu euismod erat, tincidunt pulvinar semper veliUt porta, leo...</p>
                    <a href="#">+Read More</a>
                </div>
            </div>
            <div class="col-md-4 product-service md-margin-bottom-30">
                <div class="product-service-heading">
                    <i class="icon-earphones-alt"></i>
                </div>
                <div class="product-service-in">
                    <h3>Customer Service</h3>
                    <p>Integer mattis lacinia felis vel molestie. Ut eu euismod erat, tincidunt pulvinar semper veliUt porta, leo...</p>
                    <a href="#">+Read More</a>
                </div>
            </div>
            <div class="col-md-4 product-service">
                <div class="product-service-heading">
                    <i class="icon-refresh"></i>
                </div>
                <div class="product-service-in">
                    <h3>Free Returns</h3>
                    <p>Integer mattis lacinia felis vel molestie. Ut eu euismod erat, tincidunt pulvinar semper veliUt porta, leo...</p>
                    <a href="#">+Read More</a>
                </div>
            </div>
        </div><!--/end row-->
        <!--=== End Product Service ===-->

        <!--=== Illustration v4 ===-->
        <div class="row illustration-v4 margin-bottom-40">
            <div class="col-md-4">
                <div class="heading heading-v1 margin-bottom-20">
                    <h2>Top Rated</h2>
                </div>
                <div class="thumb-product">
                    <img class="thumb-product-img" src="assets/img/thumb/08.jpg" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="shop-ui-inner.html">Yuketen</a> – <a href="shop-ui-inner.html">Derby Shoe</a></h4>
                        <span class="thumb-product-type">Footwear - Oxfords</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price line-through">$75.00</li>
                        <li class="thumb-product-price">$65.00</li>
                        <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> | <a href="#"><i class="fa fa-heart"></i></a></li>
                    </ul>
                </div>
                <div class="thumb-product">
                    <img class="thumb-product-img" src="assets/img/thumb/09.jpg" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="shop-ui-inner.html">Yuketen</a> – <a href="shop-ui-inner.html">Derby Shoe</a></h4>
                        <span class="thumb-product-type">Footwear - Oxfords</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price">$75.00</li>
                        <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> | <a href="#"><i class="fa fa-heart"></i></a></li>
                    </ul>
                </div>
                <div class="thumb-product">
                    <img class="thumb-product-img" src="assets/img/thumb/03.jpg" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="shop-ui-inner.html">Yuketen</a> – <a href="shop-ui-inner.html">Derby Shoe</a></h4>
                        <span class="thumb-product-type">Footwear - Oxfords</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price">$75.00</li>
                        <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> | <a href="#"><i class="fa fa-heart"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="heading heading-v1 margin-bottom-20">
                    <h2>Best Sellers</h2>
                </div>
                <div class="thumb-product">
                    <img class="thumb-product-img" src="assets/img/thumb/02.jpg" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="shop-ui-inner.html">Yuketen</a> – <a href="shop-ui-inner.html">Derby Shoe</a></h4>
                        <span class="thumb-product-type">Footwear - Oxfords</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price">$75.00</li>
                        <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> | <a href="#"><i class="fa fa-heart"></i></a></li>
                    </ul>
                </div>
                <div class="thumb-product">
                    <img class="thumb-product-img" src="assets/img/thumb/10.jpg" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="shop-ui-inner.html">Yuketen</a> – <a href="shop-ui-inner.html">Derby Shoe</a></h4>
                        <span class="thumb-product-type">Footwear - Oxfords</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price">$75.00</li>
                        <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> | <a href="#"><i class="fa fa-heart"></i></a></li>
                    </ul>
                </div>
                <div class="thumb-product">
                    <img class="thumb-product-img" src="assets/img/thumb/06.jpg" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="shop-ui-inner.html">Yuketen</a> – <a href="shop-ui-inner.html">Derby Shoe</a></h4>
                        <span class="thumb-product-type">Footwear - Oxfords</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price line-through">$75.00</li>
                        <li class="thumb-product-price">$65.00</li>
                        <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> | <a href="#"><i class="fa fa-heart"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 padding">
                <div class="heading heading-v1 margin-bottom-20">
                    <h2>Sale Items</h2>
                </div>
                <div class="thumb-product">
                    <img class="thumb-product-img" src="assets/img/thumb/07.jpg" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="shop-ui-inner.html">Yuketen</a> – <a href="shop-ui-inner.html">Derby Shoe</a></h4>
                        <span class="thumb-product-type">Footwear - Oxfords</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price line-through">$75.00</li>
                        <li class="thumb-product-price">$65.00</li>
                        <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> | <a href="#"><i class="fa fa-heart"></i></a></li>
                    </ul>
                </div>
                <div class="thumb-product">
                    <img class="thumb-product-img" src="assets/img/thumb/04.jpg" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="shop-ui-inner.html">Yuketen</a> – <a href="shop-ui-inner.html">Derby Shoe</a></h4>
                        <span class="thumb-product-type">Footwear - Oxfords</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price">$75.00</li>
                        <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> | <a href="#"><i class="fa fa-heart"></i></a></li>
                    </ul>
                </div>
                <div class="thumb-product">
                    <img class="thumb-product-img" src="assets/img/thumb/05.jpg" alt="">
                    <div class="thumb-product-in">
                        <h4><a href="shop-ui-inner.html">Yuketen</a> – <a href="shop-ui-inner.html">Derby Shoe</a></h4>
                        <span class="thumb-product-type">Footwear - Oxfords</span>
                    </div>
                    <ul class="list-inline overflow-h">
                        <li class="thumb-product-price">$75.00</li>
                        <li class="thumb-product-purchase"><a href="#"><i class="fa fa-shopping-cart"></i></a> | <a href="#"><i class="fa fa-heart"></i></a></li>
                    </ul>
                </div>
            </div>
        </div><!--/end row-->
        <!--=== End Illustration v4 ===-->
    </div><!--/end cotnainer-->

    <!--=== Collection Banner ===-->
    <div class="collection-banner">
        <div class="container">
            <div class="col-md-7 md-margin-bottom-50">
                <h2>Makeup collection</h2>
                <p>Duis in posuere risus. Vivamus sed dignissim tellus. In vehicula justo tempor commodo. <br> Nunc lobortis dapibus neque quis lacinia</p><br>
                <a href="#" class="btn-u btn-brd btn-brd-hover btn-u-light">Shop Now</a>
            </div>
            <div class="col-md-5">
                <div class="overflow-h">
                    <span class="percent-numb">50</span>
                    <div class="percent-off">
                        <span class="discount-percent">%</span>
                        <span class="discount-off">off</span>
                    </div>
                    <div class="new-offers shop-bg-green rounded-x">
                        <p>new</p>
                        <span>Products</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=== End Collection Banner ===-->

    <!--=== Sponsors ===-->
    <div class="container content">
        <div class="heading heading-v1 margin-bottom-40">
            <h2>Sponsors</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed odio elit, ultrices vel cursus sed, placerat ut leo. Phasellus in magna erat. Etiam gravida convallis augue non tincidunt. Nunc lobortis dapibus neque quis lacinia. Nam dapibus tellus sit amet odio venenatis</p>
        </div>

        <ul class="list-inline owl-slider-v2">
            <li class="item first-child">
                <img src="assets/img/clients/07.png" alt="">
            </li>
            <li class="item">
                <img src="assets/img/clients/08.png" alt="">
            </li>
            <li class="item">
                <img src="assets/img/clients/10.png" alt="">
            </li>
            <li class="item">
                <img src="assets/img/clients/11.png" alt="">
            </li>
            <li class="item">
                <img src="assets/img/clients/09.png" alt="">
            </li>
            <li class="item">
                <img src="assets/img/clients/12.png" alt="">
            </li>
            <li class="item">
                <img src="assets/img/clients/07.png" alt="">
            </li>
            <li class="item">
                <img src="assets/img/clients/08.png" alt="">
            </li>
            <li class="item">
                <img src="assets/img/clients/09.png" alt="">
            </li>
            <li class="item">
                <img src="assets/img/clients/10.png" alt="">
            </li>
            <li class="item">
                <img src="assets/img/clients/11.png" alt="">
            </li>
            <li class="item">
                <img src="assets/img/clients/12.png" alt="">
            </li>
        </ul><!--/end owl-carousel-->
    </div>
    <!--=== End Sponsors ===-->
@endsection