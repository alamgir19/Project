<?php 
include("bundles/projectbundlefrontend/include/config.php");
include("bundles/projectbundlefrontend/include/conneXion.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Feed Back - Industrial Training Project</title>

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
                <h1 class="page-header">Feed Back
                </h1>
                <ol class="breadcrumb">
                    <li><a href="<?php echo $view['router']->generate('projectbundle_front_end_homepage'); ?>">Home</a>
                    </li>
                    <li class="active">Feed Back</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        
        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <h3>Send us a Message</h3>
                <form name="sentMessage" id="contactForm" method="post" action="<?php echo $view['router']->generate('link-update'); ?>" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" name="fname" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" name="phnum" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" name="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Link Breakage(If any):</label>
                            <select name="selLink" id="selLink" class="form-control">
                                <option value="0">Please Select if any link breakage</option>
                  <?php $sql="SELECT Id, Title FROM woman_program ORDER BY Title";
			  $result=mysql_query($sql);
			  while($row=mysql_fetch_array($result)){?>
                                
                  <option value="<?php print $row['Id'];?>" class="form-control"><?php print $row['Title'];?></option>
                  <?php }?>
                </select>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" name="txtMessage" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>

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
