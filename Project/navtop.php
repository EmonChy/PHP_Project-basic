<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
       <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>  -->
        <a class="navbar-brand" href="cpanel.php"><?php echo '<b>'.$WebsiteSiteName.'</b>'; ?></a> 
    </div>
    <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;">
        <b>Logged In as : <b><?php echo $user_info['a_name']; ?></b> <a href="profile.php" class="btn btn-default"><b><?php echo 'ID : '.$user_info['a_userid']; ?></b></a> 
            </b>&nbsp;
            <a href="logout.php" class="btn btn-danger square-btn-adjust"><b>Logout</b></a>
    </div>
</nav> 