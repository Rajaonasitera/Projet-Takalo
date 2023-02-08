<?php
    $us=$this->session->userdata('user');
    $user=$us['idUser'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="<?php echo site_url("css/login.css");?>">
</head>
<body>
  <h1>Takalou'Now</h1>
  <div class="wrapper">
      <div class="title-text">
        <div class="title login">Login</div>
        <div class="title signup">Signup</div>
      </div>
      <div class="form-container">
        <div class="slide-controls">
          <input type="radio" name="slide" id="login" checked>
          <input type="radio" name="slide" id="signup">
          <label for="login" class="slide login">Login</label>
          <label for="signup" class="slide signup">Signup</label>
          <div class="slider-tab"></div>
        </div>
        <div class="form-inner">
          <form action="Login_controller" class="login" method="post">
            <pre>
            </pre>
            <div class="field">
              <input type="email" placeholder="Email Address" required name="email">
            </div>
            <div class="field">
              <input type="password" placeholder="Password" required name="mdp">
            </div>
            <div class="pass-link"><a href="#">Forgot password?</a></div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Login">
            </div>
            <div class="signup-link">Create an account <a href="">Signup now</a></div>
          </form>
          <form action="Sign_controller" class="signup" method="post">
            <div class="field">
              <input type="text" placeholder="Name" required name="name">
            </div>
            <div class="field">
              <input type="email" placeholder="Email Address" required name="email">
            </div>
            <div class="field">
              <input type="password" placeholder="Password" required name="mdp">
            </div>
            <div class="field">
              <input type="password" placeholder="Confirm password" required>
            </div>
            <div class="field btn">
              <div class="btn-layer"></div>
              <input type="submit" value="Signup">
            </div>
            <div class="login-link">Already have an account? <a href="">Login</a></div>
          </form>
        </div>
      </div>
    </div>
  <script  src="js/script.js"></script>
</body>
</html>
