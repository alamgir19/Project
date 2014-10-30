<?php include("../../include/userReqd.php");
include("../../include/config.php");
include("../../include/conneXion.php");
include("../../include/my-functions.php");

//$q= $_GET['title'];
//print $q;
$msg="";
$id="";
$type="";
$caption="";
$image_alt="";

$p=$_GET['id'];

$img_alt=$_POST['ImageAlt'];
$cptn=$_POST['Caption'];

if(isset($_POST['chkHome']))
		$Inhome=1;

print $p;
if(isset($_POST['edit']))
{
	$sql_update=mysql_query("UPDATE slideshow SET 
	ImageAlt='$img_alt', 
	Caption='$cptn',
	InHome='".$Inhome."',
	PostedDate='".date("Y-m-d")."'
	WHERE Id=$p");
	print $sql_update;
	if($sql_update)
	{
		$insert_id= $p;
		if($_FILES['fileImg']['tmp_name']!="")
		{
			if($_FILES['fileImg']['tmp_name']!="")
			{
				$fileext=strtolower(substr($_FILES['fileImg']['name'], -3, 3));
				$filename="photos_".$insert_id.".".$fileext;
				$filename_th="th_".$filename;
				$filedir="../../userfiles/";			
				$uploads=move_uploaded_file($_FILES['fileImg']['tmp_name'], $filedir.$filename);
				if($uploads)
				{
					$updates=mysql_query("UPDATE slideshow SET ImageBig='".$filename."' WHERE Id=$p");
					$image = new SimpleImage();
					$image->load($filedir.$filename);
					$image->resize(148,112);
					$image->save("../../userfiles/$filename_th");
					$updates=mysql_query("UPDATE slideshow SET ImageThumb='".$filename_th."' WHERE Id=$p");
					header("location:index.php");
				}
				else
				{
					$msg="<span class='styleError'>Error occured. Big image could not be uploaded.</span>";
				}	
			}
	
		}
		else
		{
			$msg="<span class='styleError'>Error occured. ".mysql_error()."</span>";
		}
	}	
	header("location:index.php");
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Travel News -<?php print $WebSiteName;?></title>
<link href="../../css/admin_style.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="../../js/textLimit.js"></script>
<!--[if lt IE 7]>
<script type="text/javascript" src="js/unitpngfix.js"></script>
<![endif]-->
</head>
<body>
<div id="site-in">
  <div id="wrapper">
    <?php include("../../include/admin_header.php");?>
    <br />
    <div class="page-wrap">
      <div class="page-title">
        <div class="homeicon"><a href="../site/welcome.php">Homepage </a></div>
        <div class="adminNav"><a href="../site/welcome.php">Home</a> / Gallery</div>
      </div>
      <!--  PAGE CONTENT  -->
      <div class="page-content">
        <div class="page-left" id="frmAddEdit">
          <h2>Gallary </h2>
          <table width="100%" border="0" cellspacing="2" cellpadding="4" class="formStyle">
      <form name="frmGallery" method="post" action="" enctype="multipart/form-data" onsubmit="return doValidate()">
	  
      <tr>
        <td align="left">Image* </td>
        <td align="left" valign="bottom"><input name="fileImg" type="file" id="fileImg" />
          Size: <?php print $DefGalleryWd." X ".$DefGalleryHt;?></td>
      </tr>
      <tr>
        <td align="left">Image Alt</td>
        <td align="left"><input name="image_alt" type="text" id="image_alt" size="50" value="<?php print $image_alt;?>" /> </td>
      </tr>
      <tr>
        <td align="left">Photo caption </td>
        <td align="left"><input name="caption" type="text" id="caption" size="50" value="<?php print $caption;?>" /> 
          if applicable only </td>
      </tr>
      <tr>
                    <td width="10%" align="left">Show In Homepage</td>
                    <td><input type="checkbox" name="chkHome" id="chkHome" <?php if($Inhome==1) print "checked='checked'";?> /></td>
       </tr>
      <tr>
        <td align="right">&nbsp;</td>
        <td align="left"><input type="submit" name="edit" value="UPDATE" />
        </tr>
	  </form>
    </table>
        </div>
        <div class="page-right">
          <div class="listmenu">
            <h3 class="headerbar">Available Operation(s)</h3>
            <ul>
              <li><a href="add.php">+ Add ...</a></li>
              <li><a href="">+ Archives</a>
              <ol style="background:none; list-style-type:none;">
          <?php 
			$arch_sql="SELECT PostedDate FROM gallary_photo GROUP BY SUBSTRING_INDEX(PostedDate, '-', 1)";
			$arch_query=mysql_query($arch_sql);
			while($arch_row=mysql_fetch_array($arch_query)){?>
              <li style="background:none;"><a href="index.php?y=<?php print substr($arch_row['PostedDate'], 0, 4);?>"><?php print substr($arch_row['PostedDate'], 0, 4);?></a></li>
              
		 	<?php }?>
        </ol>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!--  END PAGE CONTENT  -->
    </div>
  </div>
</div>
<br />
<?php include("../../include/admin_footer.php");?>
</body>
</html>
