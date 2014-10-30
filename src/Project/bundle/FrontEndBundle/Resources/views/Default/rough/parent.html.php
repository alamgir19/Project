<?php $page='parent';
include("bundles/projectbundlefrontend/include/config.php");
include("bundles/projectbundlefrontend/include/conneXion.php");

?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Industrial Training Project-Parent</title>
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

			<?php include("bundles/projectbundlefrontend/include/inc_head_navigation.php");?>

		<div id="page">

			<?php include("bundles/projectbundlefrontend/include/inc_page_header.php");?>
            
        	<div class="slideImage"><img src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/images/slides/parent.gif') ?>" width="99.5%" height="440"> </div>
        	
			<div id="contents">
                <div class="commonBox">
                <div class="commonBox-left-inner">
                <h1>Why your children should study Information technology</h1>
                <h2>Information & Communication Technology careers</h2>
                   
					<p>The Information and Communication Technology (ICT) Industry is one of the fastest growing and changing fields. Technology is developing rapidly and new devices and systems are constantly being created to provide faster and more efficient methods for information and communication technology. Careers in the ICT field are in high demand and the industry is expected to grow. Professionals in ICT careers may work in commercial service sectors and ICT companies.</p>
                    
                    
                <h2>Information & Communication Technology Pay scale</h2>
                    
					<p>In the information technology Students can get a good pay scale . They can earn handsome money according to their skills</p>
                    
                    <div class="programBox-details"><a href="">VIEW THE FULL DETAILS » </a></div>
                       
                    </div>
                    <div class="commonBox-right-inner">
                    <h1>how we help parents !</h1>
                    
                    	<div align="center"><iframe width="510" height="310" src="//www.youtube.com/embed/53amcRzZdCU" frameborder="0" allowfullscreen></iframe></div>
                     <br>
                    	<p>We are here to help support you as a parent in encouraging your child’s interest in Information technologies. These technologies including computers, telecommunications systems, and the Internet have bought profound and revolutionary changes to business, consumers, education, health, entertainment – indeed, every aspect of our contemporary life. As a result, encouraging your child to have an interest in digital technologies, and pursue a digital technologies career is a wise choice with diverse employment prospects!</p>
                        
                        <p>We provides a list of activities around Australia that may be of interest to your child. If you know of one that we have not included, please let us know!</p>

						
                    </div>
                    
				
			</div>
            
            
            
            
		</div>
		 <?php include("bundles/projectbundlefrontend/include/inc_footer.php");?>
	</div>
</body>
</html>