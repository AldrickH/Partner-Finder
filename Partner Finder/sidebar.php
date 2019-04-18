<div class="col-md-3 static">
    <div class="profile-card">
        <img src="images/default-user.png" alt="user" class="profile-photo" />
        <h5><a href="client-my-profile.php?username=<?php echo $_SESSION['username']; ?>" class="text-white"><?php echo $_SESSION['username']; ?></a></h5>
        <a href="#" class="text-white"><i class="ion ion-android-person-add"></i> 1,299 followers</a>
    </div>
    <!--profile card ends-->

    <ul class="nav-news-feed">
        <!-- <li><i class="icon ion-ios-people-outline"></i>
            <div><a href="newsfeed-friends.html">Friends</a></div>
        </li> -->
        <li><i class="icon ion-chatboxes"></i>
            <div><a href="client-message.php">Messages</a></div>
        </li>
    </ul>
    <!--news-feed links ends-->
</div>