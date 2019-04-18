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

          <h1 style="text-align: center; margin-bottom: 100px;">CHAT ROOM</h1>
          <!-- Chat Room
            ================================================= -->
          <div class="chat-room">
            <div class="row">
              <div class="col-md-5">

                <!-- Contact List in Left-->
                <ul class="nav nav-tabs contact-list scrollbar-wrapper scrollbar-outer">

                  <?php
                  $allUser = getAllUser();

                  foreach ($allUser as $user) {
                    if ($user['username'] == "aldrickx") continue;
                    else
                      ?>
                    <li>
                      <a href="#<?php echo $user['username'] ?>" data-toggle="tab">
                        <div class="contact">
                          <img src="images/default-user.png" alt="" class="profile-photo-sm pull-left" />
                          <div class="msg-preview">
                            <h6><?php echo $user['fullname'] ?></h6>
                            <p class="text-muted">Hi there, how are you</p>
                          </div>
                        </div>
                      </a>
                    </li>

                  <?php } ?>
                </ul>
                <!--Contact List in Left End-->
              </div>


              <div class="col-md-7">

                <!--Chat Messages in Right-->
                <div class="tab-content scrollbar-wrapper wrapper scrollbar-outer">

                  <?php

                  foreach ($allUser as $user) {

                    $allMessage = getAllMessageByUsername('aldrickx', $user['username']);
                    $sender = "";

                    ?>

                    <div class="tab-pane active" id="<?php echo $user['username'] ?>">
                      <div class="chat-body">
                        <ul class="chat-message">

                          <?php foreach ($allMessage as $message) {

                            if ($message['sender'] == 'aldrickx') $sender = "right";
                            else $sender = "left"; ?>

                            <li class="<?php echo $sender ?>">
                              <img src="images/default-user.png" class="profile-photo-sm pull-<?php echo $sender ?>">
                              <div class="chat-item">
                                <div class="chat-item-header">
                                  <h5><?php echo $message['sender'] ?></h5>
                                </div>
                                <p><?php echo $message['messageContent'] ?></p>
                              </div>
                            </li>

                          <?php } ?>

                        </ul>
                      </div>
                    </div>

                    <?php } ?>
                  </div>

                <!--Chat Messages in Right End-->

                <div class="send-message">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Type your message">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Send</button>
                    </span>
                  </div>
                </div>

              </div>

              <div class="clearfix"></div>

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