<!DOCTYPE html>
<html lang="eg">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="E-commerce Website" />
    <meta name="keywords" content="Ogani, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>E-commerce Website | Codebyadnan</title>

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap"
      rel="stylesheet"
    />

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <!--End Css Styles -->
  </head>

  <body>
    <!-- Page Preloder -->
    <div id="preloder">
      <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
      <div class="humberger__menu__logo">
        <a href="#"><img src="img/logo1.png" alt="" height="70px" /></a>
      </div>
      <div class="humberger__menu__cart">
        <ul>
          <li>
            <a href="wishlist.html"
              ><i class="fa fa-heart"></i> <span>1</span></a
            >
          </li>
          <li>
            <a href="shoping-cart.html"
              ><i class="fa fa-shopping-bag"></i> <span>3</span></a
            >
          </li>
        </ul>
        <div class="header__cart__price">item: <span>1800 PKR</span></div>
      </div>
      <div class="humberger__menu__widget">
        <div class="header__top__right__language">
          <img src="img/language.png" alt="" />
          <div>English</div>
          <span class="arrow_carrot-down"></span>
          <ul>
            <li><a href="#">Spanis</a></li>
            <li><a href="#">English</a></li>
          </ul>
        </div>
        <div class="header__top__right__auth">
          <a href="sign-in.html"><i class="fa fa-user"></i> Login</a>
        </div>
      </div>
      <nav class="humberger__menu__nav mobile-menu">
        <ul>
          <li class="active"><a href="./index.html">Home</a></li>
          <li><a href="./shop-grid.html">Shop</a></li>
          <li>
            <a href="#">Pages</a>
            <ul class="header__menu__dropdown">
              <li><a href="./shop-details.html">Shop Details</a></li>
              <li><a href="./shoping-cart.html">Shoping Cart</a></li>
              <li><a href="./empty-cart.html">Empty Cart</a></li>
              <li><a href="./wishlist.html">Wishlist</a></li>
              <li><a href="./checkout.html">Check Out</a></li>
              <li><a href="./blog-details.html">Blog Details</a></li>
            </ul>
          </li>
          <li><a href="./blog.html">Blog</a></li>
          <li><a href="./contact.html">Contact</a></li>
        </ul>
      </nav>
      <div id="mobile-menu-wrap"></div>
      <div class="header__top__right__social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-pinterest-p"></i></a>
      </div>
      <div class="humberger__menu__contact">
        <ul>
          <li><i class="fa fa-envelope"></i> hello@example.com</li>
          <li>Free Shipping for all Order of 10000 PKR</li>
        </ul>
      </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
      <div class="header__top">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="header__top__left">
                <ul>
                  <li><i class="fa fa-envelope"></i> hello@example.com</li>
                  <li>Free Shipping for all Order of 10000 PKR</li>
                </ul>
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="header__top__right">
                <div class="header__top__right__social">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                  <a href="#"><i class="fa fa-pinterest-p"></i></a>
                </div>
                <div class="header__top__right__language">
                  <img src="img/language.png" alt="" />
                  <div>English</div>
                  <span class="arrow_carrot-down"></span>
                  <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                  </ul>
                </div>
                <div class="header__top__right__auth">
                  <a href="sign-in.html"><i class="fa fa-user"></i> Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row" style="align-items: center">
          <div class="col-lg-3">
            <div class="header__logo">
              <a href="./index.html"
                ><img src="img/logo1.png" alt="" height="70px"
              /></a>
            </div>
          </div>
          <div class="col-lg-6">
            <nav class="header__menu">
              <ul>
                <li class="active"><a href="./index.html">Home</a></li>
                <li><a href="./shop-grid.html">Shop</a></li>
                <li>
                  <a href="#">Pages</a>
                  <ul class="header__menu__dropdown">
                    <li><a href="./shop-details.html">Shop Details</a></li>
                    <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                    <li><a href="./empty-cart.html">Empty Cart</a></li>
                    <li><a href="./wishlist.html">Wishlist</a></li>
                    <li><a href="./checkout.html">Check Out</a></li>
                    <li><a href="./blog-details.html">Blog Details</a></li>
                  </ul>
                </li>
                <li><a href="./blog.html">Blog</a></li>
                <li><a href="./contact.html">Contact</a></li>
              </ul>
            </nav>
          </div>
          <div class="col-lg-3">
            <div class="header__cart">
              <ul>
                <li>
                  <a href="wishlist.html"
                    ><i class="fa fa-heart"></i> <span>1</span></a
                  >
                </li>
                <li>
                  <a href="shoping-cart.html"
                    ><i class="fa fa-shopping-bag"></i> <span>3</span></a
                  >
                </li>
              </ul>
              <div class="header__cart__price">item: <span>1800 PKR</span></div>
            </div>
          </div>
        </div>
        <div class="humberger__open">
          <i class="fa fa-bars"></i>
        </div>
      </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="hero__categories">
              <div class="hero__categories__all">
                <i class="fa fa-bars"></i>
                <span>All Categories</span>
              </div>
              <ul>
                <li><a href="#">Fashion</a></li>
                <li><a href="#">Summer Sale</a></li>
                <li><a href="#">Men's</a></li>
                <li><a href="#">Women's</a></li>
                <li><a href="#">Kid's</a></li>
                <li><a href="#">Accessories</a></li>
                <li><a href="#">Sale</a></li>
                <li><a href="#">Electronic</a></li>
                <li><a href="#">Mobiles</a></li>
                <li><a href="#">Laptops</a></li>
                <li><a href="#">Ladies & Gents</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-9">
            <div class="hero__search">
              <div class="hero__search__form">
                <form action="#">
                  <div class="hero__search__categories">
                    All Categories
                    <span class="arrow_carrot-down"></span>
                  </div>
                  <input type="text" placeholder="What do yo u need?" />
                  <button type="submit" class="site-btn">SEARCH</button>
                </form>
              </div>
              <div class="hero__search__phone">
                <div class="hero__search__phone__icon">
                  <i class="fa fa-phone"></i>
                </div>
                <div class="hero__search__phone__text">
                  <h5>+11 22.123.4321</h5>
                  <span>support 24/7 time</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.png">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="breadcrumb__text">
              <h2>Product Name</h2>
              <div class="breadcrumb__option">
                <a href="./index.html">Home</a>
                <a href="./index.html">Product</a>
                <span>Product Name</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="product__details__pic">
              <div class="product__details__pic__item">
                <img
                  class="product__details__pic__item--large"
                  src="img/product/couple-watch.jpg"
                  alt=""
                />
              </div>
              <div class="product__details__pic__slider owl-carousel">
                <img
                  data-imgbigurl="img/product/couple-watch.jpg"
                  src="img/product/couple-watch.jpg"
                  alt=""
                />
                <img
                  data-imgbigurl="img/product/couple-watch.jpg"
                  src="img/product/couple-watch.jpg"
                  alt=""
                />
                <img
                  data-imgbigurl="img/product/couple-watch.jpg"
                  src="img/product/couple-watch.jpg"
                  alt=""
                />
                <img
                  data-imgbigurl="img/product/couple-watch.jpg"
                  src="img/product/couple-watch.jpg"
                  alt=""
                />
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="product__details__text">
              <h3>Product Name</h3>
              <div class="product__details__rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <span>(18 reviews)</span>
              </div>
              <div class="product__details__price">1500 PKR</div>
              <p>
                Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                Vestibulum ac diam sit amet quam vehicula elementum sed sit amet
                dui. Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam
                vehicula elementum sed sit amet dui. Proin eget tortor risus.
              </p>
              <div class="product__details__quantity">
                <div class="quantity">
                  <div class="pro-qty">
                    <span>-</span>
                    <input type="text" value="1" />
                    <span>+</span>
                  </div>
                </div>
              </div>
              <a href="#" class="primary-btn">ADD TO CARD</a>
              <a href="#" class="heart-icon"
                ><span class="icon_heart_alt"></span
              ></a>
              <ul>
                <li><b>Availability</b> <span>In Stock</span></li>
                <li>
                  <b>Shipping</b>
                  <span>01 day shipping. <samp>Free pickup today</samp></span>
                </li>
                <li><b>Weight</b> <span>0.5 kg</span></li>
                <li>
                  <b>Share on</b>
                  <div class="share">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="product__details__tab">
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    data-toggle="tab"
                    href="#tabs-1"
                    role="tab"
                    aria-selected="true"
                    >Description</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-toggle="tab"
                    href="#tabs-2"
                    role="tab"
                    aria-selected="false"
                    >Information</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    data-toggle="tab"
                    href="#tabs-3"
                    role="tab"
                    aria-selected="false"
                    >Reviews <span>(1)</span></a
                  >
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tabs-1" role="tabpanel">
                  <div class="product__details__tab__desc">
                    <h6>Products Infomation</h6>
                    <p>
                      Vestibulum ac diam sit amet quam vehicula elementum sed
                      sit amet dui. Pellentesque in ipsum id orci porta dapibus.
                      Proin eget tortor risus. Vivamus suscipit tortor eget
                      felis porttitor volutpat. Vestibulum ac diam sit amet quam
                      vehicula elementum sed sit amet dui. Donec rutrum congue
                      leo eget malesuada. Vivamus suscipit tortor eget felis
                      porttitor volutpat. Curabitur arcu erat, accumsan id
                      imperdiet et, porttitor at sem. Praesent sapien massa,
                      convallis a pellentesque nec, egestas non nisi. Vestibulum
                      ac diam sit amet quam vehicula elementum sed sit amet dui.
                      Vestibulum ante ipsum primis in faucibus orci luctus et
                      ultrices posuere cubilia Curae; Donec velit neque, auctor
                      sit amet aliquam vel, ullamcorper sit amet ligula. Proin
                      eget tortor risus.
                    </p>
                    <p>
                      Praesent sapien massa, convallis a pellentesque nec,
                      egestas non nisi. Lorem ipsum dolor sit amet, consectetur
                      adipiscing elit. Mauris blandit aliquet elit, eget
                      tincidunt nibh pulvinar a. Cras ultricies ligula sed magna
                      dictum porta. Cras ultricies ligula sed magna dictum
                      porta. Sed porttitor lectus nibh. Mauris blandit aliquet
                      elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam
                      sit amet quam vehicula elementum sed sit amet dui. Sed
                      porttitor lectus nibh. Vestibulum ac diam sit amet quam
                      vehicula elementum sed sit amet dui. Proin eget tortor
                      risus.
                    </p>
                  </div>
                </div>
                <div class="tab-pane" id="tabs-2" role="tabpanel">
                  <div class="product__details__tab__desc">
                    <h6>Products Infomation</h6>
                    <p>
                      Vestibulum ac diam sit amet quam vehicula elementum sed
                      sit amet dui. Pellentesque in ipsum id orci porta dapibus.
                      Proin eget tortor risus. Vivamus suscipit tortor eget
                      felis porttitor volutpat. Vestibulum ac diam sit amet quam
                      vehicula elementum sed sit amet dui. Donec rutrum congue
                      leo eget malesuada. Vivamus suscipit tortor eget felis
                      porttitor volutpat. Curabitur arcu erat, accumsan id
                      imperdiet et, porttitor at sem. Praesent sapien massa,
                      convallis a pellentesque nec, egestas non nisi. Vestibulum
                      ac diam sit amet quam vehicula elementum sed sit amet dui.
                      Vestibulum ante ipsum primis in faucibus orci luctus et
                      ultrices posuere cubilia Curae; Donec velit neque, auctor
                      sit amet aliquam vel, ullamcorper sit amet ligula. Proin
                      eget tortor risus.
                    </p>
                    <p>
                      Praesent sapien massa, convallis a pellentesque nec,
                      egestas non nisi. Lorem ipsum dolor sit amet, consectetur
                      adipiscing elit. Mauris blandit aliquet elit, eget
                      tincidunt nibh pulvinar a. Cras ultricies ligula sed magna
                      dictum porta. Cras ultricies ligula sed magna dictum
                      porta. Sed porttitor lectus nibh. Mauris blandit aliquet
                      elit, eget tincidunt nibh pulvinar a.
                    </p>
                  </div>
                </div>
                <div class="tab-pane" id="tabs-3" role="tabpanel">
                  <div class="product__details__tab__desc">
                    <h6>Products Infomation</h6>
                    <p>
                      Vestibulum ac diam sit amet quam vehicula elementum sed
                      sit amet dui. Pellentesque in ipsum id orci porta dapibus.
                      Proin eget tortor risus. Vivamus suscipit tortor eget
                      felis porttitor volutpat. Vestibulum ac diam sit amet quam
                      vehicula elementum sed sit amet dui. Donec rutrum congue
                      leo eget malesuada. Vivamus suscipit tortor eget felis
                      porttitor volutpat. Curabitur arcu erat, accumsan id
                      imperdiet et, porttitor at sem. Praesent sapien massa,
                      convallis a pellentesque nec, egestas non nisi. Vestibulum
                      ac diam sit amet quam vehicula elementum sed sit amet dui.
                      Vestibulum ante ipsum primis in faucibus orci luctus et
                      ultrices posuere cubilia Curae; Donec velit neque, auctor
                      sit amet aliquam vel, ullamcorper sit amet ligula. Proin
                      eget tortor risus.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Product Details Section End -->

    <!-- Related Product Section Begin -->
    <section class="related-product">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="sale-heading">
              <span class="sale-title">Related Product</span>
            </div>
          </div>
          <div class="categories__slider owl-carousel">
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="flash-sale-item">
                  <div class="flash-sale-item-image">
                    <img src="img/product/belt.jpg" class="flash-sale-item-img" alt="">
                    <div class="flash-sale-tag">
                      <span>Sale</span>
                    </div>
                    <div class="flash-discount-tag">
                    <span>30%</span>
                  </div>
                  </div>
                  <div class="flash-sale-item-info">
                    <span class="flash-sale-item-category"><a href="#">Cloth</a></span>
                    <h1 class="flash-sale-item-name">Product Name Here</h1>
                    <div class="flash-sale-item-rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    </div>
                    <div class="flash-sale-item-price-detail">
                      <span class="flash-sale-item-price">1200 PKR</span>
                      <span class="flash-sale-item-del-price">1800 PKR</span>
                    </div>
                    <hr class="flash-sale-underline">
                    <div class="flash-sale-btn">
                      <i class="fa-regular fa-heart" title="Add to wishlist"></i>
                      <i class="fa-solid fa-code-compare" title="Add to compare"></i>
                      <i class="fa-regular fa-eye" title="Quick View"></i>
                    </div>
                    <div class="flash-sale-cart-btn">
                      <i class="fa-solid fa-cart-plus"></i>
                        <a href="#" class="flash-cart">ADD TO CART</a>
                    </div>
                  </div>
              </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="flash-sale-item">
                <div class="flash-sale-item-image">
                  <img src="img/product/girls-kurta-1.webp" class="flash-sale-item-img" alt="">
                  <div class="flash-sale-tag">
                    <span>Sale</span>
                  </div>
                  <div class="flash-discount-tag">
                    <span>30%</span>
                  </div>
                </div>
                <div class="flash-sale-item-info">
                    <span class="flash-sale-item-category"><a href="#">Cloth</a></span>
                    <h1 class="flash-sale-item-name">Product Name Here</h1>
                    <div class="flash-sale-item-rating">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                    </div>
                    <div class="flash-sale-item-price-detail">
                      <span class="flash-sale-item-price">1200 PKR</span>
                      <span class="flash-sale-item-del-price">1800 PKR</span>
                    </div>
                    <hr class="flash-sale-underline">
                    <div class="flash-sale-btn">
                      <i class="fa-regular fa-heart" title="Add to wishlist"></i>
                      <i class="fa-solid fa-code-compare" title="Add to compare"></i>
                      <i class="fa-regular fa-eye" title="Quick View"></i>
                    </div>
                    <div class="flash-sale-cart-btn">
                      <i class="fa-solid fa-cart-plus"></i>
                      <a href="#" class="flash-cart">ADD TO CART</a>
                    </div>
                  </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="flash-sale-item">
              <div class="flash-sale-item-image">
                <img src="img/product/girls-kurta.webp" class="flash-sale-item-img" alt="">
                <div class="flash-sale-tag">
                  <span>Sale</span>
                </div>
                <div class="flash-discount-tag">
                  <span>30%</span>
                </div>
              </div>
              <div class="flash-sale-item-info">
                  <span class="flash-sale-item-category"><a href="#">Cloth</a></span>
                  <h1 class="flash-sale-item-name">Product Name Here</h1>
                  <div class="flash-sale-item-rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                  </div>
                  <div class="flash-sale-item-price-detail">
                    <span class="flash-sale-item-price">1200 PKR</span>
                    <span class="flash-sale-item-del-price">1800 PKR</span>
                  </div>
                  <hr class="flash-sale-underline">
                  <div class="flash-sale-btn">
                    <i class="fa-regular fa-heart" title="Add to wishlist"></i>
                    <i class="fa-solid fa-code-compare" title="Add to compare"></i>
                    <i class="fa-regular fa-eye" title="Quick View"></i>
                  </div>
                  <div class="flash-sale-cart-btn">
                    <i class="fa-solid fa-cart-plus"></i>
                    <a href="#" class="flash-cart">ADD TO CART</a>
                  </div>
                </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="flash-sale-item">
            <div class="flash-sale-item-image">
              <img src="img/product/mens-kurta1.jpg" class="flash-sale-item-img" alt="">
              <div class="flash-sale-tag">
                <span>Sale</span>
              </div>
              <div class="flash-discount-tag">
                <span>30%</span>
              </div>
            </div>
            <div class="flash-sale-item-info">
                <span class="flash-sale-item-category"><a href="#">Cloth</a></span>
                <h1 class="flash-sale-item-name">Product Name Here</h1>
                <div class="flash-sale-item-rating">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                </div>
                <div class="flash-sale-item-price-detail">
                  <span class="flash-sale-item-price">1200 PKR</span>
                  <span class="flash-sale-item-del-price">1800 PKR</span>
                </div>
                <hr class="flash-sale-underline">
                <div class="flash-sale-btn">
                  <i class="fa-regular fa-heart" title="Add to wishlist"></i>
                  <i class="fa-solid fa-code-compare" title="Add to compare"></i>
                  <i class="fa-regular fa-eye" title="Quick View"></i>
                </div>
                <div class="flash-sale-cart-btn">
                  <i class="fa-solid fa-cart-plus"></i>
                  <a href="#" class="flash-cart">ADD TO CART</a>
                </div>
              </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="flash-sale-item">
            <div class="flash-sale-item-image">
              <img src="img/product/women-shirt.webp" class="flash-sale-item-img" alt="">
              <div class="flash-sale-tag">
                <span>Sale</span>
              </div>
              <div class="flash-discount-tag">
                <span>30%</span>
              </div>
            </div>
            <div class="flash-sale-item-info">
                <span class="flash-sale-item-category"><a href="#">Cloth</a></span>
                <h1 class="flash-sale-item-name">Product Name Here</h1>
                <div class="flash-sale-item-rating">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-regular fa-star"></i>
                </div>
                <div class="flash-sale-item-price-detail">
                  <span class="flash-sale-item-price">1200 PKR</span>
                  <span class="flash-sale-item-del-price">1800 PKR</span>
                </div>
                <hr class="flash-sale-underline">
                <div class="flash-sale-btn">
                  <i class="fa-regular fa-heart" title="Add to wishlist"></i>
                  <i class="fa-solid fa-code-compare" title="Add to compare"></i>
                  <i class="fa-regular fa-eye" title="Quick View"></i>
                </div>
                <div class="flash-sale-cart-btn">
                  <i class="fa-solid fa-cart-plus"></i>
                  <a href="#" class="flash-cart">ADD TO CART</a>
                </div>
              </div>
        </div>
      </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Related Product Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="footer__about">
              <div class="footer__about__logo">
                <a href="./index.html"
                  ><img src="img/logo1.png" alt="" height="70px"
                /></a>
              </div>
              <ul>
                <li>Address: 60-49 Road 11378 New York</li>
                <li>Phone: +95 11.178.858</li>
                <li>Email: hello@example.com</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
            <div class="footer__widget">
              <h6>Useful Links</h6>
              <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">About Our Shop</a></li>
                <li><a href="#">Secure Shopping</a></li>
                <li><a href="#">Delivery infomation</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Our Sitemap</a></li>
              </ul>
              <ul>
                <li><a href="#">Who We Are</a></li>
                <li><a href="#">Our Services</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Innovation</a></li>
                <li><a href="#">Testimonials</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-12">
            <div class="footer__widget">
              <h6>Join Our Newsletter Now</h6>
              <p>
                Get E-mail updates about our latest shop and special offers.
              </p>
              <form action="#">
                <input type="text" placeholder="Enter your mail" />
                <button type="submit" class="site-btn">Subscribe</button>
              </form>
              <div class="footer__widget__social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="footer__copyright">
              <div class="footer__copyright__text">
                <p>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  All rights reserved | Designed
                  <i class="fa fa-heart" aria-hidden="true"></i> by
                  <a href="https://www.codebyadnan.com" target="_blank"
                    >Adnan Khan</a
                  >
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
              </div>
              <div class="footer__copyright__payment">
                <img src="img/payment-item.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script
      src="https://kit.fontawesome.com/9498bdc1c3.js"
      crossorigin="anonymous"
    ></script>
    <!--End Js Plugins -->
  </body>
</html>
