<!DOCTYPE html>
<html>

<head>
  <title>Login Akun</title>
  <link rel="stylesheet" href="assets/style/style-login.css" />
  <link rel="shortcut icon" href="assets/icon/TryoutIn-icon.png" />
  <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300" rel="stylesheet" type="text/css" />
  <link href="https://fonts.cdnfonts.com/css/montserrat" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet" />

  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">

        <form action="login_db.php" class="sign-in-form" method="POST">
          <h2 class="title">Sign In</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="username" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock" onclick="showPassword()"></i>
            <input type="password" placeholder="Password" name="password" required />
          </div>
          <input type="submit" value="Login" class="btn solid" name="submit" />

          <p class="social-text">Or Sign in with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>

        <form action="regis_db.php" class="sign-up-form" method="POST">
          <h2 class="title">Sign Up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username" name="username" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" required />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email" name="email" required />
          </div>
          <input type="submit" value="Sign Up" class="btn solid" id="sign-up-right" />

          <p class="social-text">Or Sign up with social platforms</p>
          <div class="social-media">
            <a href="#" class="social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-google"></i>
            </a>
            <a href="#" class="social-icon">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
        </form>
      </div>
    </div>
    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here?</h3>
          <p>
            Silahkan melakukan registrasi untuk membuat akun dengan cara
            mengisi form di bawah ini. Mendaftarkan diri sebagar member
            Tryoutin
            <strong>tidak akan dipungut biaya </strong>alias
            <strong>Rp. 0,00.</strong>
          </p>
          <button class="btn transparent" id="sign-up-btn">Sign Up</button>
        </div>
        <img src="assets/icon/log.svg" class="image" alt="" />
      </div>

      <div class="panel right-panel">
        <div class="content">
          <h3>One of us?</h3>
          <p>
            Apakah anda sudah memiliki akun? Jika sudah silahkan klik <strong>Sign In.</strong>
          </p>
          <button class="btn transparent" id="sign-in-btn">Sign In</button>
        </div>
        <img src="assets/icon/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script>
    const sign_in_btn = document.querySelector("#sign-in-btn");
    const sign_up_btn = document.querySelector("#sign-up-btn");
    const container = document.querySelector(".container");

    sign_up_btn.addEventListener("click", () => {
      container.classList.add("sign-up-mode");
    });

    sign_in_btn.addEventListener("click", () => {
      container.classList.remove("sign-up-mode");
    });

    function showPassword() {
      const passwordInput = document.getElementById("password");

      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleButton.textContent = "Sembunyikan password";
      } else {
        passwordInput.type = "password";
        toggleButton.textContent = "Tampilkan password";
      }
    }
  </script>
</body>

</html>