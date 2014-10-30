<?php $page='teacher';
include("bundles/projectbundlefrontend/include/config.php");
include("bundles/projectbundlefrontend/include/conneXion.php");

?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Industrial Training Project- Teacher</title>
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
            
        	<div class="slideImage"><img src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/images/slides/teachers.gif') ?>" width="99.5%" height="440"> </div>
        	
			<div id="contents">
                <div class="commonBox">
                <div class="commonBox-left-inner">
                <h1>"Focusing on the Advancement of Women in Technology Industries"</h1>
                <h2>Future of Information Technology</h2>
                    <h3>:Deloitte report</h3>

					<p>As technology rapidly evolves and drives huge shifts in business, the information and communications technology (ICT) industry needs to attract more young women, according to a recent report by professional services firm Deloitte. The report, Women in ICT - Perspectives and Perceptions, details how women comprise less than 20% of the Australian ICT workforce. .

?We need to do more to encourage school students and young women in particular, to pursue a career in ICT. Our teachers and career advisors need to see the potential for women to have rewarding careers in the ICT industry and they need to encourage them".</p>

<p>"There are the lots of programs run in the victoria for attracting to woman towards the Information technology top 5 programs are as:.. </p>
                    
                    <div class="programBox-details"><a href="<?php echo $view['router']->generate('woman'); ?>">5 Programs for woman » </a></div>
                    
                    
                    </div>
                    
                    <div class="commonBox-right-inner">
                    	<h1>ICT Internship Programme</h1>
                		<h3>: Department of Employment:</h3>
                            <p>The Internship Programme has been running since 2006 and is designed to address skill shortages in ICT areas across the Department. Interns will be engaged on a non-ongoing basis at the APS Level 1 for an initial period of three months, with the option to be extended. As an ICT Intern you will gain paid experience in the ICT environment, whilst providing the flexibility to complete your degree.

The ICT Internship Programme is open to students studying an ICT qualification with no more than three semesters remaining of their ICT degree. While primarily intended for students, the ICT Internship Programme is also open to people already holding ICT degrees. Interns will receive on the job training and support from employees with valuable experience, and insight into team operations. Interns will gain experience through close contact with clients, participation in team meetings, and regular, considered feedback from Supervisors.</p>

						<div class="programBox-details"><a href="">5 Programs for ICT » </a></div>
                    </div>
                    
				
			</div><br>
<br>
</div>
          <div align="center"><img src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/images/demo/piecemaker/3.gif') ?>" align="middle" width="808" height="302"></div>
          <br>
          <div align="center"> <div class="programBox-details"><a href="<?php echo $view['router']->generate('kidz'); ?>">kids zone » </a></div></div>
<br>

      <?php include("bundles/projectbundlefrontend/include/inc_footer.php");?>
	</div>
</body>
</html>