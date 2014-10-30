<?php include("bundles/projectbundlefrontend/include/userReqd.php");
include("bundles/projectbundlefrontend/include/config.php");
include("bundles/projectbundlefrontend/include/conneXion.php");
require("bundles/projectbundlefrontend/ckeditor/ckeditor.php");
//include("bundles/projectbundlefrontend/include/my-functions.php");
ob_start();
print $action2;
print $id;
//print $action2.'this is addprogram action';
//print $id;

if ($action2=='add'){
$msg="";
$id="";
$type="";
$title="";
$txtaDesc="";
$txtTime="";
$txtDate="";
$txtPlace="";
$label="Add";
$id=0;
}
if($action2=='edit')
{
    $label="Edit";
    //print $label;
    //print $action1;
}

if ($action2=='edit'){
	$label="Update";
	//print $id;
			//$Id=$_POST['OneChecked'][$i];
			$sql_site=mysql_query("SELECT * FROM events WHERE Id='$id'");
			//print "SELECT * FROM site WHERE Id=$Id";
			//print "SELECT * FROM slideshow WHERE Id='$id'";
			while($row_site=mysql_fetch_array($sql_site)){
				$id=$row_site['Id'];
                                $title=$row_site['Title'];
				$txtPlace=$row_site['Place'];
				$txtaDesc=$row_site['Description'];
                                $txtTime=$row_site['Time'];
                                $txtDate=$row_site['EventDate'];
                                //$img_big=$row_site['img_big'];
				//$img_thumb=$row_site['img_thumb'];
				
				
			
		
	}
}

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Event -<?php print $WebSiteName;?></title>
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
    <br />
    <div class="page-wrap">
      <div class="page-title">
        <div class="homeicon"><a href="<?php echo $view['router']->generate('welcome'); ?>">Homepage </a></div>
        <div class="adminNav"><a href="<?php echo $view['router']->generate('welcome'); ?>">Home</a> / Woman Program</div>
      </div> 
        <!--  PAGE CONTENT  -->
      <div class="page-content">
        <h2><?php print $label;?> ICT Events </h2>
        <table width="100%" border="0" cellspacing="4" cellpadding="4" class="frmAddEdit">
          <form name="frmGallery" method="post" action="<?php echo $view['router']->generate('event-update').'/'.$action2.'/'.$id; ?>" enctype="multipart/form-data" onsubmit="return doValidate()">
	  
      <input name="txt_id" type="hidden" id="txt_id" value="<?php print $id;?>"  />
      
      <tr>
        <td align="left"><strong>Title </strong></td>
        <td align="left"><input name="txtTitle" type="text" id="txtTitle" size="50" value="<?php print $title;?>" /> 
        </td>
      </tr>
      
      
      
      <tr>
          <td align="left" valign="top" class="tdtxt2"><strong>Description</strong></td>
                <td colspan="5" align="left" valign="top" class="tdtxt2"><textarea class="ckeditor" name="txtaDesc"><?php print $txtaDesc;?></textarea></td>
       </tr>
      
      <tr>
        <td align="left"><strong>Event Time </strong></td>
        <td align="left"><input name="txtTime" type="text" id="link" size="50" value="<?php print $txtTime;?>" /></td>
      </tr>
      
      <tr>
              <td align="left" valign="top"><strong>Event Place</strong></td>
              <td colspan="3" align="left" valign="top"><textarea name="txtPlace" id="txtPlace" cols="103" rows="2"><?php print $txtPlace;?></textarea></td>
            </tr>
      <tr>   
          <td align="left" valign="top"><strong>Event Date</strong></td>
            <td colspan="5" align="left">
              <input name="txtDate" id="txtDate" type="text" class="fromStyle"  value="<?php print $txtDate;?>"/>
              <a href="javascript:showCal('startDate')" title="Select Start Date">
              <img src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/images/calendar.gif'); ?>" alt="Select Start Date" border="0" height="26" width="25" align="absmiddle" /></a> Format: yyyy-mm-dd(2008-Aug-08)</td>
            </tr>
            
      
      <tr>
        <td align="left"><strong>Big Image* </strong></td>
        <td width="83%" align="left" valign="bottom"><input name="fileBigImg" type="file" id="fileBigImg" />
          Size: <?php print "750 X 500 px";?></td>
      </tr>
      <tr>
        <td align="left"><strong>Small Image* </strong></td>
        <td width="83%" align="left" valign="bottom"><input name="fileImg" type="file" id="fileImg" />
          Size: <?php print "600 X 300 px";?></td>
      </tr>
      
      
      <tr>
        <td align="right">&nbsp;</td>
        <td align="left"><input name="btn<?php print $label;?>" type="submit" id="btn<?php print $label;?>" value="<?php print $label;?>" /></td>
        </tr>
	  </form>
        </table>
      </div>
      <!--  END PAGE CONTENT  -->
    </div>
  </div>
</div>
<br />
<?php include("bundles/projectbundlefrontend/include/admin_footer.php");?>
</body>
</html>
