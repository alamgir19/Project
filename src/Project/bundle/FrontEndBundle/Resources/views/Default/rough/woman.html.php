<?php $page='teacher';

include("bundles/projectbundlefrontend/include/config.php");
include("bundles/projectbundlefrontend/include/conneXion.php");
//print $status;
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Industrial Training Project-Woman</title>
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
            
        	<div class="slideImage"><img src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/images/slides/woman.gif') ?>" width="99.5%" height="440"> </div>
        	
			<div id="contents">
                <div class="commonBox">
                
                		<?php $woman_sql=mysql_query("SELECT* FROM woman_program where CatId = 4 AND InShow=1");
						while($woman_row=mysql_fetch_array($woman_sql)){?>
                        <div id="womanBox">
                    	<h2><?php print $woman_row['Title']?></h2>
                        <p><?php print $woman_row['Description'];?></p>
                        <div class="womanRead"><a href="<?php print $woman_row['Link']?>" target="_blank">For more Details » </a></div>
                        <div class="womanRead"><a href="<?php echo $view['router']->generate('linkStatus').'/'.$woman_row['Id']; ?>">Link don't work? » </a></div><br>
                        

                        </div>
						<?php }?>
                        
                     
                    
                    
				
			</div>
		</div>
		<?php include("bundles/projectbundlefrontend/include/inc_footer.php");?>
	</div>
</body>
</html>