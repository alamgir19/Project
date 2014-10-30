<?php $page='teacher';
include("bundles/projectbundlefrontend/include/config.php");
include("bundles/projectbundlefrontend/include/conneXion.php");

?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Industrial Training Project - Kids Zone</title>
	<link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/css/style.css'); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/css/lightbox.css'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/css/gallery.css'); ?>" type="text/css" media="screen" />
<script src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/js/prototype.js'); ?>" type="text/javascript"></script>
<script src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/js/scriptaculous.js?load=effects,builder'); ?>" type="text/javascript"></script>
<script src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/js/lightbox.js'); ?>" type="text/javascript"></script>
<script src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/js/prototype.js'); ?>" type="text/javascript"></script>

</head>
<body>
	<div id="background">
<br>

			<?php include("bundles/projectbundlefrontend/include/inc_head_navigation.php");?>

		<div id="page">

			<?php include("bundles/projectbundlefrontend/include/inc_page_header.php");?>
            
			<div id="contents"><br>
<br>

				<div class="commonBox">
                	<div class="commonBox-left-inner">

                    <h2 style="background:#5CA184; font-family:'Times New Roman', Times, serif; color:#FFF; font-size:18px; font-weight:bold;">Video Gallery for Kids!!</h2><br>

                    <div class="gallery">
                    	<div class="galleryphoto"><iframe width="550" height="270" src="//www.youtube.com/embed/BeLT-O8Mz2M" frameborder="0" allowfullscreen></iframe></div>
                     </div><br>
<br>

                     
                     <div class="gallery">
                    	<div class="galleryphoto"><iframe width="550" height="270" src="//www.youtube.com/embed/cE6is_SqAX8" frameborder="0" allowfullscreen></iframe></div>
                     </div>
                     
                    </div>
                    
                    <div class="commonBox-right-inner">
                    <h2 style="background:#5CA184; font-family:'Times New Roman', Times, serif; color:#FFF; font-size:18px; font-weight:bold;">Photo Gallery for Kids!!</h2>
                    		<div class="gallery">
         						<div class="galleryphoto"> <a href="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/images/reef1.jpg') ?>" rel="lightbox[roadtrip]" title="" ><img src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/images/reef1.jpg') ?>" alt="" /></a> </div>
      						</div>
                            
                            <div class="gallery">
         						<div class="galleryphoto"> <a href="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/images/reef2.jpg') ?>" rel="lightbox[roadtrip]" title="" ><img src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/images/reef2.jpg') ?>" alt="" /></a> </div>
      						</div>
                        
                    </div>
                
                </div>
                
			</div>
		</div>
		<?php include("bundles/projectbundlefrontend/include/inc_footer.php");?>
	</div>
</body>
</html>