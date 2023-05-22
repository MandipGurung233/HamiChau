@extends('user.layouts.main')
@section('content')

		<!-- mobile-menu-area end -->
        <!-- big-banner-area start -->
        <div class="big-banner-area shop-bnr-area text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="big-banner-descs">
                            <h1 class="big-b-title">Charity Shop</h1>
                            <a href="index.html">Home page</a>
                            <span>Shop Left Sidebar</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- big-banner-area end -->
        <!-- all-products-area start -->
        <div class="all-products-area single-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="shop-carts">
                            <h3 class="shop-cart-title">
                                Cart
                            </h3>
                            <div class="widget_shopping_cart_content">
                                <ul class="cart_list product_list_widget ">
                                    <li>
                                        <div class="crtsss-img">
                                            <a href="#"><img src="img/products/h14.jpg" alt=""></a>
                                            <a href="#"><i class="fa fa-times"></i></a>
                                        </div>
                                        <div class="cart_item_wrapper">
                                            <a class="wd_cart_title" href="#"> Collarless playsuit white shirt spearmint </a>
                                            <span class="quantity">
                                            <span class="amount">$44.25</span>
                                            × 1
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                                <p class="total">
                                <strong>Subtotal:</strong>
                                <span class="amount">$44.25</span>
                                </p>
                                <p class="buttons">
                                <a class="button mygs" href="#">View Cart</a>
                                <a class="button normal" href="#">Checkout</a>
                                </p>
                            </div>
                        </div>
                        <div class="shop-categories">
                            <h3 class="shop-cat-title">
                                Categories
                            </h3>
                            <ul class="product-categories">
                                <li>
                                    <a href="#">Electronics</a>
                                    <span>(0)</span>
                                </li>
                                <li>
									<i id="xtraangle" class="fa fa-angle-right"></i>
                                    <a id="fshntgl" href="#">Fashion</a>
                                    <span>(30)</span>
                                    <ul id="fnstglinot" class="pro-cat-children">
                                        <li>
                                            <a href="#">Bags</a>
                                            <span>(3)</span>
                                        </li>
                                        <li>
                                            <a href="#">Boys</a>
                                            <span>(10)</span>
                                        </li>
                                        <li>
                                            <a href="#">Girls</a>
                                            <span>(12)</span>
                                        </li>
                                        <li>
                                            <a href="#">Men's</a>
                                            <span>(12)</span>
                                        </li>
                                        <li>
                                            <a href="#">Shoes</a>
                                            <span>(4)</span>
                                        </li>
                                        <li>
                                            <a href="#">Women's</a>
                                            <span>(11)</span>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Home & Garden</a>
                                    <span>(0)</span>
                                </li>
                                <li>
                                    <a href="#">Laptop & Computer</a>
                                    <span>(0)</span>
                                </li>
                                <li>
                                    <a href="#">Sport & Game</a>
                                    <span>(2)</span>
                                </li>
                            </ul>
                        </div>
                        <div class="shop-top-rated-products">
                            <h3 class="shop-cat-title">
                                Top Rated Products
                            </h3>
                            <div class="all-top-rated-pro">
                                <div class="single-top-rated stmb">
                                    <div class="top-rated-img img-hvr-effect">
										<a class="venobox" data-gall="myGallery" href="img/products/x39-70x90.jpg"><img src="img/products/x39-70x90.jpg" alt="image alt"/></a>
                                    </div>
                                    <div class="top-rated-descs">
                                        <a href="#">Fusce aliquam variable – v1</a>
                                        <div class="product-rating">
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                        </div>
                                        <span class="product-price">
                                            <span class="amount-one">$17.20</span>
                                            -
                                            <span class="amount-two">$18.20</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="single-top-rated">
                                    <div class="top-rated-img img-hvr-effect">
										<a class="venobox" data-gall="myGallery" href="img/products/h06-70x90.jpg"><img src="img/products/h06-70x90.jpg" alt="image alt"/></a>
                                    </div>
                                    <div class="top-rated-descs">
                                        <a href="#">Jil sander vasari white shirt – s1</a>
                                        <div class="product-rating">
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                        </div>
                                        <span class="product-price">
                                            <span class="amount-one">$80.50</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="single-top-rated">
                                    <div class="top-rated-img img-hvr-effect">
										<a class="venobox" data-gall="myGallery" href="img/products/10-70x90.jpg"><img src="img/products/10-70x90.jpg" alt="image alt"/></a>
                                    </div>
                                    <div class="top-rated-descs">
                                        <a href="#">Navy blue center part leather – s1</a>
                                        <div class="product-rating">
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                        </div>
                                        <span class="product-price">
                                            <span class="amount-one">$233.00</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="single-top-rated">
                                    <div class="top-rated-img img-hvr-effect">
										<a class="venobox" data-gall="myGallery" href="img/products/6-70x90.jpg"><img src="img/products/6-70x90.jpg" alt="image alt"/></a>
                                    </div>
                                    <div class="top-rated-descs">
                                        <a href="#">Minimal black ribbed bandeau</a>
                                        <div class="product-rating">
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                        </div>
                                        <span class="product-price">
                                            <span class="amount-one">$310.00</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="single-top-rated">
                                    <div class="top-rated-img img-hvr-effect">
										<a class="venobox" data-gall="myGallery" href="img/products/h01-70x90.jpg"><img src="img/products/h01-70x90.jpg" alt="image alt"/></a>
                                    </div>
                                    <div class="top-rated-descs">
                                        <a href="#">Fusce aliquam simple</a>
                                        <div class="product-rating">
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                        </div>
                                        <span class="product-price">
                                            <span class="amount-one">$400.00</span>
                                        </span>

                                    </div>
                                </div>
                                <div class="single-top-rated">
                                    <div class="top-rated-img img-hvr-effect">
										<a class="venobox" data-gall="myGallery" href="img/products/h02-70x90.jpg"><img src="img/products/h02-70x90.jpg" alt="image alt"/></a>
                                    </div>
                                    <div class="top-rated-descs">
                                        <a href="#">Fusce aliquam variable – v2</a>
                                        <div class="product-rating">
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                        </div>
                                        <span class="product-price">
                                            <span class="amount-one">$18.55</span>
                                            -
                                            <span class="amount-two">$19.00</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="single-top-rated">
                                    <div class="top-rated-img img-hvr-effect">
										<a class="venobox" data-gall="myGallery" href="img/products/h15-70x90.jpg"><img src="img/products/h15-70x90.jpg" alt="image alt"/></a>
                                    </div>
                                    <div class="top-rated-descs">
                                        <a href="#">Jil sander vasari white – v1</a>
                                        <div class="product-rating">
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                        </div>
                                        <span class="product-price">
                                            <span class="amount-one">$24.00</span>
                                            -
                                            <span class="amount-two">$25.35</span>
                                        </span>
                                    </div>
                                </div>
                                <div class="single-top-rated">
                                    <div class="top-rated-img img-hvr-effect">
										<a class="venobox" data-gall="myGallery" href="img/products/9-70x90.jpg"><img src="img/products/9-70x90.jpg" alt="image alt"/></a>
                                    </div>
                                    <div class="top-rated-descs">
                                        <a href="#">Cashmere Saint Laurent</a>
                                        <div class="product-rating">
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                            <a href="#">
                                            <i class="fa fa-star"></i>
                                            </a>
                                        </div>
                                        <span class="product-price pro-mb">
                                            <span class="amount-one amnt-one">$18.00</span>
                                            <span class="amount-two amnt-two">$17.20</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shop-filter-by-price">
                            <h3 class="shop-cat-title">
                                Filter by price
                            </h3>
                            <div class="price-filter">
                                <div id="slider-range"></div>
                                <div class="price-slider-amount">
                                    <p>
                                        Price:
                                        <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                    </p>
                                    <input class="pri-sub" type="submit"  value="Filter"/>  
                                </div>
                            </div>
                        </div>
                        <div class="shop-flick">
                            <h3 class="shop-cat-title">
                                Flickr
                            </h3>
                            <div class="single-flickr-img">
								<a class="venobox" data-gall="myGallery" href="img/products/8072887203_286c3ddc89_s.jpg"><img src="img/products/8072887203_286c3ddc89_s.jpg" alt="image alt"/></a>
							</div>
                            <div class="single-flickr-img">
								<a class="venobox" data-gall="myGallery" href="img/products/8072880804_e1e21f2b3c_s.jpg"><img src="img/products/8072880804_e1e21f2b3c_s.jpg" alt="image alt"/></a>
                            </div>
                            <div class="single-flickr-img">
								<a class="venobox" data-gall="myGallery" href="img/products/8072880866_418be162f9_s.jpg"><img src="img/products/8072880866_418be162f9_s.jpg" alt="image alt"/></a>
                            </div>
                            <div class="single-flickr-img">
								<a class="venobox" data-gall="myGallery" href="img/products/8072881024_eacaa2a92a_s.jpg"><img src="img/products/8072881024_eacaa2a92a_s.jpg" alt="image alt"/></a>
                            </div>
                            <div class="single-flickr-img">
								<a class="venobox" data-gall="myGallery" href="img/products/8072880934_7230064303_s.jpg"><img src="img/products/8072880934_7230064303_s.jpg" alt="image alt"/></a>
                            </div>
                            <div class="single-flickr-img">
								<a class="venobox" data-gall="myGallery" href="img/products/8072880978_a9b8a1c3ba_s.jpg"><img src="img/products/8072880978_a9b8a1c3ba_s.jpg" alt="image alt"/></a>
                            </div>
                            <div class="single-flickr-img">
								<a class="venobox" data-gall="myGallery" href="img/products/8072887131_e3927498c1_s.jpg"><img src="img/products/8072887131_e3927498c1_s.jpg" alt="image alt"/></a>
                            </div>
                            <div class="single-flickr-img">
								<a class="venobox" data-gall="myGallery" href="img/products/8072880896_9f7a416e0a_s.jpg"><img src="img/products/8072880896_9f7a416e0a_s.jpg" alt="image alt"/></a>
                            </div>
                            <div class="single-flickr-img">
								<a class="venobox" data-gall="myGallery" href="img/products/8072887413_5584b88f4b_s.jpg"><img src="img/products/8072887413_5584b88f4b_s.jpg" alt="image alt"/></a>
                            </div>
                            <div class="fxcs"></div>
                            <div class="flick-see-more">
                                <a href="#">See more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="row product-shop-mb">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <div class="all-product-list-grid-area">
                                    <!-- Nav tabs -->
                                    <ul class="list-grid-tab" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-th"></i></a></li>
                                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-th-list"></i></a></li>
                                    </ul>
                                    <span>Showing 1–12 of 30 results</span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs">
                                <form class="woocommerce-ordering" method="get">
                                    <select class="orderby" name="orderby">
                                        <option selected="selected" value="menu_order">Default sorting</option>
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="rating">Sort by average rating</option>
                                        <option value="date">Sort by newness</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    @foreach($shops as $shop)
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="#"><img src="{{ asset('uploads/product/'.$shop->product_image) }}" alt=""></a>
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
                                                <h3><a href="/productPage/{{$shop->id}}">{{$shop->name}}</a></h3>
												<div class="product-rating">
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star"></i></a>
                                                    <a href="#"><i class="fa fa-star-half-o"></i></a>
                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                    <a href="#"><i class="fa fa-star-o"></i></a>
                                                </div>
                                                <span class="product-price pro-mb">
                                                    <span class="amount-one amnt-one">${{$shop->actual_price}}</span>
                                                    <span class="amount-two amnt-two">${{$shop->discount_price}}</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row tabmttsh">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="#"><img src="img/products/9-270x400.jpg" alt=""></a>
                                                        <div class="pro-label">
                                                            <span class="product_label blue_label">4%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <div class="product-desc text-center">
                                                    <h3><a href="#">Cashmere Saint Laurent</a></h3>
                                                    <div class="product-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <span class="product-price pro-mb">
                                                        <span class="amount-one amnt-one">$18.00</span>
                                                        <span class="amount-two amnt-two">$17.20</span>
                                                    </span>
                                                    <div class="product-cont-shop">
                                                        <p>Paragraph text Nam tristique porta ligula, vel viverra sem eleifend nec. Nulla sed purus augue, eu euismod tellus. Nam mattis eros nec mi sagittis sagittis. Vestibulum suscipit cursus bibendum. Integer at justo eget sem auctor auctor eget vitae arcu. Nam tempor malesuada porttitor. Nulla quis dignissim ipsum. Aliquam pulvinar iaculis justo, sit amet interdum sem hendrerit vitae. Vivamus vel erat tortor. Nulla facilisi. In nulla quam, lacinia eu aliquam ac, aliquam in nisl. Unordered list…</p>
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row tabmttsh">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="#"><img src="img/products/h13-270x400.jpg" alt=""></a>
                                                        <div class="pro-label">
                                                            <span class="product_label">New</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <div class="product-desc text-center">
                                                    <h3><a href="#">Fusce aliquam variable – v1</a></h3>
                                                    <div class="product-rating">
                                                        <a href="#">
                                                            <i class="fa fa-star"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class="fa fa-star"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class="fa fa-star-half-o"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class="fa fa-star-o"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class="fa fa-star-o"></i>
                                                        </a>
                                                    </div>
                                                    <span class="product-price">
                                                        <span class="amount-one">$245.00</span>
                                                    </span>
                                                    <div class="product-cont-shop">
                                                        <p>Paragraph text Nam tristique porta ligula, vel viverra sem eleifend nec. Nulla sed purus augue, eu euismod tellus. Nam mattis eros nec mi sagittis sagittis. Vestibulum suscipit cursus bibendum. Integer at justo eget sem auctor auctor eget vitae arcu. Nam tempor malesuada porttitor. Nulla quis dignissim ipsum. Aliquam pulvinar iaculis justo, sit amet interdum sem hendrerit vitae. Vivamus vel erat tortor. Nulla facilisi. In nulla quam, lacinia eu aliquam ac, aliquam in nisl. Unordered list…</p>
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row tabmttsh">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="#"><img src="img/products/h14-270x400.jpg" alt=""></a>
                                                        <div class="pro-label">
                                                            <span class="product_label blue_label">20%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <div class="product-desc text-center">
                                                    <h3><a href="#">Collarless playsuit white</a></h3>
                                                    <span class="product-price pro-mb">
                                                        <span class="amount-one amnt-one">$55.00</span>
                                                        <span class="amount-two amnt-two">$44.25</span>
                                                    </span>
                                                    <div class="product-cont-shop">
                                                        <p>Paragraph text Nam tristique porta ligula, vel viverra sem eleifend nec. Nulla sed purus augue, eu euismod tellus. Nam mattis eros nec mi sagittis sagittis. Vestibulum suscipit cursus bibendum. Integer at justo eget sem auctor auctor eget vitae arcu. Nam tempor malesuada porttitor. Nulla quis dignissim ipsum. Aliquam pulvinar iaculis justo, sit amet interdum sem hendrerit vitae. Vivamus vel erat tortor. Nulla facilisi. In nulla quam, lacinia eu aliquam ac, aliquam in nisl. Unordered list…</p>
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row tabmttsh">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="#"><img src="img/products/6-270x400.jpg" alt=""></a>
                                                        <div class="pro-label">
                                                            <span class="product_label blue_label">20%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <div class="product-desc text-center">
                                                    <h3><a href="#">Floral gold collar chunky</a></h3>
                                                    <span class="product-price pro-mb">
                                                        <span class="amount-one amnt-one">$100.00</span>
                                                        <span class="amount-two amnt-two">$80.00</span>
                                                    </span>
                                                    <div class="product-cont-shop">
                                                        <p>Paragraph text Nam tristique porta ligula, vel viverra sem eleifend nec. Nulla sed purus augue, eu euismod tellus. Nam mattis eros nec mi sagittis sagittis. Vestibulum suscipit cursus bibendum. Integer at justo eget sem auctor auctor eget vitae arcu. Nam tempor malesuada porttitor. Nulla quis dignissim ipsum. Aliquam pulvinar iaculis justo, sit amet interdum sem hendrerit vitae. Vivamus vel erat tortor. Nulla facilisi. In nulla quam, lacinia eu aliquam ac, aliquam in nisl. Unordered list…</p>
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row tabmttsh">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="#"><img src="img/products/h09-270x400.jpg" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <div class="product-desc text-center">
                                                    <h3><a href="#">Floral gold collar chunky – s2</a></h3>
                                                    <span class="product-price">
                                                        <span class="amount-one">$110.00</span>
                                                    </span>
                                                    <div class="product-cont-shop">
                                                        <p>Paragraph text Nam tristique porta ligula, vel viverra sem eleifend nec. Nulla sed purus augue, eu euismod tellus. Nam mattis eros nec mi sagittis sagittis. Vestibulum suscipit cursus bibendum. Integer at justo eget sem auctor auctor eget vitae arcu. Nam tempor malesuada porttitor. Nulla quis dignissim ipsum. Aliquam pulvinar iaculis justo, sit amet interdum sem hendrerit vitae. Vivamus vel erat tortor. Nulla facilisi. In nulla quam, lacinia eu aliquam ac, aliquam in nisl. Unordered list…</p>
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row tabmttsh">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="#"><img src="img/products/h10-270x400.jpg" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <div class="product-desc text-center">
                                                    <h3><a href="#">Floral gold collar chunky – s3</a></h3>
                                                    <span class="product-price">
                                                        <span class="amount-one">$133.00</span>
                                                    </span>
                                                    <div class="product-cont-shop">
                                                        <p>Paragraph text Nam tristique porta ligula, vel viverra sem eleifend nec. Nulla sed purus augue, eu euismod tellus. Nam mattis eros nec mi sagittis sagittis. Vestibulum suscipit cursus bibendum. Integer at justo eget sem auctor auctor eget vitae arcu. Nam tempor malesuada porttitor. Nulla quis dignissim ipsum. Aliquam pulvinar iaculis justo, sit amet interdum sem hendrerit vitae. Vivamus vel erat tortor. Nulla facilisi. In nulla quam, lacinia eu aliquam ac, aliquam in nisl. Unordered list…</p>
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row tabmttsh">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="#"><img src="img/products/x31-270x400.jpg" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <div class="product-desc text-center">
                                                    <h3><a href="#">Fusce aliquam sample – s2</a></h3>
                                                    <div class="product-rating">
                                                        <a href="#">
                                                            <i class="fa fa-star"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class="fa fa-star"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class="fa fa-star"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class="fa fa-star-half-o"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class="fa fa-star-o"></i>
                                                        </a>
                                                    </div>
                                                    <span class="product-price">
                                                        <span class="amount-one">$22.00</span>
                                                    </span>
                                                    <div class="product-cont-shop">
                                                        <p>Paragraph text Nam tristique porta ligula, vel viverra sem eleifend nec. Nulla sed purus augue, eu euismod tellus. Nam mattis eros nec mi sagittis sagittis. Vestibulum suscipit cursus bibendum. Integer at justo eget sem auctor auctor eget vitae arcu. Nam tempor malesuada porttitor. Nulla quis dignissim ipsum. Aliquam pulvinar iaculis justo, sit amet interdum sem hendrerit vitae. Vivamus vel erat tortor. Nulla facilisi. In nulla quam, lacinia eu aliquam ac, aliquam in nisl. Unordered list…</p>
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row tabmttsh">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="#"><img src="img/products/h03-270x400.jpg" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <div class="product-desc text-center">
                                                    <h3><a href="#">Fusce aliquam sample – s3</a></h3>
                                                    <div class="product-rating">
                                                        <a href="#">
                                                            <i class="fa fa-star"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class="fa fa-star"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class="fa fa-star"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class="fa fa-star-half-o"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class="fa fa-star-o"></i>
                                                        </a>
                                                    </div>
                                                    <span class="product-price">
                                                        <span class="amount-one">$44.20</span>
                                                    </span>
                                                    <div class="product-cont-shop">
                                                        <p>Paragraph text Nam tristique porta ligula, vel viverra sem eleifend nec. Nulla sed purus augue, eu euismod tellus. Nam mattis eros nec mi sagittis sagittis. Vestibulum suscipit cursus bibendum. Integer at justo eget sem auctor auctor eget vitae arcu. Nam tempor malesuada porttitor. Nulla quis dignissim ipsum. Aliquam pulvinar iaculis justo, sit amet interdum sem hendrerit vitae. Vivamus vel erat tortor. Nulla facilisi. In nulla quam, lacinia eu aliquam ac, aliquam in nisl. Unordered list…</p>
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row tabmttsh">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="#"><img src="img/products/9-270x400.jpg" alt=""></a>
                                                        <div class="pro-label">
                                                            <span class="product_label blue_label">4%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <div class="product-desc text-center">
                                                    <h3><a href="#">Cashmere Saint Laurent</a></h3>
                                                    <div class="product-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <span class="product-price pro-mb">
                                                        <span class="amount-one amnt-one">$18.00</span>
                                                        <span class="amount-two amnt-two">$17.20</span>
                                                    </span>
                                                    <div class="product-cont-shop">
                                                        <p>Paragraph text Nam tristique porta ligula, vel viverra sem eleifend nec. Nulla sed purus augue, eu euismod tellus. Nam mattis eros nec mi sagittis sagittis. Vestibulum suscipit cursus bibendum. Integer at justo eget sem auctor auctor eget vitae arcu. Nam tempor malesuada porttitor. Nulla quis dignissim ipsum. Aliquam pulvinar iaculis justo, sit amet interdum sem hendrerit vitae. Vivamus vel erat tortor. Nulla facilisi. In nulla quam, lacinia eu aliquam ac, aliquam in nisl. Unordered list…</p>
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row tabmttsh">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="#"><img src="img/products/h13-270x400.jpg" alt=""></a>
                                                        <div class="pro-label">
                                                            <span class="product_label">New</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <div class="product-desc text-center">
                                                    <h3><a href="#">Fusce aliquam variable – v1</a></h3>
                                                    <div class="product-rating">
                                                        <a href="#">
                                                            <i class="fa fa-star"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class="fa fa-star"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class="fa fa-star-half-o"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class="fa fa-star-o"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class="fa fa-star-o"></i>
                                                        </a>
                                                    </div>
                                                    <span class="product-price">
                                                        <span class="amount-one">$245.00</span>
                                                    </span>
                                                    <div class="product-cont-shop">
                                                        <p>Paragraph text Nam tristique porta ligula, vel viverra sem eleifend nec. Nulla sed purus augue, eu euismod tellus. Nam mattis eros nec mi sagittis sagittis. Vestibulum suscipit cursus bibendum. Integer at justo eget sem auctor auctor eget vitae arcu. Nam tempor malesuada porttitor. Nulla quis dignissim ipsum. Aliquam pulvinar iaculis justo, sit amet interdum sem hendrerit vitae. Vivamus vel erat tortor. Nulla facilisi. In nulla quam, lacinia eu aliquam ac, aliquam in nisl. Unordered list…</p>
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row tabmttsh">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="#"><img src="img/products/h14-270x400.jpg" alt=""></a>
                                                        <div class="pro-label">
                                                            <span class="product_label blue_label">20%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <div class="product-desc text-center">
                                                    <h3><a href="#">Collarless playsuit white</a></h3>
                                                    <span class="product-price pro-mb">
        <span class="amount-one amnt-one">$55.00</span>
                                                    <span class="amount-two amnt-two">$44.25</span>
                                                    </span>
                                                    <div class="product-cont-shop">
                                                        <p>Paragraph text Nam tristique porta ligula, vel viverra sem eleifend nec. Nulla sed purus augue, eu euismod tellus. Nam mattis eros nec mi sagittis sagittis. Vestibulum suscipit cursus bibendum. Integer at justo eget sem auctor auctor eget vitae arcu. Nam tempor malesuada porttitor. Nulla quis dignissim ipsum. Aliquam pulvinar iaculis justo, sit amet interdum sem hendrerit vitae. Vivamus vel erat tortor. Nulla facilisi. In nulla quam, lacinia eu aliquam ac, aliquam in nisl. Unordered list…</p>
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="row tabmttsh">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="#"><img src="img/products/6-270x400.jpg" alt=""></a>
                                                        <div class="pro-label">
                                                            <span class="product_label blue_label">20%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                <div class="product-desc text-center">
                                                    <h3><a href="#">Floral gold collar chunky</a></h3>
                                                    <span class="product-price pro-mb">
                                                        <span class="amount-one amnt-one">$100.00</span>
                                                        <span class="amount-two amnt-two">$80.00</span>
                                                    </span>
                                                    <div class="product-cont-shop">
                                                        <p>Paragraph text Nam tristique porta ligula, vel viverra sem eleifend nec. Nulla sed purus augue, eu euismod tellus. Nam mattis eros nec mi sagittis sagittis. Vestibulum suscipit cursus bibendum. Integer at justo eget sem auctor auctor eget vitae arcu. Nam tempor malesuada porttitor. Nulla quis dignissim ipsum. Aliquam pulvinar iaculis justo, sit amet interdum sem hendrerit vitae. Vivamus vel erat tortor. Nulla facilisi. In nulla quam, lacinia eu aliquam ac, aliquam in nisl. Unordered list…</p>
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="blog-pg-nav text-center">
                                    <span>1</span>
                                    <a href="#">2</a>
                                    <a href="#">3</a>
                                    <a href="#">></a>
                                </div>
                            </div>                  
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- all-products-area end -->
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