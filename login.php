<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>RentAll | Login</title>
  <link href="Package/boxicons/css/boxicons.min.css" rel="stylesheet">
  <style>
    /* Login */
    section {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f8f8f8;
    }

    .login-container {
      background-color: #fff;
      border-radius: 5px;
      padding: 30px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .login-container h2 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      font-weight: bold;
      display: block;
      text-align: left;
    }

    .form-group input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .form-group input[type="submit"] {
      background-color: #007bff;
      color: #fff;
      cursor: pointer;
    }

    .form-group input[type="submit"]:hover {
      background-color: #0069d9;
    }

    .forgot-password-link {
      text-align: right;
      float: right;
    }

    .password-input {
      position: relative;
    }

    .password-input i {
      position: absolute;
      top: 50%;
      right: 10px;
      transform: translateY(-50%);
      cursor: pointer;
      color: #999;
    }

    .password-input i.active {
      color: #007bff;
    }
  </style>
  <style>
    /* Additional CSS Styles */
    /* You can place your styles here or link an external CSS file */
    @import url("Package/style.css");
  </style>
</head>

<body>
  <!-- Header -->
  <header>
    <a href="#home" class="logo">
      <img src="img/jeep.png" alt="">
    </a>

    <div class="header-btn">
      <a href="#" class="Daftar">Daftar</a>
      <a href="#" class="Masuk">Masuk</a>
    </div>
  </header>

  <!-- Login -->
  <section>
    <div class="login-container">
      <h2>Login</h2>
      <form>
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" id="email" name="email" placeholder="Enter your email address">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <div class="password-input">
            <input type="password" id="password" name="password" placeholder="Enter your password">
            <i class="bx bxs-hide password-toggle" onclick="togglePasswordVisibility()"></i>
          </div>
        </div>
        <div class="forgot-password-link">
          <a href="#forgot">Forgot Password</a>
        </div>
        <div class="form-group">
          <input type="submit" value="Login">
        </div>
      </form>
      <div class="register-link">
        Don't have an account? <a href="#register">Register</a>
      </div>
    </div>
  </section>

  <script>
    function togglePasswordVisibility() {
      var passwordInput = document.getElementById("password");
      var passwordToggle = document.querySelector(".password-toggle i");

      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        passwordToggle.classList.remove("bx-hide");
        passwordToggle.classList.add("bx-show");
      } else {
        passwordInput.type = "password";
        passwordToggle.classList.remove("bx-show");
        passwordToggle.classList.add("bx-hide");
      }
    }
  </script>

</body>

</html>
