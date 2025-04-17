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
              <h2>Contact-Us</h2>
              <div class="breadcrumb__option">
                <a href="./index.html">Home</a>
                <span>Contact</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!--Contact Section-->
    <section class="contact">
      <div class="container">
        <div class="row" style="align-items: center">
          <div class="col-md-7 col-lg-6">
            <div class="contact-item">
              <h1 class="contact-title">Contact Us</h1>
              <p class="contact-sub-title">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Repudiandae quidem quibusdam nostrum totam quam. Saepe sequi
                rerum aliquam molestiae at.
              </p>
              <div class="form-container">
                <form action="post">
                  <div class="input-group">
                    <i class="fa-solid fa-user input-icon"></i>
                    <input
                      type="text"
                      name="name"
                      id="name"
                      class="name"
                      placeholder="Enter your name"
                      required
                    />
                  </div>
                  <div class="input-group">
                    <i class="fa-solid fa-envelope input-icon"></i>
                    <input
                      type="email"
                      name="email"
                      id="email"
                      class="email"
                      placeholder="Enter your email"
                      required
                    />
                  </div>
                  <div class="input-group">
                    <i class="fa-solid fa-comment input-icon"></i>
                    <textarea
                      name="message"
                      id="messgae"
                      class="message"
                      cols="70"
                      rows="10"
                      placeholder="Message Here"
                     required></textarea>
                  </div>
                  <div class="contact-button">
                    <button type="submit" class="contact-btn">
                      Send Messgae
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-5 col-lg-6">
            <div class="contact-detail">
              <h3 class="contact-detail-title">Qucik Contact</h3>
              <p class="contact-detail-sub-title">
                Lorem ipsum dolor sit amet consectetur adipisicing elit Dicta
                iusto doloremque!
              </p>
              <div class="contact-detail-container">
                <div class="contact-deatail-icon">
                  <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="contact-detail-info">
                  <span class="detail-title">Address</span>
                  <span class="address"
                    >Street Name, FL 45877, United States of America</span
                  >
                </div>
              </div>

              <div class="contact-detail-container">
                <div class="contact-deatail-icon">
                  <i class="fa-solid fa-phone-volume"></i>
                </div>
                <div class="contact-detail-info">
                  <span class="detail-title">Phone</span>
                  <span class="call">+923234587522</span>
                  <span class="call">+923234587522</span>
                </div>
              </div>

              <div class="contact-detail-container">
                <div class="contact-deatail-icon">
                  <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="contact-detail-info">
                  <span class="detail-title">Email</span>
                  <span class="email">info@example.com</span>
                  <span class="email">support@example.com</span>
                </div>
              </div>

              <div class="contact-detail-container">
                <div class="contact-deatail-icon">
                  <i class="fa-solid fa-clock"></i>
                </div>
                <div class="contact-detail-info">
                  <span class="detail-title">Business Hours</span>
                  <span class="working">Mon-Fri: 8:30am - 6pm</span>
                  <span class="working">Sat-Sun: 11:30am - 4pm</span>
                </div>
              </div>
            </div>
          </div>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52887706.14540557!2d-161.74454347928352!3d35.99563672201457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2s!4v1707037459880!5m2!1sen!2s"
            width="600"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>
    </section>

    <!--End Contact Section-->

    @endsection
