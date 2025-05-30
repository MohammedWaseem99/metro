@extends('cliant.layouts.layout')
@section('content')

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
              <h2>Shopping Cart</h2>
              <div class="breadcrumb__option">
                <a href="./index.html">Home</a>
                <span>Shopping Cart</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="shoping__cart__table">
              <table>
                <thead>
                  <tr>
                    <th class="shoping__product">Products</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="shoping__cart__item">
                      <img
                        src="img/product/couple-watch.jpg"
                        height="100px"
                        width="100px"
                        alt=""
                      />
                      <h5>Product Name</h5>
                    </td>
                    <td class="shoping__cart__price">1200</td>
                    <td class="shoping__cart__quantity">
                      <div class="quantity">
                        <div class="pro-qty">
                          <span>-</span>
                          <input type="text" value="1" />
                          <span>+</span>
                        </div>
                      </div>
                    </td>
                    <td class="shoping__cart__total">1500</td>
                    <td class="shoping__cart__item__close">
                      <span class="icon_close"></span>
                    </td>
                  </tr>
                  <tr>
                    <td class="shoping__cart__item">
                      <img
                        src="img/product/couple-watch.jpg"
                        height="100px"
                        width="100px"
                        alt=""
                      />
                      <h5>Product Name</h5>
                    </td>
                    <td class="shoping__cart__price">1800</td>
                    <td class="shoping__cart__quantity">
                      <div class="quantity">
                        <div class="pro-qty">
                          <span>-</span>
                          <input type="text" value="1" />
                          <span>+</span>
                        </div>
                      </div>
                    </td>
                    <td class="shoping__cart__total">3500</td>
                    <td class="shoping__cart__item__close">
                      <span class="icon_close"></span>
                    </td>
                  </tr>
                  <tr>
                    <td class="shoping__cart__item">
                      <img
                        src="img/product/couple-watch.jpg"
                        height="100px"
                        width="100px"
                        alt=""
                      />
                      <h5>Product Name</h5>
                    </td>
                    <td class="shoping__cart__price">3500</td>
                    <td class="shoping__cart__quantity">
                      <div class="quantity">
                        <div class="pro-qty">
                          <span>-</span>
                          <input type="text" value="1" />
                          <span>+</span>
                        </div>
                      </div>
                    </td>
                    <td class="shoping__cart__total">2500</td>
                    <td class="shoping__cart__item__close">
                      <span class="icon_close"></span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="shoping__cart__btns">
              <a href="./index.html" class="primary-btn cart-btn"
                >CONTINUE SHOPPING</a
              >
              <a href="#" class="primary-btn cart-btn cart-btn-right"
                ><span class="icon_loading"></span> Upadate Cart</a
              >
            </div>
          </div>
          <div class="col-lg-6">
            <div class="shoping__continue">
              <div class="shoping__discount">
                <h5>Discount Codes</h5>
                <form action="#">
                  <input type="text" placeholder="Enter your coupon code" />
                  <button type="submit" class="site-btn">APPLY COUPON</button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="shoping__checkout">
              <h5>Cart Total</h5>
              <ul>
                <li>Subtotal <span>6500</span></li>
                <li>Total <span>6500</span></li>
              </ul>
              <a href="#" class="primary-btn">PROCEED TO CHECKOUT</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Shoping Cart Section End -->

    @endsection
