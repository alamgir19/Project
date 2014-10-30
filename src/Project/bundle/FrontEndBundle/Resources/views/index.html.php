<?php /*
include("bundles/projectbundlefrontend/include/config.php");
include("bundles/projectbundlefrontend/include/conneXion.php");
*/
$page='home';
?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Industrial Training Project - Alamgir Aman Dipesh</title>
	<link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/css/style.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/css/featured_slide.css') ?>" type="text/css" />
    <script type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/js/jquery-1.4.1.min.js') ?>" ></script>
	<script type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/js/jquery.slidepanel.setup.js') ?>"></script>
	<script type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/js/jquery.cycle.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/js/jquery.cycle.setup.js'); ?>"></script>
</head>
<body>
	<div id="background">
<br>
		<?php //include("bundles/projectbundlefrontend/include/inc_head_navigation.php");?>

		<div id="page">
			<?php //include("bundles/projectbundlefrontend/include/inc_page_header.php");?>
			<div id="contents">
<!--this is start of slide show--> 	
		
            <?php //include("bundles/projectbundlefrontend/include/inc_slideshow.php");?>

<!--this is end of slide show-->                

                <div class="commonBox">
                <div class="homeImg">
						<img src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/images/front.jpg') ?>" alt="Img" width="510" height="350">
					</div>
					
                            <h2>Latest Featured Project</h2>
                            <h3>Future of Information Technology</h3>
                            <strong>:Microsoft Says</strong>
                            <p>In a blog post on Microsoft�s technet blog, the company said that its annual TechForum, which was hosted at Microsoft�s HQ this week, was focused on the move from information technology to intelligent technology. What this means is that computers will no longer play a passive role in our everyday lives as an input tool, but rather take part in our lives in a meaningful way. Machines, such as your smartphone or tablet, will learn just as much from you as you learn from it..</p>
                            <div class="latestBox-details"><a href="">Details » </a></div>
                        
                    </br><br>
<br>

                    
                   <div class="clr"></div>
                   <div class="homeImg">
						<img src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/images/itp1.jpg') ?>" alt="Img" width="510" height="350">
					</div>
                     <h2>career opportunities</h2>
                            <h3>Future of IT Students</h3>
                            <p>A number of reports indicate that the Information Technology sector has the highest expectations of growth across all sectors. An Australian Bureau of Statistics report indicates that Australians with university level qualifications in technology have one of the best career perspectives nationwide. Despite the growing demand for IT graduates, data from Graduate Careers Australia indicates that there is a shortage of IT graduates and employers find them the hardest to source. IT graduates may go on to work for organisations like Google, Amazon, Facebook or Apple...</p>
                            <div class="latestBox-details"><a href="">Details » </a></div>
                    
					
                    
				
			</div>
		</div>
        
		 <?php include("bundles/projectbundlefrontend/include/inc_footer.php");?>
	</div>
</body>
</html>