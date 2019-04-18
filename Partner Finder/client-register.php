<?php 
include 'mod-client.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'head.php' ?>
</head>

<body>

  <!-- Top Banner -->
  <section id="banner">

    <div class="container">

      <!-- Sign Up Form -->
      <div class="sign-up-form">
        <a href="index.html" class="logo"><img src="images/logo.png" alt="Friend Finder" /></a>
        <h2 class="text-white" style="font-size: 50px;">SAY NO TO JOMBLO ?</h2>
        <div class="line-divider"></div>
        <div class="form-wrapper">
          <p class="signup-text">Signup now and meet awesome people around the world</p>

          <form action="con-client.php?page=register" method="POST">
            <fieldset class="form-group">
              <input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
            </fieldset>

            <fieldset class="form-group">
              <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter Fullname">
            </fieldset>

            <fieldset class="form-group">
              <input type="text" class="form-control" id="phoneNum" name="phoneNum" placeholder="Enter Phone Number">
            </fieldset>

            <fieldset class="form-group">
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
            </fieldset>

            <div style="margin: 20px 0 20px 0;">
              <span style="font-size: 20px; margin-right: 20px;">GENDER : </span>
              <input type="radio" style="transform: scale(2);" name="gender" value="male">&nbsp;&nbsp;<span style="font-size: 20px; margin-right: 20px;">MALE</span>
              <input type="radio" style="transform: scale(2);" name="gender" value="female">&nbsp;&nbsp;<span style="font-size: 20px; ">FEMALE</span>
            </div>

            <div style="margin: 20px 0 20px 0;">
              <span style="font-size: 20px; margin-right: 20px;">BIRTHDATE</span><input type="date" style="width: 500px; height: 50px; color: black;" id="birthdate" name="birthdate">
            </div>

            <fieldset class="form-group">
              <input type="text" class="form-control" id="address" name="address" placeholder="Enter your Address">
            </fieldset>

            <fieldset class="form-group">
              <input type="password" class="form-control" id="password" name="password" placeholder="Enter a password">
            </fieldset>
            <button type="submit" class="btn-secondary">Signup</button>
          </form>

        </div>
        <a href="client-login.php">Already have an account?</a>
        <img class="form-shadow" src="images/bottom-shadow.png" alt="" />
      </div><!-- Sign Up Form End -->
    </div>
  </section>

  <!-- Scripts -->
  <?php include 'js-client.php' ?>

</body>

</html>