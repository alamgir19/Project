<?php include("bundles/projectbundlefrontend/include/userReqd.php");
include("bundles/projectbundlefrontend/include/config.php");
include("bundles/projectbundlefrontend/include/conneXion.php");
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home -Slide show</title>
<link href="<?php echo $view['assets']->getUrl('/Project/Symfony2Project/web/bundles/projectbundlefrontend/css/admin_style.css'); ?>" rel="stylesheet" type="text/css" />
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
        <div class="adminNav"><a href="<?php echo $view['router']->generate('welcome'); ?>">Admin</a> / <a href="../slide/index.php">Home Page » Slide Show</div>
      </div>
      <!--  PAGE CONTENT  -->
      <div class="page-content">        
        
        <div class="page-left">
        <div class="in-pageTxt">
          
          <?php 
		 $sql="SELECT * FROM slideshow";
		 $result=mysql_query($sql);		 
		 if(mysql_num_rows($result)<>0){
			 while($rows=mysql_fetch_array($result)){
                             $id=$rows['Id'];
                             $image_big=$rows['Image'];
                             ?>         
         <div class="slide-wrap">
             <div class="slideImg-wrap"><img src="<?php echo $view['assets']->getUrl('bundles/projectbundlefrontend/images/userfiles/'.$image_big) ?>" width="150" Height="150" border="0" /></div>
          <div class="slide-box-act"><a href="javascript:DelConfirm('<?php echo $view['router']->generate('slideupdate').'/delete/'.$id; ?>')">DELETE</a> </div>
         
          <div class="slide-box-act"><a href="<?php echo $view['router']->generate('slideadd').'/'.$id.'/edit'; ?>">EDIT</a> </div>
       	 
        </div>
        
        <?php } 
	  }else{?>
      <p style="text-align:center"><strong>No record(s) found.</strong></p>
	  <?php }?>
          
          
      
	</div>
        </div>
        <div class="page-right">
          <div class="listmenu">
            <h3 class="headerbar">Available Operation(s)</h3>
            <ul>
              <li><a href="<?php echo $view['router']->generate('slideadd').'/0/add'; ?>">+ Add Photos...</a></li>
             
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