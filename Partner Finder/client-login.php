<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include 'head.php'?>
	</head>
	<body>

    <!-- Header
    ================================================= -->
		<header id="header" class="lazy-load">
      <?php include 'header.php'?>
    </header>
    <!--Header End-->

    <!-- Top Banner
    ================================================= -->
		<section id="banner">
			<div class="container">

        <!-- Sign Up Form
        ================================================= -->
        <div class="sign-up-form">
					<img src="images/logo.png" alt="Friend Finder">
					<h2 class="text-white" style="font-size: 50px;">SAY NO TO JOMBLO ?</h2>
					<div class="line-divider"></div>
					<div class="form-wrapper">

						<form action="con-client.php?page=login" method="POST">

							<fieldset class="form-group">
								<input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
              </fieldset>

              <fieldset class="form-group">
								<input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
              </fieldset>

              <button type="submit" name="submit" value="login" class="btn-secondary">Login</button>
              
            </form>
            
					</div>
					<a href="client-register.php">Don't have an account?</a>
					<img class="form-shadow" src="images/bottom-shadow.png" alt="" />
				</div><!-- Sign Up Form End -->
			</div>
		</section>

    <!-- Scripts
    ================================================= -->
   <?php include 'js-client.php'?>
    
	</body>
</html>
