<?php 
include("bundles/projectbundlefrontend/include/userReqd.php");
include("bundles/projectbundlefrontend/include/config.php");
include("bundles/projectbundlefrontend/include/conneXion.php");
require("bundles/projectbundlefrontend/ckeditor/ckeditor.php");
//include("bundles/projectbundlefrontend/include/my-functions.php");
//$id=$_GET['id'];
//print $id;
if ($action2=='add'){
$msg="";
$id=0;
$type="";
$title="";
$caption="";
$image_alt="";
$txtaDetails="";
$label="Add";
}
$Inhome="";
if($action2=='edit')
{
    $label="Edit";
    //print $label;
    //print $action1;
}
else 
{
    $label="Add";
    
}
if ($action2=='edit'){
	$label="Update";
	//print $id;
			//$Id=$_POST['OneChecked'][$i];
			$sql_site=mysql_query("SELECT * FROM slideshow WHERE Id='$id'");
			//print "SELECT * FROM site WHERE Id=$Id";
			//print "SELECT * FROM slideshow WHERE Id='$id'";
			while($row_site=mysql_fetch_array($sql_site)){
				$id=$row_site['Id'];
                                $title=$row_site['Title'];
				$image_alt=$row_site['ImageAlt'];
				$txtaDetails=$row_site['Details'];
				//$img_big=$row_site['img_big'];
				//$img_thumb=$row_site['img_thumb'];
				
				
			
		
	}
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Slide Show - ITP</title>
<link href="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/css/admin_style.css') ?>" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/js/textLimit.js') ?>"></script>
<script type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/ckeditor/ckeditor.js') ?>"></script>

<!--[if lt IE 7]>
<script type="text/javascript" src="js/unitpngfix.js"></script>
<![endif]-->
</head>
<body>
<div id="site-in">
  <div id="wrapper">
    <?php include("bundles/projectbundlefrontend/include/admin_header.php");?>
  </br>
      <div class="page-wrap">
      <div class="page-title">
        <div class="homeicon"><a href="../site/welcome.php">Homepage </a></div>
        <div class="adminNav"><a href="../site/welcome.php">Home</a> / Travel News</div>
      </div>
      <!--  PAGE CONTENT  -->
      <div class="page-content">
        <div class="page-left" id="frmAddEdit">
          <h2><?php print $label." ";?>Slide Show </h2>
          <table width="134%" border="0" cellspacing="4" cellpadding="4" class="frmAddEdit">
      <form name="frmGallery" method="post" action="<?php echo $view['router']->generate('slideupdate').'/'.$action2.'/'.$id; ?>" enctype="multipart/form-data" onsubmit="return doValidate()">
	  
      <input name="txt_id" type="hidden" id="txt_id" value="<?php print $id;?>"  />
      <tr>
        <td align="left"><strong>Image* </strong></td>
        <td width="83%" align="left" valign="bottom"><input name="fileImg" type="file" id="fileImg" />
          Size: <?php print "680 X 300 px";?></td>
      </tr>
      <tr>
        <td align="left"><strong>Image Alt</strong></td>
        <td align="left"><input name="image_alt" type="text" id="image_alt" size="50" value="<?php print $image_alt;?>" /> </td>
      </tr>
      <tr>
        <td align="left"><strong>Title </strong></td>
        <td align="left"><input name="txtTitle" type="text" id="txtTitle" size="50" value="<?php print $title;?>" /> 
          if applicable only </td>
      </tr>
      <tr>
          <td align="left" valign="top" class="tdtxt2"><strong>Details</strong></td>
                <td colspan="5" align="left" valign="top" class="tdtxt2"><textarea class="ckeditor" name="txtaDetails"><?php print $txtaDetails;?></textarea></td>
       </tr>
        
        <tr>
        <td align="left"><strong>Image Link </strong></td>
        <td align="left"><input name="link" type="text" id="link" size="50" value="<?php //print $link;?>" /> 
          if applicable only </td>
      </tr>
        
      <tr>
                    <td width="17%" align="left"><strong>Show In Homepage</strong></td>
                    <td><input type="checkbox" name="chkHome" id="chkHome" <?php if($Inhome==1) print "checked='checked'";?> /></td>
       </tr>
      <tr>
        <td align="right">&nbsp;</td>
        <td align="left"><input name="btn<?php print $label;?>" type="submit" id="btn<?php print $label;?>" value="<?php print $label;?>" /></td>
        </tr>
	  </form>
    </table>
        </div>
        
      </div>
      <!--  END PAGE CONTENT  -->
    </div>
  </div>
</div>
<br />
<?php include("bundles/projectbundlefrontend/include/admin_footer.php");?>
</body>
</html>