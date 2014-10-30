
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin - login page</title>
<link href="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/css/admin_style.css') ?>" rel="stylesheet" type="text/css" />
<!--[if lt IE 7]>
<script type="text/javascript" src="js/unitpngfix.js"></script>
<![endif]-->
</head>
<body>
<div id="site">
  <div id="wrapper">
    <div id="login">
      <div class="logoHold"><a href="index.php"><img src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/images/icloud.png') ?>" width="150" height="80" alt="Home" /></a></div>
      <div class="coName">Admin :: Our Project</div>
      <div class="signin-Form">
        <div class="tripsearchForm">
          <h2>User Login</h2>
          <form name="frmLogin" method="post" action="<?php echo $view['router']->generate('welcome'); ?>">
            <div class="rowLine">
              <div class="inputTitle">User Name:</div>
              <div class="inputArea">
                <input name="txtUsername" type="text" class="inputBox" data-type="email" id="txtUsername" onfocus="this.select();" onclick="javascript:this.value='';" value=" Type your username "/>
              </div>
            </div>
            <div class="rowLine">
              <div class="inputTitle">Password:</div>
              <div class="inputArea">
                <input name="txtPassword" type="password" class="inputBox" id="txtPassword" onfocus="this.select();" onclick="javascript:this.value='';" value=" Type your password  "/>
              </div>
            </div>
            <input name="btnLogin" type="image" class="formbutton" id="btnLogin" value="Sign In" src="/Project/Symfony2Project/web/bundles/projectbundlefrontend/images/img/signIn.jpg" alt="Sign In" width="75" height="28" />
          </form>
        </div>
      </div>
      <div class="signin-ctrl"><a href="#">Forget Password ?</a> <span style="display:none;">|| <a href="#">Register</a></span> </div>
    </div>
  </div>
</div>
<div id="footer-wrap">
  <div id="footer"> ADA Company &copy; <?php print date("Y");?>. All rights reserved. </div>
</div>
</body>
</html>
