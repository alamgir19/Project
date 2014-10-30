<?php include("bundles/projectbundlefrontend/include/userReqd.php");
include("bundles/projectbundlefrontend/include/config.php");
include("bundles/projectbundlefrontend/include/conneXion.php");
require("bundles/projectbundlefrontend/ckeditor/ckeditor.php");
include("bundles/projectbundlefrontend/include/my-functions.php");
ob_start();


$id="";
$type="";
$title="";
$txtaDesc="";
$txtTime="";
$txtDate="";
$txtPlace="";
$msg="";
$label="Add";

/*

if(isset($_POST['btnDelete'])){
	$id2change=$_GET['Id'];
	$numrows=$_POST['hdnRows'];
	print $numrows;
	$filter=$_POST['hdnParentId'];
	for($i=0;$i<=$numrows;$i++){
		if(!empty($_POST['OneChecked'][$i])){			
			$sql=mysql_query("SELECT CanDelete FROM category WHERE Id=".$_POST['OneChecked'][$i]."");
			//print "SELECT CanDelete FROM site WHERE Id=".$_POST['OneChecked'][$i]."";			
			$res=mysql_result($sql, 0);
			
				$sql_site=mysql_query("DELETE FROM category WHERE Id=".$_POST['OneChecked'][$i]."");
				header("location:index.php");
		}
	}
}

			
*/

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Event Site</title>
<link href="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/css/admin_style.css') ?>" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/js/textLimit.js') ?>"></script>
<script type="text/javascript" src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/ckeditor/ckeditor.js') ?>"></script>
<!--[if lt IE 7]>
<script type="text/javascript" src="js/unitpngfix.js"></script>
<![endif]-->
<script type="text/javascript">
	var arrayOfRolloverClasses = new Array();
	var arrayOfClickClasses = new Array();
	var activeRow = false;
	var activeRowClickArray = new Array();
	
	function highlightTableRow()
	{
		var tableObj = this.parentNode;
		if(tableObj.tagName!='TABLE')tableObj = tableObj.parentNode;

		if(this!=activeRow){
			this.setAttribute('origCl',this.className);
			this.origCl = this.className;
		}
		this.className = arrayOfRolloverClasses[tableObj.id];
		
		activeRow = this;
		
	}
	
	function clickOnTableRow()
	{
		var tableObj = this.parentNode;
		if(tableObj.tagName!='TABLE')tableObj = tableObj.parentNode;		
		
		if(activeRowClickArray[tableObj.id] && this!=activeRowClickArray[tableObj.id]){
			activeRowClickArray[tableObj.id].className='';
		}
		this.className = arrayOfClickClasses[tableObj.id];
		
		activeRowClickArray[tableObj.id] = this;
				
	}
	
	function resetRowStyle()
	{
		var tableObj = this.parentNode;
		if(tableObj.tagName!='TABLE')tableObj = tableObj.parentNode;

		if(activeRowClickArray[tableObj.id] && this==activeRowClickArray[tableObj.id]){
			this.className = arrayOfClickClasses[tableObj.id];
			return;	
		}
		
		var origCl = this.getAttribute('origCl');
		if(!origCl)origCl = this.origCl;
		this.className=origCl;
		
	}
		
	function addTableRolloverEffect(tableId,whichClass,whichClassOnClick)
	{
		arrayOfRolloverClasses[tableId] = whichClass;
		arrayOfClickClasses[tableId] = whichClassOnClick;
		
		var tableObj = document.getElementById(tableId);
		var tBody = tableObj.getElementsByTagName('TBODY');
		if(tBody){
			var rows = tBody[0].getElementsByTagName('TR');
		}else{
			var rows = tableObj.getElementsByTagName('TR');
		}
		for(var no=0;no<rows.length;no++){
			rows[no].onmouseover = highlightTableRow;
			rows[no].onmouseout = resetRowStyle;
			
			if(whichClassOnClick){
				rows[no].onclick = clickOnTableRow;	
			}
		}
		
	}
checked=false;
function ToggleCheck (frmAddEdit) {
	var aa= document.getElementById('frmAddEdit');
	if (checked == false){
		checked = true
    }else{
         checked = false
	}
	for (var i =0; i < aa.elements.length; i++) {
		aa.elements[i].checked = checked;
	}
}

//function DelConfirm(cvalue){
function DelConfirm(cvalue){
	if(confirm("Do you want to delete this record permanently?")){
		location.href = cvalue;
	}
	
}

function EditConfirm(cvalue){	
	if(confirm("Do you want to edit this record?")){
		//location.href = cvalue;
		return true;
	}else{
		return false;
	}
	//alert("DELETE action is currently disabled by administrator.");
}
</script>

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
        <form name="frmAddEdit" method="post" action="" id="frmAddEdit">
        <div class="page-left">
          <h2>Woman Programs:</h2>
          <?php if($msg<>''){?>
          <h2 style="text-align:center;"><?php print $msg;?></h2>
          <?php }?>
          
          <table width="100%" border="0" cellspacing="1" cellpadding="1" id="myTable">
            <thead>
                <tr>
                <td width="5%" valign="top">SN</td>
                <td width="4%"><input type="checkbox" name="AllChecked" id="AllChecked" title="Click to all select" onclick="ToggleCheck(frmAddEdit)" /></td>
                <td width="32%" valign="top">Title</td>
                <td width="20%" valign="top">Place</td>
                <td width="20%" valign="top">Event Date</td>
                <td width="20%" valign="top">Posted date</td>
                <td width="14%" valign="top">Action</td>
              </tr>
            </thead>
            <tbody>
              <?php $sqls="SELECT * FROM events ORDER BY Id";
		  //print $_GET['suci'].$sqls;
		  $results=mysql_query($sqls);
		  $i=1; //for function alternateRowColor()
		  
		  while($rowss=mysql_fetch_array($results)){?>
          
              <tr>
                <td valign="top"><?php print $i;?></td>
                <td><input type="checkbox" name="OneChecked[]" value="<?php print $rowss['Id'];?>" id="OneChecked" title="Click to select" /></td>
                <td valign="top"><?php print $rowss['Title'];?></td>
                <td valign="top"><?php print $rowss['Place'];?></td>
                <td valign="top"><?php print $rowss['EventDate'];?></td>
                <td valign="top"><?php print $rowss['PostedDate'];?></td>
                <td class="gridDataLeft" valign="top"> <a href="javascript:DelConfirm('<?php echo $view['router']->generate('event-update').'/delete/'.$rowss['Id']; ?>')" class="lnkDelete" title="Delete"><img src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/images/spacer.png') ?>" width="15" height="15" border="0" /></a>   <a href="<?php echo $view['router']->generate('add-event').'/'.$rowss['Id'].'/edit'; ?>" class="lnkEdit" title="Edit"><img src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/images/spacer.png') ?>" width="16" height="16" border="0" /></a></td>
              
              </tr>
              <?php $i++;
		  }?>
                
                
            </tbody>
              
             
              
          </table>
          <script type="text/javascript">
addTableRolloverEffect('myTable','tableRollOverEffect1','tableRowClickEffect1');
addTableRolloverEffect('myTable2','tableRollOverEffect2','tableRowClickEffect2');
</script>
        </div><input type="hidden" name="hdnNumRows" id="hdnNumRows" value="<?php print mysql_num_rows($results);?>" />
           </form>
        <div class="page-right">
          <div class="listmenu">
            <h3 class="headerbar">Available Operation(s)</h3>
            <ul>
              <li><a href="<?php echo $view['router']->generate('add-event').'/0/add'; ?>">+ Add ...</a></li>
            </ul>
          </div> 
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