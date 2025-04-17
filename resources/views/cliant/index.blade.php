@extends('cliant.layouts.layout')
@section('content')
    <!-- Hero Section Begin -->
    <section class="hero">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="hero__categories">
              <div class="hero__categories__all">
                <i class="fa fa-bars"></i>
                <span>All Categories</span>
              </div>
              <ul>
                <li class="dropdown">
                  <a href="./shop-details.html">Kids</a>
                  <i class="fa fa-chevron-down dropdown-icon"></i>
                  <ul class="sub-menu">
                    <li><a href="#">Tales</a></li>
                    <li><a href="#">Drawing Books</a></li>
                    <li><a href="#">Letter Books</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="./shoping-cart.html">Local Syllabus</a>
                  <i class="fa fa-chevron-down dropdown-icon"></i>
                  <ul class="sub-menu">
                    <li><a href="#">Primary</a></li>
                    <li><a href="#">Secondary</a></li>
                    <li><a href="#">Higher Education</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="./empty-cart.html">International Syllabus</a>
                  <i class="fa fa-chevron-down dropdown-icon"></i>
                  <ul class="sub-menu">
                    <li><a href="#">IB</a></li>
                    <li><a href="#">IGCSE</a></li>
                    <li><a href="#">Cambridge</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="./checkout.html">Islamic</a>
                  <i class="fa fa-chevron-down dropdown-icon"></i>
                  <ul class="sub-menu">
                    <li><a href="#">Quran</a></li>
                    <li><a href="#">Hadith</a></li>
                    <li><a href="#">Islamic History</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="./checkout.html">Stationeries</a>
                  <i class="fa fa-chevron-down dropdown-icon"></i>
                  <ul class="sub-menu">
                    <li><a href="#">Pens</a></li>
                    <li><a href="#">Notebooks</a></li>
                    <li><a href="#">Art Supplies</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="./blog-details.html">Others...</a>
                  <i class="fa fa-chevron-down dropdown-icon"></i>
                  <ul class="sub-menu">
                    <li><a href="#">Gadgets</a></li>
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">Gifts</a></li>
                  </ul>
                </li>
              </ul>
            </div>

          </div>
          <div class="col-lg-9">
            <div class="hero__search">
              <div class="hero__search__form">
                <form action="#">

                  <input type="text" placeholder="What do yo u need?" />
                  <button type="submit" class="site-btn">SEARCH</button>
                </form>
              </div>
              <div class="hero__search__phone">


              </div>
            </div>
            <div class="hero__item set-bg" data-setbg="{{ asset('client_asset/img/hero/hero-bg.jpg') }}">
              <div class="hero__text">
                <span>WoooooW</span>
                <h2>METRO <br />Book Shop</h2>
                <p>Leadest Book Store in Sri Lanka !!!</p>
                <a href="#" class="primary-btn">SHOP NOW</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero Section End -->

    <!--Feature section-->
    <section class="feature">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-6 col-md-4 col-xs-12">
            <div class="feature-item">
              <i class="fa-solid fa-truck-fast feature-item-icon"></i>
              <span class="feature-title">Island wide Delivery</span>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-md-4 col-xs-12">
            <div class="feature-item">
              <i class="fa-solid fa-headset feature-item-icon"></i>
              <span class="feature-title">24/7 Support</span>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-md-4 col-xs-12">
            <div class="feature-item">
              <i class="fa-solid fa-right-left feature-item-icon"></i>
              <span class="feature-title"> Return & Refund</span>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-md-4 col-xs-12">
            <div class="feature-item">
              <i class="fa-solid fa-money-bill feature-item-icon"></i>
              <span class="feature-title">Secure Payment</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Feature Section-->

    <!-- Categories Section Begin -->
    <section class="categories">
      <div class="container">
        <div class="row">
          <div class="categories__slider owl-carousel">
            <div class="col-lg-3">
              <div
                class="categories__item set-bg"
                data-setbg="{{ asset('client_asset/img/category/kidss.webp') }}"
              >
                <h5><a href="#">Kids</a></h5>
              </div>
            </div>
            <div class="col-lg-3">
              <div
                class="categories__item set-bg"
                data-setbg="{{ asset('client_asset/img/category/kidss.webp') }}"
              >
                <h5><a href="#">Local Syllabus</a></h5>
              </div>
            </div>
            <div class="col-lg-3">
              <div
                class="categories__item set-bg"
                data-setbg="{{ asset('client_asset/img/category/kidss.webp') }}"
              >
                <h5><a href="#">International Syllabus</a></h5>
              </div>
            </div>

            <div class="col-lg-3">
              <div
                class="categories__item set-bg"
                data-setbg="{{ asset('client_asset/img/category/kidss.webp') }}"
              >
                <h5><a href="#">Stationaries</a></h5>
              </div>
            </div>
            <div class="col-lg-3">
              <div
                class="categories__item set-bg"
                data-setbg="{{ asset('client_asset/img/category/kidss.webp') }}"
              >
                <h5><a href="#">Islamic</a></h5>
              </div>
            </div>
            <div class="col-lg-3">
              <div
                class="categories__item set-bg"
                data-setbg="img/category/ot.webp"
              >
                <h5><a href="#">Others...</a></h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Categories Section End -->

     <!--Day-Deal Section-->

    <!--End Day Deal Section-->

     <!--NEW Arrivals -->
     <section class="popular">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="arrival-heading">
              <span class="arrival-title">New Arrivals</span>
            </div>
          </div>
                  <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="pupular-product">
                          <img src="{{ asset('client_asset/img/product/1.jp') }}" class="popular-product-img" alt="">
                          <div class="popular-product-icon">
                            <i class="fa-solid fa-cart-plus" title="Add to cart"></i>
                            <i class="fa-regular fa-heart" title="Add to Wishlist"></i>
                            <i class="fa-solid fa-code-compare" title="Compare"></i>
                            <i class="fa-solid fa-magnifying-glass-plus" title="Zoom Image"></i>
                          </div>
                          <div class="popular-product-new-tag">
                            <span>New</span>
                          </div>
                          <div class="popular-product-info">
                            <span class="popular-product-type">
                              <h4 class="popular-product-name"><a href="#">Book Name</a></h4>
                              <a href="#">Author</a></span>
                              <a href="#">Publisher</a></span>


                              <div class="popular-product-price-detail">
                                  <span class="popular-product-price">1500 LKR</span>
                                  <span class="popular-product-del-price">2000 LKR</span>
                              </div>
                          </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="pupular-product">
                        <img src="img/product/2.jpg" class="popular-product-img" alt="">
                        <div class="popular-product-icon">
                          <i class="fa-solid fa-cart-plus" title="Add to cart"></i>
                          <i class="fa-regular fa-heart" title="Add to Wishlist"></i>
                          <i class="fa-solid fa-code-compare" title="Compare"></i>
                          <i class="fa-solid fa-magnifying-glass-plus" title="Zoom Image"></i>
                        </div>
                        <div class="popular-product-sale-tag">
                          <span>Sale</span>
                        </div>
                        <div class="popular-product-info">
                          <span class="popular-product-type">
                            <h4 class="popular-product-name"><a href="#">Book Name</a></h4>
                            <a href="#">Author</a></span>
                            <a href="#">Publisher</a></span>


                            <div class="popular-product-price-detail">
                                <span class="popular-product-price">1500 LKR</span>
                                <span class="popular-product-del-price">2000 LKR</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="pupular-product">
                      <img src="img/product/3.jpg" class="popular-product-img" alt="">
                      <div class="popular-product-icon">
                        <i class="fa-solid fa-cart-plus" title="Add to cart"></i>
                        <i class="fa-regular fa-heart" title="Add to Wishlist"></i>
                        <i class="fa-solid fa-code-compare" title="Compare"></i>
                        <i class="fa-solid fa-magnifying-glass-plus" title="Zoom Image"></i>
                      </div>
                      <div class="popular-product-new-tag">
                        <span>New</span>
                      </div>
                      <div class="popular-product-info">
                        <span class="popular-product-type">
                          <h4 class="popular-product-name"><a href="#">Book Name</a></h4>
                          <a href="#">Author</a></span>
                          <a href="#">Publisher</a></span>


                          <div class="popular-product-price-detail">
                              <span class="popular-product-price">1500 LKR</span>
                              <span class="popular-product-del-price">2000 LKR</span>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="pupular-product">
                    <img src="img/product/4.jpg" class="popular-product-img" alt="">
                    <div class="popular-product-icon">
                      <i class="fa-solid fa-cart-plus" title="Add to cart"></i>
                      <i class="fa-regular fa-heart" title="Add to Wishlist"></i>
                      <i class="fa-solid fa-code-compare" title="Compare"></i>
                      <i class="fa-solid fa-magnifying-glass-plus" title="Zoom Image"></i>
                    </div>
                    <div class="popular-product-sale-tag">
                      <span>Sale</span>
                    </div>
                    <div class="popular-product-info">
                      <span class="popular-product-type">
                        <h4 class="popular-product-name"><a href="#">Book Name</a></h4>
                        <a href="#">Author</a></span>
                        <a href="#">Publisher</a></span>


                        <div class="popular-product-price-detail">
                            <span class="popular-product-price">1500 LKR</span>
                            <span class="popular-product-del-price">2000 LKR</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="pupular-product">
                  <img src="img/product/5.jpg" class="popular-product-img" alt="">
                  <div class="popular-product-icon">
                    <i class="fa-solid fa-cart-plus" title="Add to cart"></i>
                    <i class="fa-regular fa-heart" title="Add to Wishlist"></i>
                    <i class="fa-solid fa-code-compare" title="Compare"></i>
                    <i class="fa-solid fa-magnifying-glass-plus" title="Zoom Image"></i>
                  </div>
                  <div class="popular-product-new-tag">
                    <span>New</span>
                  </div>
                  <div class="popular-product-info">
                    <span class="popular-product-type">
                      <h4 class="popular-product-name"><a href="#">Book Name</a></h4>
                      <a href="#">Author</a></span>
                      <a href="#">Publisher</a></span>


                      <div class="popular-product-price-detail">
                          <span class="popular-product-price">1500 LKR</span>
                          <span class="popular-product-del-price">2000 LKR</span>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="pupular-product">
                <img src="img/product/1.jpg" class="popular-product-img" alt="">
                <div class="popular-product-icon">
                  <i class="fa-solid fa-cart-plus" title="Add to cart"></i>
                  <i class="fa-regular fa-heart" title="Add to Wishlist"></i>
                  <i class="fa-solid fa-code-compare" title="Compare"></i>
                  <i class="fa-solid fa-magnifying-glass-plus" title="Zoom Image"></i>
                </div>
                <div class="popular-product-sale-tag">
                  <span>Sale</span>
                </div>
                <div class="popular-product-info">
                  <span class="popular-product-type">
                    <h4 class="popular-product-name"><a href="#">Book Name</a></h4>
                    <a href="#">Author</a></span>
                    <a href="#">Publisher</a></span>


                    <div class="popular-product-price-detail">
                        <span class="popular-product-price">1500 LKR</span>
                        <span class="popular-product-del-price">2000 LKR</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="pupular-product">
              <img src="img/product/2.jpg" class="popular-product-img" alt="">
              <div class="popular-product-icon">
                <i class="fa-solid fa-cart-plus" title="Add to cart"></i>
                <i class="fa-regular fa-heart" title="Add to Wishlist"></i>
                <i class="fa-solid fa-code-compare" title="Compare"></i>
                <i class="fa-solid fa-magnifying-glass-plus" title="Zoom Image"></i>
              </div>
              <div class="popular-product-new-tag">
                <span>New</span>
              </div>
              <div class="popular-product-info">
                <span class="popular-product-type">
                  <h4 class="popular-product-name"><a href="#">Book Name</a></h4>
                  <a href="#">Author</a></span>
                  <a href="#">Publisher</a></span>


                  <div class="popular-product-price-detail">
                      <span class="popular-product-price">1500 LKR</span>
                      <span class="popular-product-del-price">2000 LKR</span>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="pupular-product">
            <img src="img/product/3.jpg" class="popular-product-img" alt="">
            <div class="popular-product-icon">
              <i class="fa-solid fa-cart-plus" title="Add to cart"></i>
              <i class="fa-regular fa-heart" title="Add to Wishlist"></i>
              <i class="fa-solid fa-code-compare" title="Compare"></i>
              <i class="fa-solid fa-magnifying-glass-plus" title="Zoom Image"></i>
            </div>
            <div class="popular-product-sale-tag">
              <span>Sale</span>
            </div>
            <div class="popular-product-info">
              <span class="popular-product-type">
                <h4 class="popular-product-name"><a href="#">Book Name</a></h4>
                <a href="#">Author</a></span>
                <a href="#">Publisher</a></span>


                <div class="popular-product-price-detail">
                    <span class="popular-product-price">1500 LKR</span>
                    <span class="popular-product-del-price">2000 LKR</span>
                </div>
            </div>
        </div>
    </div>
        </div>
      </div>
    </section>
    <!--End Popular product-->

    <section class="day-deal">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="arrival-heading">
              <span class="arrival-title">Special Deal</span>
            </div>
          </div>
          <div class="col-lg-6">
              <div class="day-deal-container">
                 <span class="deal-heading">Deal of the Day</span>
               <div class="day-deal-item">
                 <div class="day-deal-item-image">
                   <img src="img/product/3.jpg" alt="">
                 </div>
                 <div class="day-deal-info">
                    <img src="https://png.pngtree.com/png-vector/20220629/ourmid/pngtree-four-4-star-rank-sign-vector-illustration-eps10-png-image_5621249.png" height="30px" width="90px" alt="">
                    <h5 class="day-deal-name">Deal Name Goes Here</h5>
                    <p class="day-deal-item-detail">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit
                      temporibus dolorum officiis, deleniti molestiae laborum.</p>
                      <div class="day-deal-price-detail">
                         <span class="day-deal-price">15000 PKR</span>
                          <span class="day-deal-del-price">25000</span>
                      </div>
                      <div class="day-deal-btn">
                        <a href="#" class="day-deal-cart-btn">Add to cart</a>
                      </div>
                      <span class="day-deal-warning">Hurry Up! offer ends in:</span>
                      <div class="day-deal-timer">
                          <div class="day-deal-hour">
                            <span>24</span>
                            <p class="day-deal-time">Hours</p>
                          </div>
                          <div class="day-deal-min">
                            <span>60</span>
                            <p class="day-deal-time">Min</p>
                          </div>
                          <div class="day-deal-sec">
                            <span>60</span>
                            <p class="day-deal-time">Sec</p>
                          </div>
                      </div>
                  </div>
               </div>
              </div>
          </div>

        </div>
      </div>
    </section>

   <!--Best Sellers-->
   <section class="popular">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="arrival-heading">
            <span class="arrival-title">Best Sellers</span>
          </div>
        </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="pupular-product">
                        <img src="img/product/5.jpg" class="popular-product-img" alt="">
                        <div class="popular-product-icon">
                          <i class="fa-solid fa-cart-plus" title="Add to cart"></i>
                          <i class="fa-regular fa-heart" title="Add to Wishlist"></i>
                          <i class="fa-solid fa-code-compare" title="Compare"></i>
                          <i class="fa-solid fa-magnifying-glass-plus" title="Zoom Image"></i>
                        </div>
                        <div class="popular-product-new-tag">
                          <span>New</span>
                        </div>
                        <div class="popular-product-info">
                          <span class="popular-product-type">
                            <h4 class="popular-product-name"><a href="#">Book Name</a></h4>
                            <a href="#">Author</a></span>
                            <a href="#">Publisher</a></span>


                            <div class="popular-product-price-detail">
                                <span class="popular-product-price">1500 LKR</span>
                                <span class="popular-product-del-price">2000 LKR</span>
                            </div>
                        </div>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <div class="pupular-product">
                      <img src="img/product/4.jpg" class="popular-product-img" alt="">
                      <div class="popular-product-icon">
                        <i class="fa-solid fa-cart-plus" title="Add to cart"></i>
                        <i class="fa-regular fa-heart" title="Add to Wishlist"></i>
                        <i class="fa-solid fa-code-compare" title="Compare"></i>
                        <i class="fa-solid fa-magnifying-glass-plus" title="Zoom Image"></i>
                      </div>
                      <div class="popular-product-sale-tag">
                        <span>Sale</span>
                      </div>
                      <div class="popular-product-info">
                        <span class="popular-product-type">
                          <h4 class="popular-product-name"><a href="#">Book Name</a></h4>
                          <a href="#">Author</a></span>
                          <a href="#">Publisher</a></span>


                          <div class="popular-product-price-detail">
                              <span class="popular-product-price">1500 LKR</span>
                              <span class="popular-product-del-price">2000 LKR</span>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="pupular-product">
                    <img src="img/product/3.jpg" class="popular-product-img" alt="">
                    <div class="popular-product-icon">
                      <i class="fa-solid fa-cart-plus" title="Add to cart"></i>
                      <i class="fa-regular fa-heart" title="Add to Wishlist"></i>
                      <i class="fa-solid fa-code-compare" title="Compare"></i>
                      <i class="fa-solid fa-magnifying-glass-plus" title="Zoom Image"></i>
                    </div>
                    <div class="popular-product-new-tag">
                      <span>New</span>
                    </div>
                    <div class="popular-product-info">
                      <span class="popular-product-type">
                        <h4 class="popular-product-name"><a href="#">Book Name</a></h4>
                        <a href="#">Author</a></span>
                        <a href="#">Publisher</a></span>


                        <div class="popular-product-price-detail">
                            <span class="popular-product-price">1500 LKR</span>
                            <span class="popular-product-del-price">2000 LKR</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="pupular-product">
                  <img src="img/product/2.jpg" class="popular-product-img" alt="">
                  <div class="popular-product-icon">
                    <i class="fa-solid fa-cart-plus" title="Add to cart"></i>
                    <i class="fa-regular fa-heart" title="Add to Wishlist"></i>
                    <i class="fa-solid fa-code-compare" title="Compare"></i>
                    <i class="fa-solid fa-magnifying-glass-plus" title="Zoom Image"></i>
                  </div>
                  <div class="popular-product-sale-tag">
                    <span>Sale</span>
                  </div>
                  <div class="popular-product-info">
                    <span class="popular-product-type">
                      <h4 class="popular-product-name"><a href="#">Book Name</a></h4>
                      <a href="#">Author</a></span>
                      <a href="#">Publisher</a></span>


                      <div class="popular-product-price-detail">
                          <span class="popular-product-price">1500 LKR</span>
                          <span class="popular-product-del-price">2000 LKR</span>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="pupular-product">
                <img src="img/product/1.jpg" class="popular-product-img" alt="">
                <div class="popular-product-icon">
                  <i class="fa-solid fa-cart-plus" title="Add to cart"></i>
                  <i class="fa-regular fa-heart" title="Add to Wishlist"></i>
                  <i class="fa-solid fa-code-compare" title="Compare"></i>
                  <i class="fa-solid fa-magnifying-glass-plus" title="Zoom Image"></i>
                </div>
                <div class="popular-product-new-tag">
                  <span>New</span>
                </div>
                <div class="popular-product-info">
                  <span class="popular-product-type">
                    <h4 class="popular-product-name"><a href="#">Book Name</a></h4>
                    <a href="#">Author</a></span>
                    <a href="#">Publisher</a></span>


                    <div class="popular-product-price-detail">
                        <span class="popular-product-price">1500 LKR</span>
                        <span class="popular-product-del-price">2000 LKR</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="pupular-product">
              <img src="img/product/5.jpg" class="popular-product-img" alt="">
              <div class="popular-product-icon">
                <i class="fa-solid fa-cart-plus" title="Add to cart"></i>
                <i class="fa-regular fa-heart" title="Add to Wishlist"></i>
                <i class="fa-solid fa-code-compare" title="Compare"></i>
                <i class="fa-solid fa-magnifying-glass-plus" title="Zoom Image"></i>
              </div>
              <div class="popular-product-sale-tag">
                <span>Sale</span>
              </div>
              <div class="popular-product-info">
                <span class="popular-product-type">
                  <h4 class="popular-product-name"><a href="#">Book Name</a></h4>
                  <a href="#">Author</a></span>
                  <a href="#">Publisher</a></span>


                  <div class="popular-product-price-detail">
                      <span class="popular-product-price">1500 LKR</span>
                      <span class="popular-product-del-price">2000 LKR</span>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="pupular-product">
            <img src="img/product/4.jpg" class="popular-product-img" alt="">
            <div class="popular-product-icon">
              <i class="fa-solid fa-cart-plus" title="Add to cart"></i>
              <i class="fa-regular fa-heart" title="Add to Wishlist"></i>
              <i class="fa-solid fa-code-compare" title="Compare"></i>
              <i class="fa-solid fa-magnifying-glass-plus" title="Zoom Image"></i>
            </div>
            <div class="popular-product-new-tag">
              <span>New</span>
            </div>
            <div class="popular-product-info">
              <span class="popular-product-type">
                <h4 class="popular-product-name"><a href="#">Book Name</a></h4>
                <a href="#">Author</a></span>
                <a href="#">Publisher</a></span>


                <div class="popular-product-price-detail">
                    <span class="popular-product-price">1500 LKR</span>
                    <span class="popular-product-del-price">2000 LKR</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4 col-lg-3">
      <div class="pupular-product">
          <img src="img/product/3.jpg" class="popular-product-img" alt="">
          <div class="popular-product-icon">
            <i class="fa-solid fa-cart-plus" title="Add to cart"></i>
            <i class="fa-regular fa-heart" title="Add to Wishlist"></i>
            <i class="fa-solid fa-code-compare" title="Compare"></i>
            <i class="fa-solid fa-magnifying-glass-plus" title="Zoom Image"></i>
          </div>
          <div class="popular-product-sale-tag">
            <span>Sale</span>
          </div>
          <div class="popular-product-info">
            <span class="popular-product-type">
              <h4 class="popular-product-name"><a href="#">Book Name</a></h4>
              <a href="#">Author</a></span>
              <a href="#">Publisher</a></span>


              <div class="popular-product-price-detail">
                  <span class="popular-product-price">1500 LKR</span>
                  <span class="popular-product-del-price">2000 LKR</span>
              </div>
          </div>
      </div>
  </div>
      </div>
    </div>
  </section>
  <!--End Best Sellers-->


  <section class="banner">
    <div class="container">
      <div class="row">
          <div class="col-sm-6 col-md-4">
            <div
            class="banner__item set-bg"
            data-setbg="img/banner/fashion.png"
          >
            <div class="banner-info">
            <span class="banner-title">Kids</span>
            <p class="banner-description">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <a href="#" class="banner-btn">Shop Now</a>
            </div>
          </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div
            class="banner__item set-bg"
            data-setbg="img/banner/shoes.png"
          >
            <div class="banner-info">
            <span class="banner-title">Islamic</span>
            <p class="banner-description">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <a href="#" class="banner-btn">Shop Now</a>
            </div>
          </div>
          </div>
          <div class="col-sm-6 col-md-4">
            <div
            class="banner__item set-bg"
            data-setbg="img/banner/sale.png"
          >
            <div class="banner-info">
            <span class="banner-title">Biographies</span>
            <p class="banner-description">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <a href="#" class="banner-btn">Shop Now</a>
            </div>
          </div>
          </div>
      </div>
    </div>
 </section>


    <!--Authors-->
     <section class="flash-sale">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="sale-heading">
              <span class="sale-title">Authors</span>
            </div>
          </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
               <div class="flash-sale-item" style=" border-color: transparent;">
                   <div class="flash-sale-item-image">
                     <img src="img/product/ab.webp" class="flash-sale-item-img" alt="" style="border-radius: 50%;">


                   </div>
                   <div class="flash-sale-item-info">
                    <hr class="flash-sale-underline">
                      <h1 class="flash-sale-item-name">Author Name</h1>
                      <class="flash-sale-rating-img" height="20px" width="60px" alt="">
                      <div class="flash-sale-item-price-detail">

                      </div>


                    </div>
               </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="flash-sale-item" style=" border-color: transparent;">
                <div class="flash-sale-item-image">
                  <img src="img/product/ab.webp" class="flash-sale-item-img" alt="" style="border-radius: 50%;">


                </div>
                  <div class="flash-sale-item-info">
                    <hr class="flash-sale-underline">
                     <h1 class="flash-sale-item-name">Author Name</h1>
                     <class="flash-sale-rating-img" height="20px" width="60px" alt="">
                     <div class="flash-sale-item-price-detail">

                     </div>


                   </div>
              </div>
           </div>
           <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="flash-sale-item" style=" border-color: transparent;">
              <div class="flash-sale-item-image">
                <img src="img/product/ab.webp" class="flash-sale-item-img" alt="" style="border-radius: 50%;">


              </div>
                <div class="flash-sale-item-info">
                  <hr class="flash-sale-underline">
                   <h1 class="flash-sale-item-name">Author Name</h1>
                   <class="flash-sale-rating-img" height="20px" width="60px" alt="">
                   <div class="flash-sale-item-price-detail">

                   </div>


                 </div>
            </div>
         </div>
         <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="flash-sale-item" style=" border-color: transparent;">
            <div class="flash-sale-item-image">
              <img src="img/product/ab.webp" class="flash-sale-item-img" alt="" style="border-radius: 50%;">


            </div>
              <div class="flash-sale-item-info">
                <hr class="flash-sale-underline">
                 <h1 class="flash-sale-item-name">Author Name</h1>
                 <class="flash-sale-rating-img" height="20px" width="60px" alt="">
                 <div class="flash-sale-item-price-detail">

                 </div>


               </div>
          </div>
       </div>
        </div>
      </div>
     </section>
     <!--Publishers-->
     <section class="flash-sale">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="sale-heading">
              <span class="sale-title">Publishers</span>
            </div>
          </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
               <div class="flash-sale-item">
                   <div class="flash-sale-item-image" style="height: 172.8px; width: 172.8px;">
                     <img src="img/product/pub.webp" class="flash-sale-item-img" alt="">


                   </div>
                   <div class="flash-sale-item-info">
                    <hr class="flash-sale-underline">
                      <h1 class="flash-sale-item-name">Publisher Name</h1>
                      <class="flash-sale-rating-img" height="20px" width="60px" alt="">
                      <div class="flash-sale-item-price-detail">

                      </div>


                    </div>
               </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="flash-sale-item">
                <div class="flash-sale-item-image" style="height: 172.8px; width: 172.8px;">
                  <img src="img/product/pub.webp" class="flash-sale-item-img" alt="">


                </div>
                  <div class="flash-sale-item-info">
                    <hr class="flash-sale-underline">
                     <h1 class="flash-sale-item-name">Publisher Name</h1>
                     <class="flash-sale-rating-img" height="20px" width="60px" alt="">
                     <div class="flash-sale-item-price-detail">

                     </div>


                   </div>
              </div>
           </div>
           <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="flash-sale-item">
              <div class="flash-sale-item-image" style="height: 172.8px; width: 172.8px;">
                <img src="img/product/pub.webp" class="flash-sale-item-img" alt="">


              </div>
                <div class="flash-sale-item-info">
                  <hr class="flash-sale-underline">
                   <h1 class="flash-sale-item-name">Publisher Name</h1>
                   <class="flash-sale-rating-img" height="20px" width="60px" alt="">
                   <div class="flash-sale-item-price-detail">

                   </div>


                 </div>
            </div>
         </div>
         <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="flash-sale-item">
            <div class="flash-sale-item-image" style="height: 172.8px; width: 172.8px;">
              <img src="img/product/pub.webp" class="flash-sale-item-img" alt="">


            </div>
              <div class="flash-sale-item-info">
                <hr class="flash-sale-underline">
                 <h1 class="flash-sale-item-name">Publisher Name</h1>
                 <class="flash-sale-rating-img" height="20px" width="60px" alt="">
                 <div class="flash-sale-item-price-detail">

                 </div>


               </div>
          </div>
       </div>
        </div>
      </div>
     </section>
     <!--Banner Section-->

    <!--End Banner Section-->

    <!--Cookies Section-->
    <div class="cookies">
      <section class="cookies-header">
        <i class="fa-solid fa-cookie"></i>
        <h2>Cookie Usage Statement</h2>
      </section>
      <div class="data">
        <p>Our website uses cookies to enhance your browsing experience. By using this site,
           you agree to our use of cookies. Cookies help us offer personalized content and improve site functionality.
           For more details and to manage your cookie preferences, please review our Cookie Policy.</p>
      </div>
      <div class="buttons">
        <button class="button" id="acceptBtn">Accept</button>
        <button class="button" id="declineBtn">Decline</button>
      </div>
    </div>
  <!--End Cookies Section-->

    <!--Client Section-->

  <!--End Client Section-->
@endsection
