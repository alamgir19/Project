<?php 
include("bundles/projectbundlefrontend/include/config.php");
include("bundles/projectbundlefrontend/include/conneXion.php");
$page='home';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home - Industial Training Project</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/css/ict_style.css') ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/font-awesome-4.1.0/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <?php include("bundles/projectbundlefrontend/include/inc_project_header.php");?>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <?php include("bundles/projectbundlefrontend/include/inc_project_navigator.php");?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
    <?php include("bundles/projectbundlefrontend/include/inc_slideshow.php");?>

    <!-- Page Content -->
    <div class="container">
        
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">
                    Victorian Digital Career!!!
                </h2>
            </div>
            <div class="col-md-7">
                <a href="blog-post.html">
                    <img class="img-responsive img-hover" src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/images/creek5.jpg') ?>" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>ICT in Present World</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                <a class="btn btn-primary" href="#">Read More &Gg; </a>
            </div>
        </div>
        <!-- /.row -->
        
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">New ICT Explorer Events</h3>
            </div>
            <div class="col-lg-12">

                <ul id="myTab" class="nav nav-tabs nav-justified">
                    <?php $events_sql=  mysql_query("select * from events ORDER BY Title LIMIT 4");
                    $total_event= 4;// mysql_num_rows($event_sql);
                    $p=1;
                    while($events_row=  mysql_fetch_array($events_sql) and $p<=$total_event){?>
                    <li <?php if($p==1){?>class="active"<?php }?>><a href="#service-<?php if($p==1){print "one";} elseif ($p==2){print "two";} elseif ($p==3){print "three";} else {
print "four";}?>" data-toggle="tab"><?php print $events_row['Title'];?></a>
                    </li>
                    <?php $p++;}?>
                </ul>

                <div id="myTabContent" class="tab-content">
                    <?php $event_sql=  mysql_query("select * from events ORDER BY Title LIMIT 4");
                    $tot_event= 4;// mysql_num_rows($event_sql);
                    $k=1;
                    while($event_row=  mysql_fetch_array($event_sql) and $k<=$tot_event){?>
                    <div class="tab-pane fade <?php if($k==1){?>active in<?php }?>" id="service-<?php if($k==1){print "one";} elseif ($k==2){print "two";} elseif ($k==3){print "three";} else {
print "four";}?>">
                        <h4><?php print $event_row['Title'];?></h4>
                        <div class="col-md-5">
                <a href="#">
                    <img class="img-responsive img-hover" src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/images/userfiles/'.$event_row['Small_Image']); ?>" alt="">
                </a>
            </div>
            <div class="col-md-6">
                <p><strong>Place:</strong> <?php print $event_row['Place'];?></p>
                <p><strong>Date:</strong> <?php print $event_row['EventDate'];?></p>
                <p><strong>Time:</strong> <?php print $event_row['Time'];?></p>
                <p><strong>Description:</strong> <?php print substr($event_row['Description'],3,100);?></p>
                
                
                <a class="btn btn-primary" href="<?php echo $view['router']->generate('event_detail').$event_row['Id']; ?>">Read More &Gg; </a>
            </div>
                    </div>
                    <?php $k++;}?>
                    
                </div>

            </div>
        </div>
        
        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Our Services Partners</h2>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <img class="img-responsive img-hover" src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/images/img_partner4.jpg') ?>" alt="">
                    </div>
                    <div class="panel-body">
                        <h4>The Astro Data System</h4>
                        <p>This is one of the reputed company in the world of ICT.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <img class="img-responsive img-hover" src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/images/img_partner2.jpg') ?>" alt="">
                    </div>
                    <div class="panel-body">
                        <h4>The Telecom World</h4>
                        <p>This is one of the best telecommunication company in Australia Melbourne.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <img class="img-responsive img-hover" src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/images/ict_partner3.jpg') ?>" alt="">
                    </div>
                    <div class="panel-body">
                        <h4>State Govt of Victoria</h4>
                        <p>The state govt of Victoria opens state sponsorship for the ICT student.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <img class="img-responsive img-hover" src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/images/img_partner.jpg') ?>" alt="">
                    </div>
                    <div class="panel-body">
                        <h4>The Carrier field</h4>
                        <p>This is the best place for internship for the student of ICT.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
        
        
        
        <!-- Portfolio Section -->
        

        

        <hr>

        <!-- Call to Action Section -->
       
        <!-- Footer -->
        <?php include("bundles/projectbundlefrontend/include/inc_footer.php");?>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <?php include("bundles/projectbundlefrontend/include/inc_foot_jquery.php");?>

</body>

</html>
