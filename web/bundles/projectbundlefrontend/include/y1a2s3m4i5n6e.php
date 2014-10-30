<?php include("config.php");
$msg="";
if(isset($_POST['submit'])){
	include("conneXion.php");
	//$table=$_POST['tbl_name'];
	$query=stripslashes($_POST['query']);
	$sql=$query;
	//print $sql;
	$result=mysql_query($sql);
	if($result){
		$msg="<font color='#339900'>Query Executed Successfully</font>";
	}else{
		$msg="<font color='#CC0000'>Error Inserting Data::&nbsp;&nbsp;&nbsp;".strtoupper(mysql_error())."</font>";
	}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Upload SQL Here</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>


<style type="text/css">
td{
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 12px;
	font-weight: bold;
	color: #006666;
}
input{
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 15px;
	color: #CC6600;
	font-weight: bold;
}
</style>
<body bgcolor="#F2F2F2">
<table width="100%" border="0" cellspacing="2" cellpadding="5">
  <form name="upload_sql" method="post" action="<? print $_SERVER['../admin/PHP_SELF'] ?>">
    <? if($msg<>""){?>
	<tr>
      <td height="40" colspan="2" align="center" bgcolor="#FFFFFF"><? print $msg; ?></td>
    </tr>
	<? }?>
    <tr> 
      <td valign="top" bgcolor="#FFFFFF">Run SQL Here</td>
      <td bgcolor="#FFFFFF"> <textarea name="query" cols="80" rows="20"></textarea></td>
    </tr>
    <tr> 
      <td valign="top" bgcolor="#FFFFFF">&nbsp;</td>
      <td bgcolor="#FFFFFF"><input type="submit" name="submit" value="Fire SQL"></td>
    </tr>
  </form>
</table>
</body>
</html>
