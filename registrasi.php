<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>RentAll | Registration</title>
  <link rel="stylesheet" href="Package/style.css">
  <link rel="stylesheet" href="Package/boxicons/css/boxicons.min.css">
  <style>
    /* Registration */
    .registration-container {
      max-width: 600px;
      margin: 0 auto;
      padding: 20px;
      margin-top: 5rem;
    }

    .registration-container h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .grid-container {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 10px;
      margin-bottom: 20px;
    }

    .grid-item label {
      display: block;
      font-weight: bold;
    }

    .grid-item input[type="text"],
    .grid-item input[type="email"],
    .grid-item input[type="password"],
    .grid-item input[type="date"],
    .grid-item input[type="file"] {
      width: 100%;
      padding: 10px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }

    .grid-item .password-input {
      position: relative;
    }

    .grid-item .password-input i {
      position: absolute;
      top: 50%;
      right: 10px;
      transform: translateY(-50%);
      cursor: pointer;
    }

    .grid-item input[type="submit"] {
      background-color: #4743FB;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .grid-item input[type="submit"]:hover {
      background-color: #333;
    }

    .login-link {
      text-align: center;
    }
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

  <!-- Registration -->
  <section>
    <div class="registration-container">
      <h2>Registration</h2>
      <div class="grid-container">
        <div class="grid-item">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" placeholder="Enter your name">
        </div>
        <div class="grid-item">
          <label for="email">Email address</label>
          <input type="email" id="email" name="email" placeholder="Enter your email address">
        </div>
        <div class="grid-item">
          <label for="password">Password</label>
          <div class="password-input">
            <input type="password" id="password" name="password" placeholder="Enter your password">
            <i class="bx bx-hide password-toggle" onclick="togglePasswordVisibility()"></i>
          </div>
        </div>
        <div class="grid-item">
          <label for="confirm-password">Confirm Password</label>
          <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password">
        </div>
        <div class="grid-item">
          <label for="phone">Phone number</label>
          <input type="text" id="phone" name="phone" placeholder="Enter your phone number">
        </div>
        <div class="grid-item">
          <label for="address">Address</label>
          <input type="text" id="address" name="address" placeholder="Enter your address">
        </div>
        <div class="grid-item">
          <label for="dob">Date of Birth</label>
          <input type="date" id="dob" name="dob">
        </div>
        <div class="grid-item">
          <label for="photo">Profile Photo</label>
          <input type="file" id="photo" name="photo">
        </div>
        <div class="grid-item">
          <input type="submit" value="Register">
        </div>
      </div>
      <div class="login-link">
        Already have an account? <a href="#login">Login</a>
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
