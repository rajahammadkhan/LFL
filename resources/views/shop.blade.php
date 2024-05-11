@extends('layouts.master')

@section('top-styles')
@endsection

@section('content') 
        <!--================= Banner Section Start Here =================-->
        <div class="banner banner1">
            <div class="inner-page-banner banner-bg">
                <div class="container">
                    <div class="banner-content">
                        <div class="page-path">
                            <ul>
                                <li><a class="home-page-link" href="index.html">Home</a></li>
                                <li><a class="current-page" href="#">SHOP</a></li>
                            </ul>
                        </div>
                        <h1 class="banner-heading">OUR SHOP</h1>
                    </div>
                </div>
            </div>
        </div>
        <!--================= Banner Section End Here =================-->


    <!--================= Match Result Section Start Here =================-->
    <div class="rts-merch-section section-gap">
        <div class="container">
            <div class="rts-merch-section-inner">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="search-area">
                            <h3 class="title">SEARCH HERE</h3>
                            <form>
                                <div class="form">
                                    <input type="text" class="form-control" id="username" placeholder="Enter Your Email" required="">
                                </div>
                                <div class="button">
                                    <button type="submit" class="btn"><i class="rt-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="wrapper">
                            <h3 class="title">FILTER BY PRICE</h3>
                            <fieldset class="filter-price">
                                <div class="price-field">
                                    <input type="range"  min="100" max="500" value="100" id="lower">
                                    <input type="range" min="100" max="500" value="500" id="upper">
                                </div>
                                <div class="price-wrap">
                                    <span class="price-title">PRICE:</span>
                                    <div class="price-wrap-1">
                                    <input id="one">
                                    <label for="one">$</label>
                                    </div>
                                    <div class="price-wrap_line">-</div>
                                    <div class="price-wrap-2">
                                    <input id="two">
                                    <label for="two">$</label>
                                    </div>
                                </div>
                                <div class="filter-btn">
                                    <button type="submit" class="btn">FILTER</button>
                                </div>
                            </fieldset> 
                        </div>
                        <div class="catagories">
                            <h3 class="title">CATAGORIES</h3>
                            <ul class="item-list">
                                <li class="item">ACCESSORIES (2)</li>
                                <li class="item">BAGPACKS (2)</li>
                                <li class="item">CLOTHES (4)</li>
                                <li class="item">SHOES (5)</li>
                            </ul>
                        </div>
                        <div class="best-seller">
                            <h3 class="title">BEST SELLER</h3>
                            <div class="full-wrapper">
                                <div class="wrapper">
                                    <div class="image"><img src="assets/images/blog/small-post1.png" alt=""></div>
                                    <div class="content">
                                        <ul class="star-rating">
                                            <li><i class="fas fa-star"></i></li>  
                                            <li><i class="fas fa-star"></i></li>  
                                            <li><i class="fas fa-star"></i></li>  
                                            <li><i class="fas fa-star"></i></li>  
                                            <li class="last"><i class="fas fa-star"></i></li>  
                                        </ul>
                                        <a href="#" class="title">INDIOMANE CAP</a>
                                        <p class="price">$38.00</p>
                                    </div>
                                </div>
                                <div class="wrapper">
                                    <div class="image"><img src="assets/images/blog/small-post2.png" alt=""></div>
                                    <div class="content">
                                        <ul class="star-rating">
                                            <li><i class="fas fa-star"></i></li>  
                                            <li><i class="fas fa-star"></i></li>  
                                            <li><i class="fas fa-star"></i></li>  
                                            <li><i class="fas fa-star"></i></li>  
                                            <li class="last"><i class="fas fa-star"></i></li>  
                                        </ul>
                                        <a href="#" class="title">INDIOMANE CAP</a>
                                        <p class="price">$38.00</p>
                                    </div>
                                </div>
                                <div class="wrapper">
                                    <div class="image"><img src="assets/images/blog/small-post3.png" alt=""></div>
                                    <div class="content">
                                        <ul class="star-rating">
                                            <li><i class="fas fa-star"></i></li>  
                                            <li><i class="fas fa-star"></i></li>  
                                            <li><i class="fas fa-star"></i></li>  
                                            <li><i class="fas fa-star"></i></li>  
                                            <li class="last"><i class="fas fa-star"></i></li>  
                                        </ul>
                                        <a href="#" class="title">INDIOMANE CAP</a>
                                        <p class="price">$38.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tags">
                            <h3 class="title">POPULAR TAGS</h3>
                            <ul class="tags-inner">
                                <li><a href="#">INDIOMANE</a></li>
                                <li><a href="#">CAP</a></li>
                                <li><a href="#">JERSEY</a></li>
                                <li><a href="#">FITA</a></li>
                                <li><a href="#">FOOTBALL</a></li>
                                <li><a href="#">PANT</a></li>
                                <li><a href="#">SHOES</a></li>
                                <li><a href="#">TAO</a></li>
                                <li><a href="#">SPORTS</a></li>
                                <li><a href="#">FITNESS</a></li>
                                <li><a href="#">HEALTH</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="shop-product-topbar">
                            <span class="items-onlist"><span>30</span> ITEM ON LIST</span>
                            <div class="filter-area">
                                <button class="product-filter"><i class="fas fa-list"></i> FILTER</button>
                                <div class="separator"></div>
                                <div class="product-show">SHOW<select>
                                        <option value="1">12</option>
                                        <option value="2">8</option>
                                        <option value="3">6</option>
                                        <option value="4">4</option>
                                    </select></div>
                                <button class="grid-btn"><img src="assets/images/icons/grid-icon.svg" alt="grid-icon"></button>
                                <button class="list-btn"><img src="assets/images/icons/list-icon.png" alt="list-icon"></button>
                            </div>
                        </div>
                        <div class="product-area">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="product-item">
                                        <a href="{{route('product-details')}}" class="product-thumb"><img
                                                src="assets/images/products/gloves.png" alt="product-thumb"></a>
                                        <div class="contents">
                                            <a href="{{route('product-details')}}" class="product-name">GOALKEEPER GLOVES</a>
                                            <div class="product-action-area">
                                                <span class="product-price d-block">$38.00 <span class="prev-price">$56.00</span></span>
                                                <a href="cart.html" class="addto-cart">ADD TO CART</a>
                                            </div>
                                        </div>
                                        <div class="product-tag-area">
                                            <div class="sale-tag">SALE</div>
                                        </div>
                                        <ul class="social-area">
                                            <li><a href="#"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                                            <li><a href="#"><i class="rt-search"></i></a></li>
                                            <li><a href="#"><i class="far fa-share-alt"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="product-item">
                                        <a href="{{route('product-details')}}" class="product-thumb"><img
                                                src="assets/images/products/product3.png" alt="product-thumb"></a>
                                        <div class="contents">
                                            <a href="{{route('product-details')}}" class="product-name">MEN FOOTBALL JERSEY</a>
                                            <div class="product-action-area">
                                                <div class="product-action-area">
                                                    <span class="product-price d-block">$42.00 <span class="prev-price">$60.00</span></span>
                                                    <a href="cart.html" class="addto-cart">ADD TO CART</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-tag-area">
                                            <div class="sale-tag">SALE</div>
                                        </div>
                                        <ul class="social-area">
                                            <li><a href="#"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                                            <li><a href="#"><i class="rt-search"></i></a></li>
                                            <li><a href="#"><i class="far fa-share-alt"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="product-item">
                                        <a href="{{route('product-details')}}" class="product-thumb"><img
                                                src="assets/images/products/product5.png" alt="product-thumb"></a>
                                        <div class="contents">
                                            <a href="{{route('product-details')}}" class="product-name">MEN FOOTBALL TARF (NEW)</a>
                                            <div class="product-action-area">
                                                <div class="product-action-area">
                                                    <span class="product-price d-block">$58.00 <span class="prev-price">$90.00</span></span>
                                                    <a href="cart.html" class="addto-cart">ADD TO CART</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-tag-area">
                                            <div class="sale-tag">SALE</div>
                                        </div>
                                        <ul class="social-area">
                                            <li><a href="#"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                                            <li><a href="#"><i class="rt-search"></i></a></li>
                                            <li><a href="#"><i class="far fa-share-alt"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="product-item">
                                        <a href="{{route('product-details')}}" class="product-thumb"><img
                                                src="assets/images/products/product1.png" alt="product-thumb"></a>
                                        <div class="contents">
                                            <a href="{{route('product-details')}}" class="product-name">NEW WORLD CUP FOOTBALL</a>
                                            <div class="product-action-area">
                                                <span class="product-price d-block">$20.00 <span class="prev-price">$36.00</span></span>
                                                <a href="cart.html" class="addto-cart">ADD TO CART</a>
                                            </div>
                                        </div>
                                        <div class="product-tag-area">
                                            <div class="sale-tag">SALE</div>
                                        </div>
                                        <ul class="social-area">
                                            <li><a href="#"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                                            <li><a href="#"><i class="rt-search"></i></a></li>
                                            <li><a href="#"><i class="far fa-share-alt"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="product-item">
                                        <a href="{{route('product-details')}}" class="product-thumb"><img
                                                src="assets/images/products/product2.png" alt="product-thumb"></a>
                                        <div class="contents">
                                            <a href="{{route('product-details')}}" class="product-name">SPORTS SHOES</a>
                                            <div class="product-action-area">
                                                <span class="product-price d-block">$66.00 <span class="prev-price">$99.00</span></span>
                                                <a href="cart.html" class="addto-cart">ADD TO CART</a>
                                            </div>
                                        </div>
                                        <div class="product-tag-area">
                                            <div class="sale-tag">SALE</div>
                                        </div>
                                        <ul class="social-area">
                                            <li><a href="#"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                                            <li><a href="#"><i class="rt-search"></i></a></li>
                                            <li><a href="#"><i class="far fa-share-alt"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="product-item">
                                        <a href="{{route('product-details')}}" class="product-thumb"><img
                                                src="assets/images/products/product6.png" alt="product-thumb"></a>
                                        <div class="contents">
                                            <a href="{{route('product-details')}}" class="product-name">STYLISH CAP</a>
                                            <div class="product-action-area">
                                                <div class="product-action-area">
                                                    <span class="product-price d-block">$30.00 <span class="prev-price">$70.00</span></span>
                                                    <a href="cart.html" class="addto-cart">ADD TO CART</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-tag-area">
                                            <div class="sale-tag">SALE</div>
                                        </div>
                                        <ul class="social-area">
                                            <li><a href="#"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                                            <li><a href="#"><i class="rt-search"></i></a></li>
                                            <li><a href="#"><i class="far fa-share-alt"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="product-item">
                                        <a href="{{route('product-details')}}" class="product-thumb"><img
                                                src="assets/images/products/product7.png" alt="product-thumb"></a>
                                        <div class="contents">
                                            <a href="{{route('product-details')}}" class="product-name">CLUB T-SHIRT</a>
                                            <div class="product-action-area">
                                                <div class="product-action-area">
                                                    <span class="product-price d-block">$45.00 <span class="prev-price">$71.00</span></span>
                                                    <a href="cart.html" class="addto-cart">ADD TO CART</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-tag-area">
                                            <div class="sale-tag">SALE</div>
                                        </div>
                                        <ul class="social-area">
                                            <li><a href="#"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                                            <li><a href="#"><i class="rt-search"></i></a></li>
                                            <li><a href="#"><i class="far fa-share-alt"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="product-item">
                                        <a href="{{route('product-details')}}" class="product-thumb"><img
                                                src="assets/images/products/product4.png" alt="product-thumb"></a>
                                        <div class="contents">
                                            <a href="{{route('product-details')}}" class="product-name">CLUB JERSEY (NEW)</a>
                                            <div class="product-action-area">
                                                <span class="product-price d-block">$39.00 <span class="prev-price">$57.00</span></span>
                                                <a href="cart.html" class="addto-cart">ADD TO CART</a>
                                            </div>
                                        </div>
                                        <div class="product-tag-area">
                                            <div class="sale-tag">SALE</div>
                                        </div>
                                        <ul class="social-area">
                                            <li><a href="#"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                                            <li><a href="#"><i class="rt-search"></i></a></li>
                                            <li><a href="#"><i class="far fa-share-alt"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                    <div class="product-item">
                                        <a href="{{route('product-details')}}" class="product-thumb"><img
                                                src="assets/images/products/product4.png" alt="product-thumb"></a>
                                        <div class="contents">
                                            <a href="{{route('product-details')}}" class="product-name">CLUB JERSEY (NEW)</a>
                                            <div class="product-action-area">
                                                <span class="product-price d-block">$39.00 <span class="prev-price">$57.00</span></span>
                                                <a href="cart.html" class="addto-cart">ADD TO CART</a>
                                            </div>
                                        </div>
                                        <div class="product-tag-area">
                                            <div class="sale-tag">SALE</div>
                                        </div>
                                        <ul class="social-area">
                                            <li><a href="#"><i class="fal fa-shopping-basket"></i></a></li>
                                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                                            <li><a href="#"><i class="rt-search"></i></a></li>
                                            <li><a href="#"><i class="far fa-share-alt"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-pagination-area mt--20">
                            <button class="prev"><i class="far fa-angle-double-left"></i></button>
                            <button class="number active">01</button>
                            <button class="number">02</button>
                            <button class="skip-number">---</button>
                            <button class="number">07</button>
                            <button class="number">08</button>
                            <button class="next"><i class="far fa-angle-double-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================= Match Result Section End Here =================-->

@endsection

@section('bottom-mid-scripts')
@endsection
    
@section('bottom-bot-scripts')
@endsection