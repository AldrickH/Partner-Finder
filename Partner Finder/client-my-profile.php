<?php
include 'mod-client.php';
include 'client-login-check.php';

$user = getUserByUsername($_GET['username']);

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

  <div class="container">

    <!-- Timeline
      ================================================= -->
    <div class="timeline">
      <div class="timeline-cover">

        <!--Timeline Menu for Large Screens-->
        <div class="timeline-nav-bar hidden-sm hidden-xs">
          <div class="row">
            <div class="col-md-3">
              <div class="profile-info">
                <img src="images/default-user.png" alt="" class="img-responsive profile-photo" />
                <h3><?php echo $user['username'] ?></h3>

              </div>
            </div>

            <div class="col-md-9" style="display: <?php if ($_GET['username'] == $_SESSION['username']) echo "none"; else echo ""; ?>">
              <?php if (checkFollow($_SESSION['username'], $user['username'])) { ?>
                <a href="con-client.php?page=unfollow&username=<?php echo $user['username'] ?>"><button class="btn btn-primary" style="background: #C0C0C0; color: black;">Unfollow</button></a>
              <?php } else { ?>
                <a href="con-client.php?page=follow&username=<?php echo $user['username'] ?>"><button class="btn btn-primary">Follow</button></a>
              <?php } ?>
            </div>

          </div>
        </div>
        <!--Timeline Menu for Large Screens End-->

        <!--Timeline Menu for Small Screens-->
        <div class="navbar-mobile hidden-lg hidden-md">
          <div class="profile-info">
            <img src="images/default-user.png" alt="" class="img-responsive profile-photo" />
            <h4>Sarah Cruiz</h4>
            <p class="text-muted">Creative Director</p>
          </div>
          <div class="mobile-menu">
            <ul class="list-inline">
              <li><a href="timline.html">Timeline</a></li>
              <li><a href="timeline-about.html" class="active">About</a></li>
              <li><a href="timeline-album.html">Album</a></li>
              <li><a href="timeline-friends.html">Friends</a></li>
            </ul>
            <button class="btn-primary">Add Friend</button>
          </div>
        </div>
        <!--Timeline Menu for Small Screens End-->

      </div>
      <div id="page-contents">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-7">

            <!-- About
              ================================================= -->
            <div class="about-profile">

              <div class="about-content-block">
                <h4 class="grey"><i class="ion-ios-information-outline icon-in-title"></i>Personal Information</h4>
                <p><b>Full Name :</b> <?php echo $user['fullname']; ?></p>
                <p><b>Phone Number : </b> <?php echo $user['phoneNum']; ?></p>
                <p><b>Email :</b> <?php echo $user['email']; ?></p>
                <p><b>Gender :</b> <?php echo $user['gender']; ?></p>
                <p><b>birthdate :</b> <?php echo $user['birthdate']; ?></p>
              </div>

              <div class="about-content-block">
                <h4 class="grey"><i class="ion-ios-location-outline icon-in-title"></i>Address</h4>
                <p><?php echo $_SESSION['address'] ?></p>
              </div>

            </div>
          </div>
          <div class="col-md-2 static">
            <div id="sticky-sidebar">
              <h4 class="grey">Followers</h4>
              <p><?php echo getTotalFollower($_SESSION['username'])?></p>
            </div>
          </div>
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