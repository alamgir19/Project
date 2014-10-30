<?php 
 //include("bundles/projectbundlefrontend/include/userReqd.php");
include("bundles/projectbundlefrontend/include/config.php");
include("bundles/projectbundlefrontend/include/conneXion.php");
//require("bundles/projectbundlefrontend/ckeditor/ckeditor.php");
//include("bundles/projectbundlefrontend/include/my-functions.php");?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin-Welcome</title>
<link href="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/css/admin_style.css'); ?>" rel="stylesheet" type="text/css" />
<!--[if lt IE 7]>
<script type="text/javascript" src="js/unitpngfix.js"></script>
<![endif]-->
</head>
<body>
<div id="site-in">
  <div id="wrapper">
      
    <?php include("bundles/projectbundlefrontend/include/admin_header.php");?>
<br />
    <div class="page-wrap">
      <div class="page-title">
        <div class="homeicon"><a href="welcome.php">admin </a></div>
        <div class="adminNav"><a href="welcome.php">Admin</a> / Category/</div>
      </div>
      <!--  PAGE CONTENT  -->
      <h6>User Log</h6>
      <div class="page-content">        

        <div class="box-wrap">
          <a href="">Add User</a>
        </div>
        
        <div class="box-wrap">
          <a href="">Change Password</a>
        </div>
        
        
      </div>
      
      <h6>Site</h6>
      <div class="page-content">        

        <div class="box-wrap">
          <a href="<?php echo $view['router']->generate('slideshow'); ?>">Slide Show</a>
        </div>
          
          <div class="box-wrap">
          <a href="<?php echo $view['router']->generate('woman_program'); ?>">Woman Program</a>
        </div>
          
          <div class="box-wrap">
          <a href="<?php echo $view['router']->generate('event'); ?>">ICT Events</a>
        </div>
        
        
      </div>
      
       <!--  END PAGE CONTENT  -->
    </div>
  </div>
</div>
<br />

<?php include("bundles/projectbundlefrontend/include/admin_footer.php");?>
</body>
</html>