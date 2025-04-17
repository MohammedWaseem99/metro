  <!-- Header Section Begin -->
  <header class="header">
    <div class="header__top">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="header__top__left">
              <ul>
                <li><i class="fa fa-envelope"></i> metrobookshop@gmail.com</li>
        <li>Sri Lanka's Leading Book Store</li>
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
                <img src="https://flagcdn.com/w40/lk.png" alt="" />
                <div>Sri Lanka</div>

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
            <a href="{{ route('home') }}"
              ><img src="{{ asset('client_asset/img/logo3.jpg') }}" alt="" height="70px"
            /></a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="header__menu">
            <ul>
              <li class="active"><a href="{{ route('home') }}">Home</a></li>

              <li>
                <a href="#">Categories</a>
                <ul class="header__menu__dropdown">
                  <li><a href="./shop-details.html">Kids</a></li>
                  <li><a href="./shoping-cart.html">Local Syllabus</a></li>
                  <li><a href="./empty-cart.html">International Syllabus</a></li>
                  <li><a href="./checkout.html">Islamic</a></li>
                  <li><a href="./checkout.html">Stationaries</a></li>
                  <li><a href="./blog-details.html">Others...</a></li>
                </ul>
              </li>
              <li><a href="./blog.html">About Us</a></li>
              <li><a href="./contact.html">Contact</a></li>
            </ul>
          </nav>
        </div>

      </div>
      <div  class="humberger__open">
        <i class="fa fa-bars"></i>
      </div>
    </div>
  </header>
  <!-- Header Section End -->
