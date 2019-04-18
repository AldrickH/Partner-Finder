<?php
include 'mod-client.php';
include 'client-login-check.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'head.php' ?>
</head>

<body>

  <!-- Header
    ================================================= -->
  <header id="header">
    <?php include 'header.php' ?>
  </header>
  <!--Header End-->

  <div id="page-contents">
    <div class="container">
      <div class="row">

        <!-- Newsfeed Common Side Bar Left
          ================================================= -->
        <?php include 'sidebar.php' ?>

        <div class="col-md-9">

          <!-- Nearby People List
            ================================================= -->
          <?php
          $allUserData = getAllUser();

          foreach ($allUserData as $user) {
            if ($user['username'] == $_SESSION['username']) continue;
            ?>

            <div class="people-nearby">
              <div class="nearby-user">
                <div class="row">
                  <div class="col-md-2 col-sm-2">
                    <img src="images/default-user.png" alt="user" class="profile-photo-lg" />
                  </div>
                  <div class="col-md-7 col-sm-7">
                    <h5><a href="client-my-profile.php?username=<?php echo $user['username']; ?>" class="profile-link"><?php echo $user['fullname'] ?></a></h5>
                    <p>Software Engineer</p>
                    <p class="text-muted">Address :<?php echo $user['address'] ?> </p>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <button class="btn btn-primary pull-right">Follow</button>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>

        </div>

      </div>
    </div>
  </div>

  <!-- Footer
    ================================================= -->
  <footer id="footer">
    <?php include 'footer.php' ?>
  </footer>

  <!-- Scripts
    ================================================= -->
  <?php include 'js-client.php' ?>
</body>

</html>