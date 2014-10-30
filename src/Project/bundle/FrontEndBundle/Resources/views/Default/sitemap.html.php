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

    <title>Site Map - Industrial Training Project</title>

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
    
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Site map
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo $view['router']->generate('projectbundle_front_end_homepage'); ?>">Home</a>
                    </li>
                    <li class="active">sitemap</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <h4>Category</h4>
            <?php $cat_sql=  mysql_query('SELECT * FROM category');
            while($cat_row=  mysql_fetch_array($cat_sql)){?>
            <div class="col-lg-12">
                <a href="<?php echo $view['router']->generate($cat_row['urlTitle']); ?>"><p><?php print $cat_row['Title'];?></p></a>
            </div>
            <?php }?>
            <hr>
            <h4>Events</h4>
            <?php $eve_sql=  mysql_query('SELECT * FROM events');
            while($eve_row=  mysql_fetch_array($eve_sql)){?>
            <div class="col-lg-12">
                <a href="<?php echo $view['router']->generate('event_detail').'/'.$eve_row['Id']; ?>"><p><?php print $eve_row['Title'];?></p></a>
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
