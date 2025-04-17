<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signin Page | Codebyadnan</title>
    <link rel="stylesheet" type="text/css" href="css/signup-style.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <section class="signup">
      <div class="container">
        <div class="signup-item">
          <div class="signup-first-coloum">
            <h1><i class="fas fa-sign-in-alt"></i> Sign In</h1>
            <h3 class="main-text">Empower Your Digital Journey</h3>
            <img
              src="https://cdni.iconscout.com/illustration/premium/thumb/data-security-4897442-4077854.png"
              class="login-img"
              alt=""
            />
          </div>

          <div class="signup-second-coloum">
            <div class="signup-deatil">
              <div class="logo">
                <img src="img/logo1.png" height="80px" alt="" />
              </div>
              <h1 class="login-title">Log in to your Account</h1>
              <p class="welcome-text">Welcome Back! Select method to log in:</p>
              <div class="social-icon">
                <div class="google">
                  <i class="fa-brands fa-google"></i>
                  <span>Google</span>
                </div>
                <div class="facebook">
                  <i class="fa-brands fa-facebook"></i>
                  <span>Facebook</span>
                </div>
              </div>
              <span class="with-email">or continue with email</span>
              <form action="" class="form">
                <div class="input-field">
                  <i class="fa-solid fa-envelope"></i>
                  <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Enter your email"
                    required
                  />
                </div>
                <div class="input-field">
                  <i class="fa-solid fa-lock"></i>
                  <input
                    type="password"
                    name="password"
                    id="password"
                    placeholder="Enter your password"
                    required
                  />
                  <span class="show-password-btn" onclick="togglePassword()">
                    <i class="fa-solid fa-eye-slash"></i>
                  </span>
                </div>
                <div class="remember-forgot">
                  <label class="remember-me">
                    <input type="checkbox" name="remember" id="remember" />
                    Remember me
                  </label>
                  <span class="forgot-password">Forgot Password?</span>
                </div>
                <button type="button" class="login-btn">Login</button>
              </form>
              <p class="signup-link">
                Don't have an account? <a href="signup.html">Sign up</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script
      src="https://kit.fontawesome.com/9498bdc1c3.js"
      crossorigin="anonymous"
    ></script>

    <script>
      function togglePassword() {
        const passwordField = document.getElementById("password");
        const eyeIcon = document.querySelector(".show-password-btn i");

        if (passwordField.type === "password") {
          passwordField.type = "text";
          eyeIcon.classList.remove("fa-eye-slash");
          eyeIcon.classList.add("fa-eye");
        } else {
          passwordField.type = "password";
          eyeIcon.classList.remove("fa-eye");
          eyeIcon.classList.add("fa-eye-slash");
        }
      }
    </script>
  </body>
</html>
