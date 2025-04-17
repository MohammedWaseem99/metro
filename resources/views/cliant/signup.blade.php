<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SignUp Page | Codebyadnan</title>
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
            <h1><i class="fas fa-sign-in-alt"></i> Sign Up</h1>
            <h3 class="main-text">Embark on Your Digital Adventure</h3>
            <img
              src="https://cdni.iconscout.com/illustration/premium/thumb/man-looking-at-security-registration-data-filling-form-8232664-6564677.png?f=webp"
              class="login-img"
              alt=""
            />
          </div>

          <div class="signup-second-coloum">
            <div class="signup-deatil">
              <div class="logo">
                <img src="img/logo1.png" height="80px" alt="" />
              </div>
              <h1 class="login-title">Create Your Account</h1>
              <form action="" class="form">
                <div class="input-field">
                  <i class="fa-solid fa-user"></i>
                  <input
                    type="text"
                    name="name"
                    id="name"
                    placeholder="Enter your name"
                    required
                  />
                </div>
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
                <button type="button" class="login-btn">Signup</button>
              </form>
              <p class="signup-link">
                Already have an account? <a href="sign-in.html">Login</a>
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
