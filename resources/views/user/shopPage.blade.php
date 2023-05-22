@extends('user.layouts.main')
@section('content')
@if (session('status'))
    <h6 style="font-size:18px;" class="alert alert-success">{{ session('status') }}</h6>
@endif
		<!-- mobile-menu-area end -->
        <!-- big-banner-area start -->
        <div class="big-banner-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="big-banner-descs single-pro-descssc">
                            <h1 class="big-b-title">Fusce aliquam sample – s5</h1>
                            <a class="frtsv" href="index.html">Home page</a>
                            <a href="#">Shop Sidebar</a>
                            <a href="#">Fashion</a>
                            <a class="wtsp" href="#">Women's</a>
                            <span> / Fusce aliquam sample – s5</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- big-banner-area end -->
        <!-- single-product-area start -->
        <section class="single-product-area single-padding ag-res">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="single-pro-big-img">
                            <a href="#"><img class="first-img" src="{{ asset('uploads/product/'.$shop->product_image) }}" alt="" data-zoom-image="img/products/zoom1.jpg" ></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="mdl-product-info">
                            <div class="mdl-pro-descs text-center">
                                <h3><a href="#">{{$shop->name}}</a></h3>
                                <p class="mdl-sku">
                                    SKU:
                                    <span class="product_sku">W013</span>
                                </p>
                                <p class="availability">
                                    <span class="wd_availability">Availability: </span>
                                    <span class="stock">In stock</span>
                                </p>
                                <div class="mdl-short-description">
                                    <h6 class="short-description-title">Description</h6>
                                    <div class="std"> {{$shop->description}}</div>
                                </div>
                            </div>
                            <div class="mdl-price-size-clr single-pro-amnt-sec">
                                <div class="prc-range-md text-center">
                                    <p class="price">
                                        <del>
                                            <span class="amount">${{$shop->actual_price}}</span>
                                        </del>
                                        <span class="amount">${{$shop->discount_price}}</span>
                                    </p>
                                </div>
                                <form action="/add-to-cart/{{$shop->id}}" method="post">
                                @csrf
                                <div class="quantity">
                                    <input class="input-text qty text" type="number" size="4" title="Qty" value="1" name="quantity" min="1" step="1">
                                </div>
                                <input type="hidden" name="unit_price" value="{{$shop->discount_price}}">
                                <div class="sngle-add-crt">
                                    <button>Add To Cart</button>
                                    <div class="mdl-fav-icon">
                                        <a href="#">
                                        <i class="fa fa-heart"></i>
                                        </a>
                                        <a href="#">
                                        <i class="fa fa-retweet"></i>
                                        </a>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="single-pro-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </div>
                            <div class="single-pro-tags">
                                <span class="tagged_as">
                                    Tags:
                                    <a rel="tag" href="#">fashion</a>
                                    ,
                                    <a rel="tag" href="#">Fusce aliquam</a>
                                    ,
                                    <a rel="tag" href="#">girls</a>
                                    ,
                                    <a rel="tag" href="#">sample</a>
                                    ,
                                    <a rel="tag" href="#">women's</a>
                                    .
                                </span>
                            </div>
                            <div class="return-shipping">
                                <div class="content-quick">
                                    <h3 class="title-quickshop text-uppercase text_color"> FREE SHIPPING & RETURN </h3>
                                    <div class="text-center">Tucked t-shirt relaxed plaited leather tote Jil Sander Vasari bomber clutch. Lilac minimal crop flats slipper denim shorts seam. </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row single-tab-mtsd">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="single-pro-tabss">
                            <!-- Nav tabs -->
                            <ul class="single-pro-tab" role="tablist">
     
                                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Reviews (0)</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                             
                                <div role="tabpanel" class="tab-pane" id="profile">custom contents goes here</div>
                                <div role="tabpanel" class="tab-pane" id="messages">
                                    <div class="my-tb-reviews">
                                        <div id="comments">
                                            <h2>Reviews</h2>
                                        </div>
                                        <div class="lv-a-rep">
                                            Leave a Reply to %s
                                            <h3>Be the first to review “Fusce aliquam sample – s5” </h3>
                                        </div>
                                        <div class="rev-rating">
                                            <h4>Rating</h4>
                                            <div class="rev-rating-icon">
                                                <a class="star-1" href="#">1</a>
                                                <a class="star-2" href="#">2</a>
                                                <a class="star-3" href="#">3</a>
                                                <a class="star-4" href="#">4</a>
                                                <a class="star-5" href="#">5</a>
                                            </div>
                                        </div>
                                        <div class="tb-your-review">
                                            <h4>Your Review</h4>
                                            <textarea cols="45" rows="8"></textarea>
                                        </div>
                                        <div class="name-review">
                                            <label>Name<span class="required">*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="name-review">
                                            <label>Email<span class="required">*</span></label>
                                            <input type="text">
                                        </div>
                                        <div class="tab-sbmt">
                                            <input type="submit" value="Submit Review">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <h3 class="shop-cat-title">YOU MAY ALSO LIKE</h3>
                    </div>
                </div>
                <div class="row ymmtp">
                    <div class="you-may-lyk-carousel indicator-style indicator-style-2">
                        <div class="col-lg-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="#"><img src="img/products/x39-270x400.jpg" alt=""></a>
                                    <div class="pro-label">
                                        <span class="product_label">New</span>
                                    </div>
                                    <div class="product-actions">
                                        <div class="list-add-to-cart">
                                            <a href="#">Select options</a>
                                        </div>
                                        <div class="add-to-links">
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                            <a data-toggle="modal" data-target="#productModal" href="#"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-desc text-center">
                                    <h3><a href="#">Fusce aliquam variable – v1</a></h3>
                                    <div class="product-rating">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                    <span class="product-price">
                                        <span class="amount-one">$17.20</span>
                                        -
                                        <span class="amount-two">$18.20</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="#"><img src="img/products/h04-270x400.jpg" alt=""></a>
                                    <div class="pro-label">
                                        <span class="product_label blue_label">16%</span>
                                    </div>
                                    <div class="product-actions">
                                        <div class="list-add-to-cart">
                                            <button class="button">
                                                <span>Add to Cart</span>
                                            </button>
                                        </div>
                                        <div class="add-to-links">
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                            <a data-toggle="modal" data-target="#productModal" href="#"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-desc text-center">
                                    <h3><a href="#">Fusce aliquam variable – v1</a></h3>
                                    <span class="product-price pro-mb">
                                        <span class="amount-one amnt-one">$50.00</span>
                                        <span class="amount-two amnt-two">$42.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="#"><img src="img/products/h07-270x400.jpg" alt=""></a>
                                    <div class="pro-label">
                                        <span class="product_label blue_label">4%</span>
                                    </div>
                                    <div class="product-actions">
                                        <div class="list-add-to-cart">
                                            <button class="button">
                                                <span>Buy product</span>
                                            </button>
                                        </div>
                                        <div class="add-to-links">
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                            <a data-toggle="modal" data-target="#productModal" href="#"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-desc text-center">
                                    <h3><a href="#">Navy blue center part leather</a></h3>
                                    <span class="product-price pro-mb">
                                        <span class="amount-one amnt-one">$230.00</span>
                                        <span class="amount-two amnt-two">$220.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="#"><img src="img/products/9-270x400.jpg" alt=""></a>
                                    <div class="pro-label">
                                        <span class="product_label">New</span>
                                    </div>
                                    <div class="product-actions">
                                        <div class="list-add-to-cart">
                                            <a href="#">Select options</a>
                                        </div>
                                        <div class="add-to-links">
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                            <a data-toggle="modal" data-target="#productModal" href="#"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-desc text-center">
                                    <h3><a href="#">Sander vasari white shirt – v1</a></h3>
                                    <span class="product-price pro-mb">
                                        <span class="amount-one">$17.99</span>
                                        -
                                        <span class="amount-two">$18.55</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="#"><img src="img/products/6-270x400.jpg" alt=""></a>
                                    <div class="pro-label">
                                        <span class="product_label blue_label">20%</span>
                                    </div>
                                    <div class="product-actions">
                                        <div class="list-add-to-cart">
                                            <button class="button">
                                                <span>Add to Cart</span>
                                            </button>
                                        </div>
                                        <div class="add-to-links">
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                            <a data-toggle="modal" data-target="#productModal" href="#"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-desc text-center">
                                    <h3><a href="#">Floral gold collar chunky</a></h3>
                                    <span class="product-price pro-mb">
                                        <span class="amount-one amnt-one">$100.00</span>
                                        <span class="amount-two amnt-two">$80.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="#"><img src="img/products/h11-270x400.jpg" alt=""></a>
                                    <div class="pro-label">
                                        <span class="product_label">New</span>
                                    </div>
                                    <div class="product-actions">
                                        <div class="list-add-to-cart">
                                            <a href="#">View products</a>
                                        </div>
                                        <div class="add-to-links">
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                            <a data-toggle="modal" data-target="#productModal" href="#"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-desc text-center">
                                    <h3><a href="#">Jil sander vasari white shirt – G1</a></h3>
                                    <span class="product-price pro-mb">
                                        <span class="amount-one">$80.50</span>
                                        -
                                        <span class="amount-two">$120.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="#"><img src="img/products/h12-270x400.jpg" alt=""></a>
                                    <div class="pro-label">
                                        <span class="product_label">New</span>
                                    </div>
                                    <div class="product-actions">
                                        <div class="list-add-to-cart">
                                            <a href="#">Select options</a>
                                        </div>
                                        <div class="add-to-links">
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                            <a data-toggle="modal" data-target="#productModal" href="#"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-desc text-center">
                                    <h3><a href="#">Navy blue center part leather – V1</a></h3>
                                    <span class="product-price pro-mb">
                                        <span class="amount-one">$250.00</span>
                                        -
                                        <span class="amount-two">$260.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="#"><img src="img/products/h13-270x400.jpg" alt=""></a>
                                    <div class="pro-label">
                                        <span class="product_label">New</span>
                                    </div>
                                    <div class="product-actions">
                                        <div class="list-add-to-cart">
                                            <button class="button">
                                                <span>Buy product</span>
                                            </button>
                                        </div>
                                        <div class="add-to-links">
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                            <a data-toggle="modal" data-target="#productModal" href="#"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-desc text-center">
                                    <h3><a href="#">Fusce aliquam variable – v1</a></h3>
                                    <div class="product-rating">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                    </div>
                                    <span class="product-price">
                                        <span class="amount-one">$245.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ysncdmt">
                    <div class="you-may-lyk-carousel-2 indicator-style indicator-style-2">
                        <div class="col-lg-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="#"><img src="img/products/h07-270x400.jpg" alt=""></a>
                                    <div class="pro-label">
                                        <span class="product_label blue_label">4%</span>
                                    </div>
                                    <div class="product-actions">
                                        <div class="list-add-to-cart">
                                            <button class="button">
                                                <span>Buy product</span>
                                            </button>
                                        </div>
                                        <div class="add-to-links">
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                            <a data-toggle="modal" data-target="#productModal" href="#"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-desc text-center">
                                    <h3><a href="#">Navy blue center part leather</a></h3>
                                    <span class="product-price pro-mb">
                                        <span class="amount-one amnt-one">$230.00</span>
                                        <span class="amount-two amnt-two">$220.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="#"><img src="img/products/9-270x400.jpg" alt=""></a>
                                    <div class="pro-label">
                                        <span class="product_label">New</span>
                                    </div>
                                    <div class="product-actions">
                                        <div class="list-add-to-cart">
                                            <a href="#">Select options</a>
                                        </div>
                                        <div class="add-to-links">
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                            <a data-toggle="modal" data-target="#productModal" href="#"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-desc text-center">
                                    <h3><a href="#">Sander vasari white shirt – v1</a></h3>
                                    <span class="product-price pro-mb">
                                        <span class="amount-one">$17.99</span>
                                        -
                                        <span class="amount-two">$18.55</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="#"><img src="img/products/6-270x400.jpg" alt=""></a>
                                    <div class="pro-label">
                                        <span class="product_label blue_label">20%</span>
                                    </div>
                                    <div class="product-actions">
                                        <div class="list-add-to-cart">
                                            <button class="button">
                                                <span>Add to Cart</span>
                                            </button>
                                        </div>
                                        <div class="add-to-links">
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                            <a data-toggle="modal" data-target="#productModal" href="#"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-desc text-center">
                                    <h3><a href="#">Floral gold collar chunky</a></h3>
                                    <span class="product-price pro-mb">
                                        <span class="amount-one amnt-one">$100.00</span>
                                        <span class="amount-two amnt-two">$80.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="#"><img src="img/products/x39-270x400.jpg" alt=""></a>
                                    <div class="pro-label">
                                        <span class="product_label">New</span>
                                    </div>
                                    <div class="product-actions">
                                        <div class="list-add-to-cart">
                                            <a href="#">Select options</a>
                                        </div>
                                        <div class="add-to-links">
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                            <a data-toggle="modal" data-target="#productModal" href="#"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-desc text-center">
                                    <h3><a href="#">Fusce aliquam variable – v1</a></h3>
                                    <div class="product-rating">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                    <span class="product-price">
                                        <span class="amount-one">$17.20</span>
                                        -
                                        <span class="amount-two">$18.20</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="#"><img src="img/products/h12-270x400.jpg" alt=""></a>
                                    <div class="pro-label">
                                        <span class="product_label">New</span>
                                    </div>
                                    <div class="product-actions">
                                        <div class="list-add-to-cart">
                                            <a href="#">Select options</a>
                                        </div>
                                        <div class="add-to-links">
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                            <a data-toggle="modal" data-target="#productModal" href="#"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-desc text-center">
                                    <h3><a href="#">Navy blue center part leather – V1</a></h3>
                                    <span class="product-price pro-mb">
                                        <span class="amount-one">$250.00</span>
                                        -
                                        <span class="amount-two">$260.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="#"><img src="img/products/h13-270x400.jpg" alt=""></a>
                                    <div class="pro-label">
                                        <span class="product_label">New</span>
                                    </div>
                                    <div class="product-actions">
                                        <div class="list-add-to-cart">
                                            <button class="button">
                                                <span>Buy product</span>
                                            </button>
                                        </div>
                                        <div class="add-to-links">
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                            <a data-toggle="modal" data-target="#productModal" href="#"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-desc text-center">
                                    <h3><a href="#">Fusce aliquam variable – v1</a></h3>
                                    <div class="product-rating">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star-half-o"></i></a>
                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                    </div>
                                    <span class="product-price">
                                        <span class="amount-one">$245.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="#"><img src="img/products/h04-270x400.jpg" alt=""></a>
                                    <div class="pro-label">
                                        <span class="product_label blue_label">16%</span>
                                    </div>
                                    <div class="product-actions">
                                        <div class="list-add-to-cart">
                                            <button class="button">
                                                <span>Add to Cart</span>
                                            </button>
                                        </div>
                                        <div class="add-to-links">
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                            <a data-toggle="modal" data-target="#productModal" href="#"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-desc text-center">
                                    <h3><a href="#">Fusce aliquam variable – v1</a></h3>
                                    <span class="product-price pro-mb">
                                        <span class="amount-one amnt-one">$50.00</span>
                                        <span class="amount-two amnt-two">$42.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="#"><img src="img/products/h11-270x400.jpg" alt=""></a>
                                    <div class="pro-label">
                                        <span class="product_label">New</span>
                                    </div>
                                    <div class="product-actions">
                                        <div class="list-add-to-cart">
                                            <a href="#">View products</a>
                                        </div>
                                        <div class="add-to-links">
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                            <a data-toggle="modal" data-target="#productModal" href="#"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-desc text-center">
                                    <h3><a href="#">Jil sander vasari white shirt – G1</a></h3>
                                    <span class="product-price pro-mb">
                                        <span class="amount-one">$80.50</span>
                                        -
                                        <span class="amount-two">$120.00</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- single-product-area end -->
        <!-- Quickview-product-start -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <!-- modal-content-start-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product">
                                <!-- product-images -->
                                <div class="mdl-product-images">
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home-one">
                                            <a class="venobox" data-gall="myGallery" href="img/products/x39.jpg"><img src="img/products/x39.jpg" alt=""></a>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="profile-one">
                                            <a class="venobox" data-gall="myGallery" href="img/products/h01.jpg"><img alt="" src="img/products/h01.jpg"></a>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="messages-one">
                                            <a class="venobox" data-gall="myGallery" href="img/products/h05.jpg"><img alt="" src="img/products/h05.jpg"></a>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="settings-one">
                                            <a class="venobox" data-gall="myGallery" href="img/products/h04.jpg"><img alt="" src="img/products/h04.jpg"></a>
                                        </div>
                                    </div>
                                    <!-- Nav tabs -->
                                    <ul class="mdl-tab" role="tablist">
                                        <li role="presentation" class="active"><a href="#home-one" aria-controls="home-one" role="tab" data-toggle="tab"><img src="img/products/x39-70x90.jpg" alt=""></a></li>
                                        <li role="presentation"><a href="#profile-one" aria-controls="profile-one" role="tab" data-toggle="tab"><img src="img/products/h01-70x90.jpg" alt=""></a></li>
                                        <li role="presentation"><a href="#messages-one" aria-controls="messages-one" role="tab" data-toggle="tab"><img src="img/products/h05-70x90.jpg" alt=""></a></li>
                                        <li role="presentation"><a href="#settings-one" aria-controls="settings-one" role="tab" data-toggle="tab"><img src="img/products/h04-70x90.jpg" alt=""></a></li>
                                    </ul>
                                </div>
                                <!-- product-images -->
                                <!-- product-info -->
                                <div class="mdl-product-info">
                                    <div class="mdl-pro-descs text-center">
                                        <h3><a href="#">Fusce aliquam variable – v1</a></h3>
                                        <p class="mdl-sku">
                                            SKU:
                                            <span class="product_sku">W013</span>
                                        </p>
                                        <p class="availability">
                                            <span class="wd_availability">Availability: </span>
                                            <span class="stock">In stock</span>
                                        </p>
                                        <div class="mdl-short-description">
                                            <h6 class="short-description-title">Quick Overview</h6>
                                            <div class="std"> Nam tristique porta ligula, vel viverra sem eleifend nec. Nulla sed purus augue, eu euismod tellus. Nam mattis eros nec mi sagittis sagittis. Vestibulum suscipit cursus bibendum. Integer at justo eget sem auctor auctor eget vitae arcu.... </div>
                                        </div>
                                    </div>
                                    <div class="mdl-price-size-clr">
                                        <div class="product-rating text-center">
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                            <a href="#"><i class="fa fa-star"></i></a>
                                        </div>
                                        <div class="prc-range-md text-center">
                                            <p class="price">
                                                <span class="amount">$17.20</span>
                                                -
                                                <span class="amount">$18.20</span>
                                            </p>
                                        </div>
                                        <div class="mdl-sz-clr">
                                            <label>size</label>
                                            <select class="slct1">
                                                <option value="">Choose an option</option>
                                                <option value="l">L</option>
                                                <option value="m">M</option>
                                                <option value="s">S</option>
                                                <option value="xl">XL</option>
                                                <option value="xxl">XXL</option>
                                            </select>
                                        </div>
                                        <div class="mdl-sz-clr">
                                            <label>color</label>
                                            <select class="slct2">
                                                <option value="">Choose an option</option>
                                                <option value="black">Black</option>
                                                <option value="blue">Blue</option>
                                                <option value="green">Green</option>
                                                <option value="pink">Pink</option>
                                                <option value="red">Red</option>
                                                <option value="yellow">Yellow</option>
                                                <option value="orange">Orange</option>
                                                <option value="purple">Purple</option>
                                                <option value="white-2">White</option>
                                            </select>
                                        </div>
                                        <div class="mdl-fav-icon">
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-info -->
                            </div>
                            <!-- modal-product -->
                        </div>
                        <!-- modal-body -->
                    </div>
                    <!-- modal-content -->
                </div>
                <!-- modal-dialog -->
            </div>
            <!-- END Modal -->
        </div>
     
@endsection