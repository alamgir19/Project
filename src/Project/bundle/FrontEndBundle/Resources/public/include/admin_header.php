<div class="admin-header">
  <div class="admin-header-left"> <a href="welcome.php"><img src="<?php print $WebSiteUrl.$DegLogoPath;?>" height="100" width="200" alt="Home" /></a> </div>
  <div class="admin-header-right">
    <p>Last login: <strong><?php print $_SESSION['lastLogin'];?></strong></p>
    <br />
    <p>Login by: <strong><?php print $_SESSION['LoggedUser'];?></strong></p>
  </div>
</div>
<div class="page-header">
  <div class="welcome-title"><strong><?php print ucwords($_SESSION['LoggedUser']);?></strong>, welcome to Admin Zone !!</div>
  <div class="log-title"><a href="<?php print $WebSiteUrl;?>admin/site/logout.php">Logout</a></div>
</div>
