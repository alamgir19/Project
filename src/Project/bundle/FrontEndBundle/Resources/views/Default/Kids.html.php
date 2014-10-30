<!DOCTYPE html>
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

    <title>Kids Zone - Victorian Digital Career</title>

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
                <h1 class="page-header">Kidz
                    <small>Zone</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo $view['router']->generate('projectbundle_front_end_homepage'); ?>">Home</a>
                    </li>
                    <li class="active">Kids Zone</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/images/Kidszone3.jpg') ?>" alt="">
                    <div class="caption">
                        <h3>Kids Z0ne<br>
                            
                        </h3>
                        <p>The kids playing in this fun park is looking so beautiful</p>
                        <a href="#" class="btn btn-primary" target="_blank">Learn More</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/images/Kidszone2.jpg') ?>" alt="">
                    <div class="caption">
                        <h3>Kids Satellite<br>
                            
                        </h3>
                        <p>The kids playing in this fun park is looking so beautiful</p>
                        <a href="#" class="btn btn-primary" target="_blank">Learn More</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/images/KidsZone1.jpg') ?>" alt="">
                    <div class="caption">
                        <h3>Kids with alphabet<br>
                            
                        </h3>
                        <p>The kids playing in this fun park is looking so beautiful</p>
                        <a href="#" class="btn btn-primary" target="_blank">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <!-- Footer -->
        <?php include("bundles/projectbundlefrontend/include/inc_footer.php");?>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <?php include("bundles/projectbundlefrontend/include/inc_foot_jquery.php");?>

</body>

</html>
