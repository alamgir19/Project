<div class="admin-header">
  <div class="admin-header-left"> <a href="<?php echo $view['router']->generate('login'); ?>"><img src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/images/icloud.png') ?>" height="70" width="150" alt="Home" /></a> </div>
  <div class="admin-header-right">
    <p>Last login: <strong><?php print $_SESSION['lastLogin'];?></strong></p>
    <br />
    <p>Login by: <strong><?php print $_SESSION['LoggedUser'];?></strong></p>
  </div>
</div>
<div class="page-header">
  <div class="welcome-title"><strong><?php print ucwords($_SESSION['LoggedUser']);?></strong>, welcome to Admin Zone !!</div>
  <div class="log-title"><a href="<?php echo $view['router']->generate('logout'); ?>">Logout</a></div>
</div>
