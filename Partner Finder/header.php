<nav class="navbar navbar-default navbar-fixed-top menu">
    <div class="container">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="client-index.php"><img src="images/logo.png" alt="logo" /></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
                <li class="dropdown"><a href="client-index.php">Home</a></li>
                <li class="dropdown"><a href="con-client.php?page=logout">Logout</a></li>
            </ul>
            
            <form class="navbar-form hidden-sm" action="con-client.php?page=search-user" method="POST">
                <div class="form-group" style="margin-left: 200px;">
                    <i class="icon ion-android-search"></i>
                    <input type="text" name="search" style="width: 400px;" class="form-control" placeholder="Search friends">
                </div>
            </form>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
</nav>