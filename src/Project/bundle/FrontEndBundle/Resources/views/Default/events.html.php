<?php 
include("bundles/projectbundlefrontend/include/config.php");
include("bundles/projectbundlefrontend/include/conneXion.php");
$ev_sql=  mysql_query("SELECT * FROM events where Id=$id");
$ev_row=  mysql_fetch_array($ev_sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>New Events - Industrial Training Project</title>

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

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php print $ev_row['Title'];?>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo $view['router']->generate('projectbundle_front_end_homepage'); ?>">Home</a>
                    </li>
                    <li class="active"><?php print $ev_row['Title'];?></li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="img-responsive" src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/images/userfiles/'.$ev_row['BigImage']); ?>" alt="">
                        </div>
                        
                    </div>

                    <!-- Controls -->
                   
                </div>
            </div>
            <div class="col-md-4">
                <h3>Event Description</h3>
                <p><?php print $ev_row['Description'];?></p>
                <h3>Event Details</h3>
                <ul>
                    <li>Sharp at <strong><?php print substr($ev_row['Time'],0,1);?></strong> O'clock</li>
                    <li>The allocated place is <strong><?php print $ev_row['Place'];?></strong></li>
                    <li>The Confirmed Date is :<strong><?php print $ev_row['EventDate'];?></strong></li>
                    <li>If any question, please contact: <strong>0424342439</strong></li>
                </ul>
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Related Events</h2>
            </div>
            <?php $rel_sql=  mysql_query("SELECT * FROM events where Id <> $id");
            while($rel_row=  mysql_fetch_array($rel_sql)){?>
            <div class="col-md-3 col-sm-6">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <img class="img-responsive img-hover" src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/images/userfiles/').$rel_row['Small_Image']; ?>" alt="">
                    </div>
                    <div class="panel-body">
                        <h4><?php print $rel_row['Title'];?></h4>
                        <p><?php print substr($rel_row['Description'],0,30);?></p>
                        <a href="<?php echo $view['router']->generate('event_detail').'/'.$rel_row['Id']; ?>" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <?php }?>
            
            
            
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <?php include("bundles/projectbundlefrontend/include/inc_footer.php");?>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <?php include("bundles/projectbundlefrontend/include/inc_foot_jquery.php");?>

</body>

</html>
