<div class="col-md-3 static">
    <div class="profile-card">
        <img src="images/default-user.png" alt="user" class="profile-photo" />
        <h5><a href="client-my-profile.php?username=<?php echo $_SESSION['username']; ?>" class="text-white"><?php echo $_SESSION['username']; ?></a></h5>
        <span class="text-white"><i class="ion ion-android-person-add"></i> <?php echo getTotalFollower($_SESSION['username']) ?></span>
    </div>
    <!--profile card ends-->

    <ul class="nav-news-feed">
        <li><i class="icon ion-ios-paper"></i>
            <div><a href="client-index.php">Home</a></div>
        </li>
        <li><i class="icon ion-ios-people-outline"></i>
            <div><a href="client-my-profile.php?username=<?php echo $_SESSION['username'] ?>">My Profile</a></div>
        </li>
        <li><i class="icon ion-chatboxes"></i>
            <div><a href="client-message.php">Messages</a></div>
        </li>
    </ul>
    <!--news-feed links ends-->
</div>