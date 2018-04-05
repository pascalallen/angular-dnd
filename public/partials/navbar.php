<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="app.php">Far West Capital</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="app.php">Credit Lookup</a>
                </li>
                <?php if(isset($_SESSION['adminEmail'])){ ?>
                    <li>
                        <a href="logs.php">Logs</a>
                    </li>
                    <li>
                        <a href="admins.php">Admins</a>
                    </li>
                    <li>
                        <a href="blocked-users.php">Blocked Users</a>
                    </li>
                <?php }; ?>
                <li>
                    <a href="http://www.farwestcaptransportation.com/" onclick="return confirm('This will redirect you to Far West Capital\'s website.');">Website</a>
                </li>
                <li>
                    <a href="http://client.farwestcap.com"  onclick="return confirm('This will redirect you to Far West Capital\'s Client Portal.');">Client Portal</a>
                </li>
                <li>
                    <a href="#" data-toggle="modal" data-target="#contactModal">Contact</a>
                </li>
                <?php if(isset($_SESSION['cliNo']) && !isset($_SESSION['userEmail'])){ ?>
                    <li>
                        <a href="users-index.php">Users</a>
                    </li>
                <?php }; ?>
                <li>
                    <a href="logout.php" onclick="return confirm('Are you sure you wish to sign off?');">Sign Out</a>
                </li>					
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

